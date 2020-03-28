<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Yourmessages  extends MX_Controller 
{

    function __construct() {
        parent::__construct();
    }
    function messagesent()
    {
        $data['headline'] = ' Message Sent ';
        $data['view_file'] = "messagesent";
        $this->load->module('templates');
        $this->templates->public_bootstrap($data);

    }

    function create()
    {
        $this->load->library('session');
        $this->load->module('site_security');
        $this->load->module('enquiries');
        $this->load->module('store_accounts');
        $this->load->module('timedate');

        $submit = $this->input->post('submit', TRUE);
        $data = $this->fetch_data_from_post();
        $customer_id = $this->site_security->_get_user_id();
        $code=  $this->uri->segment(3);

        if ($submit == "Cancel") {
            redirect('youraccount/welcome');
        }
        if ($submit == "submit") {
            //process the form
            $this->load->library('form_validation');
            $this->form_validation->set_rules('subject', 'Subject', 'required|max_length[250]');
            $this->form_validation->set_rules('message', 'Message', 'required');
            if ($this->form_validation->run() == TRUE) {

                //get the variables
                //convert datepicker into a unit timestamp
                if ((!is_numeric($customer_id)) OR ($customer_id==0)) {
                    $token = $this->input->post('token', TRUE);
                    $customer_id= $this->store_accounts->_get_customer_id_from_token($token);
                    $not_loged_in = TRUE;
                }

                $data['date_created']= time();
                $data['sent_by']= $customer_id; 
                $data['sent_to']=0;//always send to admin
                $data['opened']=0;
                $data['code'] = $this->site_security->generate_random_string(6);

                if ($data['urgent']!=1) {
                 $data['urgent'] =0;
             }

                //insert new message
             if ($customer_id>0) {
                $this->enquiries->_insert($data); 

                $flash_msg = "The message was  successfully sent. Thank you!";
                $value = '<div class="alert alert-success" role="alert">' . $flash_msg . '</div>';
                $this->session->set_flashdata('item', $value);
            }
            if (isset($not_loged_in)) {
                $target_url= base_url().'yourmessgase/messagesent';
            }else{
                $target_url= base_url().'youraccount/welcome';
            }
            redirect($target_url);

        } 
    }elseif ($code!="") {
        $data =$this->enquiries->_attempt_get_data_from_code($customer_id, $code);
        $data['message']="<br><br>---------------------------------------------------<br>".$data['message'];
    }

    $this->site_security->_make_sure_logged_in();
    $data['token'] = $this->store_accounts->_generate_token($customer_id);       
    if ($code=="") {
        $data['headline'] = 'Compose New Message ';
    }else{
        $data['headline'] = 'Reply To Message ';
    }
    $data['message']=$this->_format_message($data['message']);
    $data['code'] = $code;
    $data['flash'] = $this->session->flashdata('item');
    $data['view_file'] = "create";
    $this->load->module('templates');
    $this->templates->public_bootstrap($data);
}
function _format_message($msg)
{
$replace='
';
    $msg=  str_replace('<br>', $replace, $msg);
    $msg=strip_tags($msg);
    return $msg;

}

function fetch_data_from_post()
{
 $data['subject'] = $this->input->post('subject', TRUE);
 $data['message'] = $this->input->post('message', TRUE);
 $data['urgent'] = $this->input->post('urgent', TRUE);
 return $data;
}
function view()
{
    $this->load->module('enquiries');
    $this->load->module('site_security');
    $this->load->module('timedate');
    $this->site_security->_make_sure_logged_in();

    $code=$this->uri->segment(3);
    $col1='sent_to';
    $value1 =$this->site_security->_get_user_id();
    $col2='code';
    $value2=$code;
    $query = $this->enquiries->get_with_double_condition($col1, $value1, $col2, $value2);
    $num_rows=$query->num_rows();
    if ($num_rows>1) {
        redirect('site_security/not_allowed');
    }

    foreach ($query->result() as $row) {
        $update_id = $row->id;
        $data['sent_by'] = $row->sent_by;
        $date_created = $row->date_created;
        $data['subject'] = $row->subject;
        $data['message'] = nl2br($row->message);
        $data['sent_to'] = $row->sent_to;
        $data['opened'] = $row->opened;
    }
    $data['code'] = $code;
    $data['date_created'] = $this->timedate->get_nice_date($date_created, 'full');
    $this->enquiries->_set_to_opened($update_id);
    $data['flash'] = $this->session->flashdata('item');
    $data['view_file'] = "view";
    $this->load->module('templates');
    $this->templates->public_bootstrap($data);

}

}