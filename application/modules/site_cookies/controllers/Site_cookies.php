<?php
 if (!defined('BASEPATH')) exit('No direct script access allowed');
class Site_cookies extends MX_Controller 
{

function __construct() {
    parent::__construct();
}

	function test()
	{
		echo anchor('site_cookies/test_set', 'Set The Cookie');
		echo "<hr>";
		echo anchor('site_cookies/test_destroy', 'Destroy The Cookie');
		$user_id = $this->_attempt_get_user_id();

		if (is_numeric($user_id)) {
			echo "<h1> You are user $user_id</h1>";
		}
	}

	function test_set()
	{
		$user_id = 88;
		$this->_set_cookie($user_id);
		echo "The cookie has been set.<br> ";
		echo anchor('site_cookies/test', 'Get The Cookie');
		echo "<hr>";
		echo anchor('site_cookies/test_destroy', 'Destroy The Cookie');

	}

	function test_destroy()
	{
		$this->_destroy_cookie();
		echo "The cookie has been destroyed <br>";
        
		echo anchor('site_cookies/test', 'Attempt to Get The Cookie');
		echo "<hr>";
		echo anchor('site_cookies/test', 'Get The Cookie');
	}
function _set_cookie($user_id)
{
	$this->load->module('site_security');
	$this->load->module('site_settings');

    $nowtime = time();
    $one_day = 86400;
	$two_weeks = $one_day + 14;
	$two_weeks_ahead = $nowtime + $two_weeks;


	$data['cookie_code'] = $this->site_security->generate_random_string(128);
	$data['user_id'] = $user_id;
    $data['expiry_date'] = $two_weeks_ahead;
	$this->_insert($data);

	$cookie_name= $this->site_settings->_get_cookie_name();
    setcookie($cookie_name, $data['cookie_code'], $data['expiry_date']);
	$this->_auto_delete_old();
}
function _attempt_get_user_id()
{
	//check to see if the user has a valid cookie and if so, figure out the user_id from the cookie
	$this->load->module('site_settings');
	$cookie_name= $this->site_settings->_get_cookie_name();
	//check for the cookie
	if (isset($_COOKIE[$cookie_name])) {
		$cookie_code = $_COOKIE[$cookie_name];

		//now the have the cookie but it still on the table
		$query = $this->get_where_custom('cookie_code', $cookie_code);
		$num_rows = $query->num_rows();

		if ($num_rows < 1) {
			$user_id = '';
		}
        foreach ($query->result() as $row) {
			$user_id = $row->user_id;
        }
	}else{
		$user_id = '';
	}
	return $user_id;
}
function _destroy_cookie()
{
	$this->load->module('site_settings');
	$cookie_name= $this->site_settings->_get_cookie_name();
	if (isset($_COOKIE[$cookie_name])) {
		$cookie_code = $_COOKIE[$cookie_name];
		$mysql_query = "DELETE FROM site_cookies WHERE cookie_code=?";
		$this->db->query($mysql_query, array($cookie_code));
	}

	setcookie($cookie_name, '', time() - 3600);

}

function _auto_delete_old()
{
	$nowtime=time();
    $mysql_query="DELETE FROM site_cookies WHERE expiry_date<$nowtime";
    $query=$this->_custom_query($mysql_query);
}
function get($order_by){
    $this->load->model('mdl_site_cookies');
    $query = $this->mdl_site_cookies->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) {
    $this->load->model('mdl_site_cookies');
    $query = $this->mdl_site_cookies->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id){
    $this->load->model('mdl_site_cookies');
    $query = $this->mdl_site_cookies->get_where($id);
    return $query;
}

function get_where_custom($col, $value) {
    $this->load->model('mdl_site_cookies');
    $query = $this->mdl_site_cookies->get_where_custom($col, $value);
    return $query;
}

function _insert($data){
    $this->load->model('mdl_site_cookies');
    $this->mdl_site_cookies->_insert($data);
}

function _update($id, $data){
    $this->load->model('mdl_site_cookies');
    $this->mdl_site_cookies->_update($id, $data);
}

function _delete($id){
    $this->load->model('mdl_site_cookies');
    $this->mdl_site_cookies->_delete($id);
}

function count_where($column, $value) {
    $this->load->model('mdl_site_cookies');
    $count = $this->mdl_site_cookies->count_where($column, $value);
    return $count;
}

function get_max() {
    $this->load->model('mdl_site_cookies');
    $max_id = $this->mdl_site_cookies->get_max();
    return $max_id;
}

function _custom_query($mysql_query) {
    $this->load->model('mdl_site_cookies');
    $query = $this->mdl_site_cookies->_custom_query($mysql_query);
    return $query;
}

}
