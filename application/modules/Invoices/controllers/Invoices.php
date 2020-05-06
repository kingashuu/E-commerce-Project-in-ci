<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Invoices extends MX_Controller 
{

    function __construct() {
        parent::__construct();
    }

    function admin_order_pdf_view()
    {
        $this->load->library('session');
        $this->load->module('store_orders');
        $this->load->module('cart');
        $this->load->module('store_order_status');
        $this->load->module('store_accounts');
        $this->load->module('site_security');
        $this->load->module('timedate');
        $this->site_security->_make_sure_is_admin();
        $update_id = $this->uri->segment(3);
        $query = $this->store_orders->get_where($update_id);
        foreach ($query->result() as $row) {
            $data['order_ref']= $row->order_ref;
            $date_created= $row->date_created;
            $data['paypal_id']= $row->paypal_id;
            $session_id= $row->session_id;
            $data['opened']= $row->opened;
            $order_status= $row->order_status;
            $data['shopper_id']= $row->shopper_id;
            $data['mc_gross']= $row->mc_gross;
        }
        $data['date_created'] = $this->timedate->get_nice_date($date_created, 'full');
        if ($order_status==0) {
            $data['status_title'] ='Order Submitted';
        }else{
            $data['status_title'] = $this->store_order_status->_get_status_title($order_status); 
        }
        //fetch the content of the shopping cart/basket
        $table='store_shoppertrack';
        $data['query_cc']=$this->cart->_fetch_cart_contents($session_id, $data['shopper_id'], $table);

        $data['order_status'] = $order_status;
        $data['options'] = $this->store_order_status->_get_dropdown_options();
        $data['store_accounts_data'] = $this->store_accounts->fetch_data_from_db($data['shopper_id']);
        $data['customer_address'] = $this->store_accounts->_get_shopper_address($data['shopper_id'], '<br>');
        $data['headline'] = 'Order '.$data['order_ref'];
        $data['update_id'] = $update_id;
        // Load all views as normal
        $this->load->view('order_cspdf', $data);
        //Get output html
        $html = $this->output->get_output(); 
        // // Load library
        // $this->load->library('dompdf_gen');
        
        // // Convert to PDF
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // // $data['Attachment'] = FALSE; 
        // $this->dompdf->stream("order_status_for_customer_suport.pdf", $data);
    }


}