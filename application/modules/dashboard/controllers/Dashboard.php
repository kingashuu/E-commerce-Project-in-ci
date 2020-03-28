<?php
 if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends MX_Controller 
{

function __construct() {
    parent::__construct();
}

function home()
{
    $this->load->module('site_security');
    $this->site_security->_make_sure_is_admin();
    
    $data['flash'] = $this->session->flashdata('Account');

    $data['view_file'] = "home";
    $this->load->module('templates');
    $this->templates->admin($data);

}

}