<?php
 if (!defined('BASEPATH')) exit('No direct script access allowed');
class Store_shoppertrack extends MX_Controller 
{

function __construct() {
    parent::__construct();
}
function get_with_double_condition($col1, $value1, $col2, $value2)
{
    $this->load->model('mdl_store_shoppertrack');
    $query = $this->mdl_store_shoppertrack->get_with_double_condition($col1, $value1, $col2, $value2);
    return $query;
}
function _transfer_from_basket($customer_session_id)
{
    $this->load->module('store_basket');
    $query=$this->store_basket->get_where_custom('session_id', $customer_session_id);
    foreach ($query->result() as $row) {

     $data['session_id'] = $row->session_id;
     $data['item_title'] = $row->item_title;
     $data['price'] = $row->price;
     $data['tax'] = $row->tax;
     $data['item_id'] = $row->item_id;
     $data['item_size'] = $row->item_size;
     $data['item_qty'] = $row->item_qty;
     $data['item_colour'] = $row->item_colour;
     $data['date_added'] = $row->date_added;
     $data['shopper_id'] = $row->shopper_id;
     $data['ip_address'] = $row->ip_address;

     $this->_insert($data);
 }
 $mysql_query="DELETE FROM store_basket WHERE session_id='$customer_session_id'";
 $query=$this->_custom_query($mysql_query);
 

}
function get($order_by){
    $this->load->model('mdl_store_shoppertrack');
    $query = $this->mdl_store_shoppertrack->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) {
    $this->load->model('mdl_store_shoppertrack');
    $query = $this->mdl_store_shoppertrack->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id){
    $this->load->model('mdl_store_shoppertrack');
    $query = $this->mdl_store_shoppertrack->get_where($id);
    return $query;
}

function get_where_custom($col, $value) {
    $this->load->model('mdl_store_shoppertrack');
    $query = $this->mdl_store_shoppertrack->get_where_custom($col, $value);
    return $query;
}

function _insert($data){
    $this->load->model('mdl_store_shoppertrack');
    $this->mdl_store_shoppertrack->_insert($data);
}

function _update($id, $data){
    $this->load->model('mdl_store_shoppertrack');
    $this->mdl_store_shoppertrack->_update($id, $data);
}

function _delete($id){
    $this->load->model('mdl_store_shoppertrack');
    $this->mdl_store_shoppertrack->_delete($id);
}

function count_where($column, $value) {
    $this->load->model('mdl_store_shoppertrack');
    $count = $this->mdl_store_shoppertrack->count_where($column, $value);
    return $count;
}

function get_max() {
    $this->load->model('mdl_store_shoppertrack');
    $max_id = $this->mdl_store_shoppertrack->get_max();
    return $max_id;
}

function _custom_query($mysql_query) {
    $this->load->model('mdl_store_shoppertrack');
    $query = $this->mdl_store_shoppertrack->_custom_query($mysql_query);
    return $query;
}

}