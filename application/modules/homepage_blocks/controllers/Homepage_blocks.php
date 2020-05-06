<?php
 if (!defined('BASEPATH')) exit('No direct script access allowed');
class Homepage_blocks extends MX_Controller 
{

function __construct() {
    parent::__construct();
}
function _process_delete($update_id)
	{
		//delet any items that are associated with this ofer block
		$mysql_query="DELETE FROM homepage_offers WHERE block_id=$update_id";
		$query=$this->_custom_query($mysql_query) ;
		//attempt to delete blog
		$this->_delete($update_id);
	}
function delete($update_id)
	{
		if (!is_numeric($update_id)) {
			redirect('site_security/not_allowed/');
		}
		$this->load->library('session');
		$this->load->module('site_security');
		$this->site_security->_make_sure_is_admin();

		$submit = $this->input->post('submit', TRUE);
		if ($submit == "Cancel") {
			redirect('homepage_blocks/create/' . $update_id);
		} elseif ($submit == "Yes - delete Offer Block") {
			$this->_process_delete($update_id);

			$flash_msg = "The offer block was  successfully deleted.";
			$value = '<div class="alert alert-success" role="alert">' . $flash_msg . '</div>';
			$this->session->set_flashdata('item', $value);
			redirect('homepage_blocks/manage');
		}

	}

	function deleteconf($update_id)
	{
		if (!is_numeric($update_id)) {
			redirect('site_security/not_allowed/');
		}
		$this->load->library('session');
		$this->load->module('site_security');
		$this->site_security->_make_sure_is_admin();

		$data['headline'] = 'Delete Entire Offer Block';
		$data['update_id'] = $update_id;
		$data['flash'] = $this->session->flashdata('item');
		$data['view_file'] = "deleteconf";
		$this->load->module('templates');
		$this->templates->admin($data);

	}

function _draw_sortable_list()
{
	$mysql_query = "select * from homepage_blocks order by priority";
	$data['query']= $this->_custom_query($mysql_query);
	$this->load->view('sortable_list', $data);

}

  function _draw_blocks()
{
	//This is draw the offer blocs that is in home page;
	$data['query']=$this->get('priority');
	$data['use_angularjs']=TRUE;
	$num_rows=$data['query']->num_rows();
	if ($num_rows>0) {
		$this->load->view('homepage_blocks', $data);
	}
}  
   
function view($update_id)
	{
		if (!is_numeric($update_id)) {
			redirect('site_security/not_allowed/');
		}
		//fetch the homepage offer details
		$data = $this->fetch_data_from_db($update_id);

		//gating currency symbol
		$this->load->module('site_settings');
		$this->load->module('custom_pagination');

        //count the items that belong to this homepage offer

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
		$data['view_module'] = "homepage_blocks";
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
		$data['priority']=$i;
		$this->_update($update_id,$data);
		} 
	}

	

	function _get_block_title($update_id)
	{
		$data = $this->fetch_data_from_db($update_id);
		$block_title = $data['block_title'];
		return $block_title;
	}
	function fetch_data_from_post()
	{
		$data['block_title'] = $this->input->post('block_title', TRUE);
		return $data;
	}
	
	function fetch_data_from_db($update_id)
	{
		if (!is_numeric($update_id)) {
			redirect('site_security/not_allowed/');
		}
		$query = $this->get_where($update_id);
		foreach ($query->result() as $row) {
			$data['block_title'] = $row->block_title;
			
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
			redirect('homepage_blocks/manage');
		}
		if ($submit == "submit") {
			//process the form
			$this->load->library('form_validation');
			$this->form_validation->set_rules('block_title','Homepage Offer Title','required|max_length[240]');
			if ($this->form_validation->run()== TRUE) {
				//get the variables
				$data = $this->fetch_data_from_post();
			

				if (is_numeric($update_id)) {
					//update homepage offer
					$this->_update($update_id, $data);
					$flash_msg = "The homepage offer details was  successfully updated.";
					$value ='<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
					$this->session->set_flashdata('item', $value);
					redirect('homepage_blocks/create/' . $update_id);
				}else{
					//insert new homepage offer

					$this->_insert($data);
					$update_id = $this->get_max();
					$flash_msg = "The homepage offer was  successfully added.";
					$value ='<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
					$this->session->set_flashdata('item', $value);
					redirect('homepage_blocks/create/' . $update_id);
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
			$data['headline'] = "Create New Homepage Offer Block";
		}else{
			$block_title =$this->_get_block_title($update_id);
			$data['headline'] = "Update ".$block_title;
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

		//for selecting only parent homepage offer
		$data['sort_this'] = TRUE;
		$data['flash'] = $this->session->flashdata('item');
		$data['view_file'] = "manage";
		$this->load->module('templates');
		$this->templates->admin($data);
	}
    function get($order_by){
        $this->load->model('mdl_homepage_blocks');
        $query = $this->mdl_homepage_blocks->get($order_by);
        return $query;
    }

    function get_with_limit($limit, $offset, $order_by) {
        $this->load->model('mdl_homepage_blocks');
        $query = $this->mdl_homepage_blocks->get_with_limit($limit, $offset, $order_by);
        return $query;
    }

    function get_where($id){
        $this->load->model('mdl_homepage_blocks');
        $query = $this->mdl_homepage_blocks->get_where($id);
        return $query;
    }

    function get_where_custom($col, $value) {
        $this->load->model('mdl_homepage_blocks');
        $query = $this->mdl_homepage_blocks->get_where_custom($col, $value);
        return $query;
    }

    function _insert($data){
        $this->load->model('mdl_homepage_blocks');
        $this->mdl_homepage_blocks->_insert($data);
    }

    function _update($id, $data){
        $this->load->model('mdl_homepage_blocks');
        $this->mdl_homepage_blocks->_update($id, $data);
    }

    function _delete($id){
        $this->load->model('mdl_homepage_blocks');
        $this->mdl_homepage_blocks->_delete($id);
    }

    function count_where($column, $value) {
        $this->load->model('mdl_homepage_blocks');
        $count = $this->mdl_homepage_blocks->count_where($column, $value);
        return $count;
    }

    function get_max() {
        $this->load->model('mdl_homepage_blocks');
        $max_id = $this->mdl_homepage_blocks->get_max();
        return $max_id;
    }

    function _custom_query($mysql_query) {
        $this->load->model('mdl_homepage_blocks');
        $query = $this->mdl_homepage_blocks->_custom_query($mysql_query);
        return $query;
    }

    }
