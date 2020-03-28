<?php
 if (!defined('BASEPATH')) exit('No direct script access allowed');
class Blacklist extends MX_Controller 
{

function __construct() {
    parent::__construct();
}

function get($order_by){
    $this->load->model('mdl_blacklist');
    $query = $this->mdl_blacklist->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) {
    $this->load->model('mdl_blacklist');
    $query = $this->mdl_blacklist->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id){
    $this->load->model('mdl_blacklist');
    $query = $this->mdl_blacklist->get_where($id);
    return $query;
}

function get_where_custom($col, $value) {
    $this->load->model('mdl_blacklist');
    $query = $this->mdl_blacklist->get_where_custom($col, $value);
    return $query;
}

function _insert($data){
    $this->load->model('mdl_blacklist');
    $this->mdl_blacklist->_insert($data);
}

function _update($id, $data){
    $this->load->model('mdl_blacklist');
    $this->mdl_blacklist->_update($id, $data);
}

function _delete($id){
    $this->load->model('mdl_blacklist');
    $this->mdl_blacklist->_delete($id);
}

function count_where($column, $value) {
    $this->load->model('mdl_blacklist');
    $count = $this->mdl_blacklist->count_where($column, $value);
    return $count;
}

function get_max() {
    $this->load->model('mdl_blacklist');
    $max_id = $this->mdl_blacklist->get_max();
    return $max_id;
}

function _custom_query($mysql_query) {
    $this->load->model('mdl_blacklist');
    $query = $this->mdl_blacklist->_custom_query($mysql_query);
    return $query;
}

}