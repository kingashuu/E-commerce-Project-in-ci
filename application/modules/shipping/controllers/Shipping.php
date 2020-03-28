<?php
 if (!defined('BASEPATH')) exit('No direct script access allowed');
class Shipping extends MX_Controller 
{

function __construct() {
    parent::__construct();
}
function _get_shipping()
{
    $shippng = '0.01';
    return  $shippng;
}

}