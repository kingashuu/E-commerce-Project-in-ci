<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Contactus extends MX_Controller 
{

    function __construct() {
        parent::__construct();
    }

    function submit()
    {
        $submit = $this->input->post('submit', TRUE);

        if (($submit == "submit") AND ($refer_url==$target_refer_url)){

            //process the form
            $this->load->library('form_validation');
            $this->form_validation->set_rules('yourname', 'Your Name', 'required|max_length[60]');
            $this->form_validation->set_rules('email', 'Emale', 'required|valid_email');
            $this->form_validation->set_rules('telnum', 'Telphon number','required|max_length[20]');
            $this->form_validation->set_rules('message', 'Message', 'required');

            if ($this->form_validation->run() == TRUE) {
                //get the variables
                $posted_data = $this->fetch_data_from_post();
                $this->load->module('enquiries');
                $this->load->module('site_security');

                    //insert the message
                
                $data['code']=$this->site_security->generate_random_string(6);
                $data['subject'] = 'contact form';
                $data['message'] = $this->build_msg($posted_data);
                $data['sent_to'] = 0;                
                $data['date_created'] = time();
                $data['sent_by'] = 0;
                $data['opened'] = 0;
                $data['urgent'] =0;

                $this->enquiries->_insert($data);
                redirect('contactus/thankyou' );
            } else{
                //form submition error
                $this->index();
            }
        }
    }

    function build_msg($posted_data)
    {
        $yourname = ucfirst($posted_data['yourname']);
        $msg =$yourname.' submited the following information:<br><br>';
        $msg.='Name: '.$posted_data['yourname']."<br>";
        $msg.='Email: '.$posted_data['email']."<br>";
        $msg.='Telephon Number: '.$posted_data['telnum']."<br>";
        $msg.='Message: '.$posted_data['message']."<br>";
        return $msg;
    }
    function fetch_data_from_post()
    {
        $data['yourname'] = $this->input->post('yourname', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $data['telnum'] = $this->input->post('telnum', TRUE);
        $data['message'] = $this->input->post('message', TRUE);
        return $data;
    }

    function _blacklist_user()
    {
        $this->load->module('blacklist');
        $data['ip_address']= $this->input->ip_address;
        $data['date_created']= time();
        $this->blacklist->_insert($data);
    }

    function index()
    {
       $this->load->module('site_settings');

       $data =$this->fetch_data_from_post();
       $data['our_address']=$this->site_settings->_get_our_address();
       $data['our_telnum']=$this->site_settings->_get_our_telnum();
       $data['our_name']= $this->site_settings->_get_our_name();
       $data['code']= $this->site_settings->_get_map_code();
       $data['flash'] = $this->session->flashdata('item');
       $data['form_location']=base_url().'contactus/submit';
       $data['view_file'] = "contactus";
       $this->load->module('templates');
       $this->templates->public_bootstrap($data);
   }
   function thankyou()
   {
     $data['view_file'] = "thankyou";
     $this->load->module('templates');
     $this->templates->public_bootstrap($data);
 }


}