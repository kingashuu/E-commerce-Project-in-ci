<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Site_settings extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function _get_map_code()
	{
		$code = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.8348318654753!2d41.83900231453148!3d9.609486482273311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x163101003c0f9b3f%3A0xf4d8072da412901e!2sEshet%20Hotel!5e0!3m2!1sen!2set!4v1571211544937!5m2!1sen!2set" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>';
		return $code;
	}
	function _get_our_name()
	{
		$our_name = 'Ashenafi King';
		return $our_name;
	}
	function _get_our_address()
	{
		$our_address = '88 Kingslanding, Suite 600<br>';
		$our_address .= 'Ethiopia, DD 94107<br>';
		return $our_address;
	}
	function _get_our_telnum()
	{
		$our_telnum = '(123) 456-7890<br>';
		return $our_telnum;
	}
	function _get_paypal_email()
	{
		$email = 'sb-mrulb434512@business.example.com';
		return $email;
	}
	function _get_support_team_name()
	{
		$name = "Customer Support";
		return $name;
	}
	function _get_welcome_msg($customer_id)
	{
		$this->load->module('store_accounts');
		$customer_name = $this->store_accounts->_get_customer_name($customer_name);

		$msg = "Hello " . $customer_name . "<br><br>";
		$msg .= "Thank you for an account with CI SHOP. If you have any questions ";
		$msg .= "about any of our products and services then please do get in touch. we are here ";
		$msg .= "seven days a week and would be happy to help you. <br><br>";
		$msg .= "Regards,<br><br>";
		$msg .= "Ashenafi Bekele (founder)";
		return $msg;
	}
	function _get_cookie_name()
	{
		$cookie_name = 'hwefcdsdhz';
		return $cookie_name;
	}

	function _get_currency_symbol()
	{
		$symbol = "Birr";
		return $symbol;
	}
	function _get_currency_code()
	{
		$symbol = "USD"; //for ethiopan birr
		return $symbol;
	}

	function _get_item_segments()
	{
		//return the segments fore the store_item pages (product pages)
		$segments = "closes/women/";
		return $segments;
	}
	function _get_items_segments()
	{
		//return the segments fore the category pages
		// $segments = "products/category/";
		$segments = "shoes/womens/";
		return $segments;
	}

	function _get_page_not_found_msg()
	{
		$msg = "<h1>It's a webpage jim but not as we know it!</h1>";
		$msg .= "<p>please check your time and try again.</p>";
		return $msg;
	}
}
