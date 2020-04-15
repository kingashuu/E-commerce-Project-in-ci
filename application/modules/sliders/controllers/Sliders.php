<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Sliders extends MX_Controller 
{

	function __construct() {
		parent::__construct();
	}

	function _attempt_draw_slider()
	{
		$current_url=current_url();
		$query_ads=$this->get_where_custom('target_url', $current_url);
		$num_rows_ads=$query_ads->num_rows();
		if ($num_rows_ads>0) {
			$this->load->module('slides');
			//get the parent id 
			foreach ($query_ads->result() as $row) {
				$parent_id=$row->id;
			}
			// echo $parent_id;die();

			$data['query_slides']=$this->slides->get_where_custom('parent_id', $parent_id);
			$this->load->view('slider',$data);
		}
	}

	function delete($update_id)
	{
		if (!is_numeric($update_id)) {
			redirect('site_security/not_allowed/');
		}
		$this->load->module('site_security');
		$this->site_security->_make_sure_is_admin();

		$submit = $this->input->post('submit', TRUE);
		if ($submit == "Cancel") {
			redirect('sliders/create/' . $update_id);
		} elseif ($submit == "Yes - delete Slider") {
			$this->_process_delete($update_id);

			$flash_msg = "The slider was  successfully deleted.";
			$value = '<div class="alert alert-success" role="alert">' . $flash_msg . '</div>';
			$this->session->set_flashdata('item', $value);
			redirect('sliders/manage');
		}

	}
		function _process_delete($update_id)
	{
		//delet any slide that are associated with this slider
		$this->load->module('slides');
		$query=$this->slides->get_where_custom('parent_id', update_id);
		foreach ($query->result() as $row) {
			$this->slides->_process_delete($row->id);
		}
		//attempt to delete slider
		$this->_delete($update_id);
	}

	function deleteconf($update_id)
	{
		if (!is_numeric($update_id)) {
			redirect('site_security/not_allowed/');
		}
		$this->load->library('session');
		$this->load->module('site_security');
		$this->site_security->_make_sure_is_admin();

		$data['headline'] = 'Delete Entire Slider';
		$data['update_id'] = $update_id;
		$data['flash'] = $this->session->flashdata('item');
		$data['view_file'] = "deleteconf";
		$this->load->module('templates');
		$this->templates->admin($data);

	}

	function _draw_blocks()
	{
	//This is draw the slide blocs that is in home page;
		$data['query']=$this->get('target_url');
		$num_rows=$data['query']->num_rows();
		if ($num_rows>0) {
			$this->load->view('sliders', $data);
		}
	}  

	function view($update_id)
	{
		if (!is_numeric($update_id)) {
			redirect('site_security/not_allowed/');
		}
		//fetch the slider details
		$data = $this->fetch_data_from_db($update_id);

		//gating currency symbol
		$this->load->module('site_settings');
		$this->load->module('custom_pagination');

        //count the items that belong to this slider

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
		$data['currency_symbol']= $this->load->site_settings->_get_currency_symbol();
		$data['item_segments'] = $this->site_settings->_get_item_segments();
		$data['query']= $this->_custom_query($mysql_query);
		$data['update_id'] = $update_id;
		$data['flash'] = $this->session->flashdata('item');
		$data['view_module'] = "sliders";
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
		$limit = 10;
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
	function sort()
	{  
		$this->load->module('site_security');
		$this->site_security->_make_sure_is_admin();

		$number = $this->input->post('number', TRUE);
		for ($i=1; $i <= $number; $i++) {

			$update_id = $_POST['order' . $i];
			$data['target_url']=$i;
			$this->_update($update_id,$data);
		} 
	}

	function _get_title($update_id)
	{
		$title=$this->_get_slider_title($update_id);
		return $title;
	}

	

	function _get_slider_title($update_id)
	{
		$data = $this->fetch_data_from_db($update_id);
		$slider_title = $data['slider_title'];
		return $slider_title;
	}
	function fetch_data_from_post()
	{
		$data['slider_title'] = $this->input->post('slider_title', TRUE);
		$data['target_url'] = $this->input->post('target_url', TRUE);
		return $data;
	}
	
	function fetch_data_from_db($update_id)
	{
		if (!is_numeric($update_id)) {
			redirect('site_security/not_allowed/');
		}
		$query = $this->get_where($update_id);
		foreach ($query->result() as $row) {
			$data['slider_title'] = $row->slider_title;
			$data['target_url'] = $row->target_url;
			
		}
		if (!isset($data)) {
			$data = "";
		}
		return $data;
	}
	function create()
	{
		$this->load->library('session');
		$this->load->module('site_security');
		$this->site_security->_make_sure_is_admin();

		$update_id = $this->uri->segment(3);
		$submit = $this->input->post('submit', TRUE);
		if ($submit == "Cancel") {
			redirect('sliders/manage');
		}
		if ($submit == "submit") {
			//process the form
			$this->load->library('form_validation');
			$this->form_validation->set_rules('slider_title','Slider Title','required|max_length[240]');
			$this->form_validation->set_rules('target_url','Target URL','required|max_length[240]');
			if ($this->form_validation->run()== TRUE) {
				//get the variables
				$data = $this->fetch_data_from_post();


				if (is_numeric($update_id)) {
					//update slider
					$this->_update($update_id, $data);
					$flash_msg = "The Slider details was  successfully updated.";
					$value ='<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
					$this->session->set_flashdata('item', $value);
					redirect('sliders/create/' . $update_id);
				}else{
					//insert new slider

					$this->_insert($data);
					$update_id = $this->get_max();
					$flash_msg = "The cat was  successfully created.";
					$value ='<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
					$this->session->set_flashdata('item', $value);
					redirect('sliders/create/' . $update_id);
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
			$data['headline'] = "Create New Slider";
		}else{
			$slider_title =$this->_get_slider_title($update_id);
			$data['headline'] = "Update ".$slider_title;
		}
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

		//for selecting only parent slider
		$data['sort_this'] = TRUE;
		$data['query']=$this->get('slider_title');
		$data['num_rows']=$data['query']->num_rows();
		$data['flash'] = $this->session->flashdata('item');
		$data['view_file'] = "manage";
		$this->load->module('templates');
		$this->templates->admin($data);
	}
	function get($order_by){
		$this->load->model('mdl_sliders');
		$query = $this->mdl_sliders->get($order_by);
		return $query;
	}

	function get_with_limit($limit, $offset, $order_by) {
		$this->load->model('mdl_sliders');
		$query = $this->mdl_sliders->get_with_limit($limit, $offset, $order_by);
		return $query;
	}

	function get_where($id){
		$this->load->model('mdl_sliders');
		$query = $this->mdl_sliders->get_where($id);
		return $query;
	}

	function get_where_custom($col, $value) {
		$this->load->model('mdl_sliders');
		$query = $this->mdl_sliders->get_where_custom($col, $value);
		return $query;
	}

	function _insert($data){
		$this->load->model('mdl_sliders');
		$this->mdl_sliders->_insert($data);
	}

	function _update($id, $data){
		$this->load->model('mdl_sliders');
		$this->mdl_sliders->_update($id, $data);
	}

	function _delete($id){
		$this->load->model('mdl_sliders');
		$this->mdl_sliders->_delete($id);
	}

	function count_where($column, $value) {
		$this->load->model('mdl_sliders');
		$count = $this->mdl_sliders->count_where($column, $value);
		return $count;
	}

	function get_max() {
		$this->load->model('mdl_sliders');
		$max_id = $this->mdl_sliders->get_max();
		return $max_id;
	}

	function _custom_query($mysql_query) {
		$this->load->model('mdl_sliders');
		$query = $this->mdl_sliders->_custom_query($mysql_query);
		return $query;
	}

}
