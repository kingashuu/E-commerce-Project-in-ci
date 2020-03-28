<?php
 if (!defined('BASEPATH')) exit('No direct script access allowed');
class Closes extends MX_Controller
{

function __construct() {
    parent::__construct();
}

	function women()
	{
		//finding the item Id
		$item_url = $this->uri->segment(3);
		$this->load->module('store_items');
		$item_id = $this->store_items->_get_item_id_from_item_url($item_url);
		$this->store_items->view($item_id);
	}
}
