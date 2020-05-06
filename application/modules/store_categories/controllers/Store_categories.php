<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Store_categories extends MX_Controller 
{

	function __construct() {
		parent::__construct();
	}
	
	function _get_full_cat_url($update_id)
	{
		$this->load->module('site_settings');
		$item_segments =$this->site_settings->_get_items_segments();
		$data=$this->fetch_data_from_db($update_id);
		$cat_url=$data['cat_url'];

		$full_cat_url=base_url().$item_segments.$cat_url;
		return $full_cat_url;
	}

	function view($update_id)
	{
		if (!is_numeric($update_id)) {
			redirect('site_security/not_allowed/');
		}
		//fetch the category details
		$data = $this->fetch_data_from_db($update_id);

		//gating currency symbol
		$this->load->module('site_settings');
		$this->load->module('custom_pagination');

        //count the items that belong to this category
		$use_limit = FALSE;
		$mysql_query = $this->_generate_mysql_query($update_id,$use_limit);
		$query = $this->_custom_query($mysql_query);
		$total_items = $query->num_rows();

		//fetch the items for this page
		$use_limit = TRUE;
		$mysql_query = $this->_generate_mysql_query($update_id,$use_limit);

		$pagination_data['template'] = 'public_bootstrap';
		$pagination_data['target_base_url'] = $this->get_target_pagination_base_url();
		$pagination_data['total_rows']=$total_items;
		$pagination_data['offset_segment']=4;
		$pagination_data['limit'] =$this->get_limit();
		
		$data['pagination']=$this->custom_pagination->_generate_pagination($pagination_data);
		$pagination_data['offset']=$this->get_offset();
		$data['showing_statement']=$this->custom_pagination->get_showing_statement($pagination_data);
		$data['use_angularjs']=TRUE;
		$data['currency_symbol']= $this->load->site_settings->_get_currency_symbol();
		$data['item_segments'] = $this->site_settings->_get_item_segments();
		$data['query']= $this->_custom_query($mysql_query);
		$data['update_id'] = $update_id;
		$data['flash'] = $this->session->flashdata('item');
		$data['view_module'] = "store_categories";
		$data['view_file'] = "view";
		$this->load->module('templates');
		$this->templates->public_bootstrap($data);

	}
	function get_target_pagination_base_url()
	{
		$first_bit=$this->uri->segment(1);
		$second_bit=$this->uri->segment(2);
		$third_bit=$this->uri->segment(3);

		$target_base_url= base_url().$first_bit."/".$second_bit."/".$third_bit;

		return $target_base_url;

	}

	function _generate_mysql_query($update_id, $use_limit)
	{
		//NOTE: use_limit can be TRUE OR FALSE
		$mysql_query="
		SELECT store_items.item_title,
		store_items.item_url,
		store_items.item_price,
		store_items.small_pic,
		store_items.was_price
		FROM store_cat_assign INNER JOIN store_items ON store_cat_assign.item_id=store_items.id
		WHERE store_cat_assign.cat_id=$update_id and store_items.status=1
		";

		if ($use_limit == TRUE) {
			$limit = $this->get_limit();
			$offset = $this->get_offset();
			$mysql_query.= " limit ". $offset. ", ".$limit;
		}

		return $mysql_query;
	}

	function get_limit()
	{
		$limit = 12;
		return $limit;
	}

	function get_offset()
	{
		$offset = $this->uri->segment(4);
		if (!is_numeric($offset)) {
			$offset = 0;
		}
		return $offset;
	}
	function _get_cat_id_from_cat_url($cat_url)
	{
		$query = $this->get_where_custom('cat_url', $cat_url);
		foreach ($query->result() as $row) {
			$cat_id = $row->id;
		}
		if (!isset($cat_id)) {
			$cat_id = 0;
		}
		return $cat_id;
	}

	function _draw_top_nav()
	{
		$mysql_query="select * from store_categories where parent_cat_id=0 order by priority";
		$query=$this->_custom_query($mysql_query);
		foreach ($query->result() as $row) {
			$parent_categories[$row->id]=$row->cat_title;
		}
		$this->load->module('site_settings');
		$items_segments=$this->site_settings->_get_items_segments();
		$data['start_of_target_url']=base_url().$items_segments;
		$data['parent_categories'] = $parent_categories;
		$this->load->view('top_nav', $data);
		
	}

	function _get_parent_cat_title($update_id)
	{
		$data = $this->fetch_data_from_db($update_id);
		$parent_cat_id = $data['parent_cat_id'];
		$parent_cat_title = $this->_get_cat_title($parent_cat_id);
		return $parent_cat_title;
	}

	function _get_all_sub_cats_from_dropdown()
	{
		//NOTE:this is use on store_cat_assign
		$mysql_query="select * from store_categories where parent_cat_id!=0 order by parent_cat_id, cat_title";
		$query=$this->_custom_query($mysql_query);
		foreach ($query->result() as $row) {
			$parent_cat_title=$this->_get_cat_title($row->parent_cat_id);
			$sub_categories[$row->id]=$parent_cat_title.">".$row->cat_title;
		}
		if (!isset($sub_categories)) {
			$sub_categories="";
		}
		return $sub_categories;
		
	}

	function sort()
	{  
		$this->load->module('site_security');
		$this->site_security->_make_sure_is_admin();

		$number = $this->input->post('number', TRUE);
		for ($i=1; $i <= $number; $i++) {

			$update_id = $_POST['order' . $i];
			$data['priority']=$i;
			$this->_update($update_id,$data);
		} 
	}
	function _draw_sortable_list($parent_cat_id)
	{
		$mysql_query = "select * from store_categories where parent_cat_id=$parent_cat_id order by priority";
		$data['query']= $this->_custom_query($mysql_query);
		$this->load->view('sortable_list', $data);

	}
	function _count_sub_cat($update_id)
	{
		//return the number of sub categories belong to this category
		$query = $this->get_where_custom('parent_cat_id', $update_id);
		$num_rows = $query->num_rows();
		return $num_rows;
	}

	function _get_cat_title($update_id)
	{
		$data = $this->fetch_data_from_db($update_id);
		$cat_title = $data['cat_title'];
		return $cat_title;
	}
	function fetch_data_from_post()
	{
		$data['cat_title'] = $this->input->post('cat_title', TRUE);
		$data['parent_cat_id'] = $this->input->post('parent_cat_id', TRUE);
		return $data;
	}

	function fetch_data_from_db($update_id)
	{
		if (!is_numeric($update_id)) {
			redirect('site_security/not_allowed/');
		}
		$query = $this->get_where($update_id);
		foreach ($query->result() as $row) {
			$data['cat_title'] = $row->cat_title;
			$data['cat_url'] = $row->cat_url;
			$data['parent_cat_id'] = $row->parent_cat_id;
			
		}
		if (!isset($data)) {
			$data = "";
		}
		return $data;
	}

	function _get_dropdown_options($update_id)
	{
		if (!is_numeric($update_id)) {
			$update_id = 0;
			$options[''] = 'please select...';
		}
		//build an array of all option categories
		$mysql_query = "select * from store_categories where parent_cat_id=0 and id!=$update_id";
		$query = $this->_custom_query($mysql_query);
		foreach ($query->result() as $row) {
			$options[$row->id] = $row->cat_title;
		}
		return $options;
	}

	function create()
	{
		$this->load->library('session');
		$this->load->module('site_security');
		$this->site_security->_make_sure_is_admin();

		$update_id = $this->uri->segment(3);
		$submit = $this->input->post('submit', TRUE);
		if ($submit == "Cancel") {
			redirect('store_categories/manage');
		}
		if ($submit == "submit") {
			//process the form
			$this->load->library('form_validation');
			$this->form_validation->set_rules('cat_title','Category Title','required|max_length[240]');
			if ($this->form_validation->run()== TRUE) {
				//get the variables
				$data = $this->fetch_data_from_post();
				$data['cat_url']= url_title($data['cat_title']);

				if (is_numeric($update_id)) {
					//update category
					$this->_update($update_id, $data);
					$flash_msg = "The Category details were  successfully updated.";
					$value ='<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
					$this->session->set_flashdata('item', $value);
					redirect('store_categories/create/' . $update_id);
				}else{
					//insert new category

					$this->_insert($data);
					$update_id = $this->get_max();
					$flash_msg = "The cat was  successfully added.";
					$value ='<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
					$this->session->set_flashdata('item', $value);
					redirect('store_categories/create/' . $update_id);
				}
			}else{

			}
		}
		if (is_numeric($update_id) && ($submit!="submit")) {
			$data = $this->fetch_data_from_db($update_id);
		}else{
			$data = $this->fetch_data_from_post();
		}
		if (!is_numeric($update_id)) {
			$data['headline'] = 'Add New Category';
		}else{
			$data['headline'] = 'Update category';
		}
		$data['options'] = $this->_get_dropdown_options($update_id);
		$data['num_dropdown_options'] = count($data['options']);
		$data['update_id'] = $update_id;
		$data['flash'] = $this->session->flashdata('item');
		$data['view_file'] = "create";
		$this->load->module('templates');
		$this->templates->admin($data);
	}

	function manage()
	{
		$this->load->module('site_security');
		$this->site_security->_make_sure_is_admin();

		//for selecting only parent category
		$parent_cat_id = $this->uri->segment(3);
		if (!is_numeric($parent_cat_id)) {
			$parent_cat_id = 0;
		}
		$data['sort_this'] = TRUE;
		$data['parent_cat_id'] = $parent_cat_id;
		$data['query'] = $this->get_where_custom('parent_cat_id', $parent_cat_id);
		$data['flash'] = $this->session->flashdata('item');
		$data['view_file'] = "manage";
		$this->load->module('templates');
		$this->templates->admin($data);
	}
	function get($order_by){
		$this->load->model('mdl_store_categories');
		$query = $this->mdl_store_categories->get($order_by);
		return $query;
	}

	function get_with_limit($limit, $offset, $order_by) {
		$this->load->model('mdl_store_categories');
		$query = $this->mdl_store_categories->get_with_limit($limit, $offset, $order_by);
		return $query;
	}

	function get_where($id){
		$this->load->model('mdl_store_categories');
		$query = $this->mdl_store_categories->get_where($id);
		return $query;
	}

	function get_where_custom($col, $value) {
		$this->load->model('mdl_store_categories');
		$query = $this->mdl_store_categories->get_where_custom($col, $value);
		return $query;
	}

	function _insert($data){
		$this->load->model('mdl_store_categories');
		$this->mdl_store_categories->_insert($data);
	}

	function _update($id, $data){
		$this->load->model('mdl_store_categories');
		$this->mdl_store_categories->_update($id, $data);
	}

	function _delete($id){
		$this->load->model('mdl_store_categories');
		$this->mdl_store_categories->_delete($id);
	}

	function count_where($column, $value) {
		$this->load->model('mdl_store_categories');
		$count = $this->mdl_store_categories->count_where($column, $value);
		return $count;
	}

	function get_max() {
		$this->load->model('mdl_store_categories');
		$max_id = $this->mdl_store_categories->get_max();
		return $max_id;
	}

	function _custom_query($mysql_query) {
		$this->load->model('mdl_store_categories');
		$query = $this->mdl_store_categories->_custom_query($mysql_query);
		return $query;
	}

}
