<?php
 if (!defined('BASEPATH')) exit('No direct script access allowed');
class Yourorders extends MX_Controller 
{

function __construct() {
    parent::__construct();
}

function _get_order_status_options()
{
    //reteran an array of all the possible  order status options
    $this->load->module('store_order_status');
    $options= $this->store_order_status->_get_dropdown_options();
    return $options;
}

function browse()
{
    $this->load->module('custom_pagination');
    $this->load->module('site_security');
    $this->load->module('store_orders');
    $this->site_security->_make_sure_logged_in();
    $shopper_id =$this->site_security->_get_user_id();


    //count the orders that belong to this customer
    $use_limit = FALSE;
    $mysql_query = $this->_generate_mysql_query($use_limit, $shopper_id);
    $query = $this->store_orders->_custom_query($mysql_query);
    $total_items = $query->num_rows();

    //fetch the orders for this page
    $use_limit = TRUE;
    $mysql_query = $this->_generate_mysql_query($use_limit, $shopper_id);
    $data['query'] = $this->store_orders->_custom_query($mysql_query);
    $data['num_rows'] = $data['query']->num_rows();

    //genaret the pagenation
    $pagination_data['template'] = 'public_bootstrap';
    $pagination_data['target_base_url'] = $this->get_target_pagination_base_url();
    $pagination_data['total_rows']= $total_items;
    $pagination_data['offset_segment']=3;
    $pagination_data['limit'] =$this->get_limit();

    $data['pagination']=$this->custom_pagination->_generate_pagination($pagination_data);
    $pagination_data['offset']=$this->get_offset();
    $data['showing_statement']=$this->custom_pagination->get_showing_statement($pagination_data);
    $data['order_status_option'] = $this->_get_order_status_options();

    $data['flash'] = $this->session->flashdata('item');
    $data['view_file'] = "browse";
    $this->load->module('templates');
    $this->templates->public_bootstrap($data);
}

function view()
{
    $this->load->module('cart');
    $this->load->module('site_security');
    $this->load->module('store_orders');
    $this->load->module('store_order_status');
    $this->load->module('timedate');

    $this->site_security->_make_sure_logged_in();
    $shopper_id =$this->site_security->_get_user_id();
    $order_ref =$this->uri->segment(3);

    //fetch the order details
    $col1 = 'order_ref';
    $value1 = $order_ref;
    $col2 = 'shopper_id';
    $value2 = $shopper_id;
    $query = $this->store_orders->get_with_double_condition($col1, $value1, $col2, $value2);
    $num_rows = $query->num_rows();
    if ($num_rows<1) {
        redirect('site_security/not_allowed');
    }
    foreach ($query->result() as $row) {
        $date_created= $row->date_created;
        $order_status= $row->order_status;
        $session_id= $row->session_id;
    }
    $data['date_created'] = $this->timedate->get_nice_date($date_created, 'full');
    if ($order_status==0) {
        $data['order_status_title'] = 'Order Submitted';
    }else{
        $data['order_status_title'] = $this->store_order_status->_get_status_title($order_status);
    }
    $data['order_ref'] = $order_ref;

    $table='store_shoppertrack';
    $data['query_cc']=$this->cart->_fetch_cart_contents($session_id, $shopper_id, $table);

    $data['flash'] = $this->session->flashdata('item');
    $data['view_file'] = "view";
    $this->load->module('templates');
    $this->templates->public_bootstrap($data);
}

function _generate_mysql_query($use_limit, $shopper_id)
{
    $mysql_query = "SELECT * FROM store_orders WHERE shopper_id=$shopper_id order by date_created desc";
   
    if ($use_limit == TRUE) {
        $limit = $this->get_limit();
        $offset = $this->get_offset();
        $mysql_query.= " limit ". $offset. ", ".$limit;
    }

    return $mysql_query;
    }

    function get_limit()
    {
        $limit = 20;
        return $limit;
    }

    function get_offset()
    {
        $offset = $this->uri->segment(3);
        if (!is_numeric($offset)) {
            $offset = 0;
        }
        return $offset;
    }
    function get_target_pagination_base_url()
    {
        $first_bit=$this->uri->segment(1);
        $second_bit=$this->uri->segment(2);

        $target_base_url= base_url().$first_bit."/".$second_bit;

        return $target_base_url;

    }


}