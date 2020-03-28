<?php
 if (!defined('BASEPATH')) exit('No direct script access allowed');
class Shoes extends MX_Controller
{

function __construct() {
    parent::__construct();
}

	function womens()
	{
		//finding the category  Id
		$cat_url = $this->uri->segment(3);
		$this->load->module('store_categories');
		$cat_id = $this->store_categories->_get_cat_id_from_cat_url($cat_url);
		$this->store_categories->view($cat_id);
	}
}
