<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Youraccount extends MX_Controller 
{

  function __construct() {
    parent::__construct();

    $this->load->library('form_validation');
    $this->form_validation->CI =& $this;
  }

  function logout()
  {
    unset($_SESSION['user_id']);
    $this->load->module('site_cookies'); 
    $this->site_cookies->_destroy_cookie();
    redirect(base_url());

  }
  function welcome()
  {      $this->load->module('site_security');
  $this->site_security->_make_sure_logged_in();

  $data['flash'] = $this->session->flashdata('item');
  $data['view_file'] = "welcome";
  $this->load->module('templates');
  $this->templates->public_bootstrap($data);
}

function test1()
{
  $your_name= "Kingashuu";
  $this->session->set_userdata('your_name', $your_name);
  echo "The session variable was seted.";

  echo "<hr>";
  
  echo anchor('youraccount/test2', 'get(desplay) the session variable.')."<br>";
  echo anchor('youraccount/test3', 'Unset (destroy) the session variable.')."<br>";

}
function test2()
{
  $your_name= $this->session->userdata('your_name');
  if ($your_name!="") {
   echo "<h1>Hello $your_name</h1>";
 }else{
   echo "No session variable has set for your_name";
 }
 echo "<hr>";
 echo anchor('youraccount/test', 'Set the session variable.')."<br>";
 echo anchor('youraccount/test3', 'Unset (destroy) the session variable.')."<br>";

}
function test3()
{
 unset($_SESSION['your_name']); 
 echo "The session variable was unset.";

 echo "<hr>";
 echo anchor('youraccount/test','Set the session variable.')."<br>";
 echo anchor('youraccount/test2','get(desplay) the session variable.')."<br>";  
}
function login()
{
  $data['username']=$this->input->post('username', TRUE);
  $this->load->module('templates');
  $this->templates->login($data);
}
function submit_login()
{
 $submit =$this->input->post('submit', TRUE);
 if ($submit == "submit") {
        //process the form
  $this->load->library('form_validation');
  $this->form_validation->set_rules('username','Username','required|min_length[4]|max_length[60]|callback_username_check');
  $this->form_validation->set_rules('pword','Password', 'required|min_length[7]|max_length[35]');

  if ($this->form_validation->run() == TRUE) {
        //figure out the user_id
   $col1 = 'username';
   $value1 = $this->input->post('username', TRUE);
   $col2 = 'email';
   $value2 = $this->input->post('username', TRUE);
   $query = $this->store_accounts->get_with_double_condition($col1, $value1, $col2, $value2);
   foreach ($query->result() as $row) {
    $user_id=$row->id;
  }
  $remember=$this->input->post('remember', TRUE);
  if ($remember=="remember-me") {
    $login_type = "longterm";
  }else{
    $login_type="shortterm";
  }
  $data['last_login'] = time();
  $this->store_accounts->_update($user_id, $data);
  
         //send the user to private page
  $this->_in_you_go($user_id, $login_type);
}else{
 echo validation_errors();
}
}
}

function _in_you_go($user_id, $login_type)
{ 
    //NOTE:The logintype can be long term or short term using cookie and session variable we have;
 if ($login_type=="longterm") {
        //set the cookie variable
  $this->load->module('site_cookies');
  $this->site_cookies->_set_cookie($user_id); 
}else{
        //set the session variable
  $this->session->set_userdata('user_id', $user_id);
}
     //attempt to update and divert to cart
$this->_attempt_cart_divert($user_id);
     //send them to the private page
redirect('youraccount/welcome');
}
function _attempt_cart_divert($user_id)
{
  $this->load->module('store_basket');
  $customer_session_id = $this->session->session_id;
  $col1 ='session_id';
  $value1= $customer_session_id;
  $col2 ='shopper_id';
  $value2= 0;
  $query= $this->store_basket->get_with_double_condition($col1, $value1, $col2, $value2);
  $num_rows= $query->num_rows();
  if ($num_rows>0) {
    # Ther are records that need corrected 
    $mysql_query = "UPDATE store_basket SET shopper_id= $user_id WHERE session_id='$customer_session_id'";
    $query=$this->store_basket->_custom_query($mysql_query);
    redirect('cart');
  }
}
function submit()
{
 $submit =$this->input->post('submit', TRUE);
 if ($submit == "submit") {
        //process the form
  $this->load->library('form_validation');
  // $this->form_validation->set_rules('username','Username','required|min_length[4]|max_length[60]|is_unique[store_accounts.username]');
  $this->form_validation->set_rules('username','Username','required|min_length[4]|max_length[60]');
  $this->form_validation->set_rules('email','Email','required|valid_email|max_length[60]');
  $this->form_validation->set_rules('pword','Password', 'required|min_length[7]|max_length[35]');
  $this->form_validation->set_rules('repeat_pword', 'Repeat Password', 'required|matches[pword]');

  if ($this->form_validation->run() == TRUE) {

    $this->_process_create_account();
    redirect('youraccount/login');
  }else{  
    $this->start(); 
  }
}
}
function _process_create_account()
{
  $this->load->module('store_accounts');
  $data = $this->fetch_data_from_post();
  unset($data['repeat_pword']);

  $pword = $data['pword'];
  $this->load->module('site_security');
  $data['pword'] = $this->site_security->_hash_string($pword);
  $this->store_accounts->_insert($data);
}
function start()
{       
  $data= $this->fetch_data_from_post();
  $data['flash'] = $this->session->flashdata('item');

  $this->load->view('start',  $data);
  // $data['view_file'] = "start";
  // $this->load->module('templates');
  // $this->templates->public_bootstrap($data);
}

function fetch_data_from_post()
{
  $data['username'] = $this->input->post('username', TRUE);
  $data['email'] = $this->input->post('email', TRUE);
  $data['pword'] = $this->input->post('pword', TRUE);
  $data['repeat_pword'] = $this->input->post('repeat_pword', TRUE);
  return $data;
}
function username_check($str)
{
  $this->load->module('store_accounts');
  $this->load->module('site_security');

  $error_msg="you did not enter correct username or email address";

  $col1='username';
  $value1=$str;
  $col2='email';
  $value2=$str;
  
  $query=$this->store_accounts->get_with_double_condition($col1, $value1, $col2, $value2) ;
  $num_rows = $query->num_rows();

  if ($num_rows<1) {
    $this->form_validation->set_message('username_check', $error_msg);
    return FALSE;
  }

  foreach ($query->result() as  $row) {
   $pword_on_table=$row->pword;
 }

 $pword = $this->input->post('pword', TRUE);
 $result = $this->site_security->_verify_hash($pword, $pword_on_table);

 if ($result==TRUE) {
  return TRUE;
}else{
 $this->form_validation->set_message('username_check', $error_msg);
 return FALSE;
}
}

}
