<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Item_galleries extends MX_Controller 
{

    function __construct() {
        parent::__construct();
    }
    function _get_parent_title($parent_id)
    {
        $parent_module_name='store_items';
        $this->load->module($parent_module_name);
        $parent_title=$this->$parent_module_name->_get_title($parent_id);
        return $parent_title;
    }
    function _get_entity_name($type)
    {
    //Note:type can be singular/ plural
        if ($type=='singular') {
         $entity_name='picture';
     }else{
        $entity_name='pictures';
    }
    return $entity_name;
}
function _get_update_group_headlin($parent_id)
{
    $parent_title=ucfirst($this->_get_parent_title($parent_id));
    $entity_name=ucfirst($this->_get_entity_name('plural'));
    $headlin= 'Update '.$entity_name.' for '.$parent_title;
    return $headlin;
}

function update_group($parent_id)
{
    // update/ manage records belonging in to parent
    $this->load->module('site_security');
    $this->site_security->_make_sure_is_admin();
    $data['parent_id']=$parent_id;
    $data['headline']='Manage Item Galleries';
    $data['sub_headline']=$this->_get_update_group_headlin($parent_id);
    $data['flash'] = $this->session->flashdata('item');
    $data['query'] = $this->get_where_custom('parent_id', $parent_id);
    $data['num_rows'] = $data['query']->num_rows();
    $data['entity_name']=$this->_get_entity_name('plural');
    $data['parent_title']=$this->_get_parent_title($parent_id);
    $data['view_file'] = "update_group";
    $this->load->module('templates');
    $this->templates->admin($data);
}
function submit_create()
{
    //form has been submitted try to create new records
    $this->load->module('site_security');
    $this->site_security->_make_sure_is_admin();
    $data['parent_id']=$this->input->post('parent_id', TRUE);
    $this->_insert($data);
    $max_id=$this->get_max();
    redirect('item_galleries/view/'.$max_id);
}
function _get_parent_id($update_id)
{
    $data =$this->fetch_data_from_db($update_id);
    $parent_id=$data['parent_id'];
    return $parent_id;
}
function fetch_data_from_post()
{

    $data['parent_id'] = $this->input->post('parent_id', TRUE);

    return $data;
}

function fetch_data_from_db($update_id)
{
    if (!is_numeric($update_id)) {
        redirect('site_security/not_allowed/');
    }

    $query = $this->get_where($update_id);
    foreach ($query->result() as $row) {

    
        $data['picture'] = $row->picture;
        $data['parent_id'] = $row->parent_id;
    }
    if (!isset($data)) {
        $data = "";
    }
    return $data;
}


function _draw_img_btn($update_id)
{
    // draw upload image btn and etc on top of the view page
    $data=$this->fetch_data_from_db($update_id);
    $picture=$data['picture'];
    if ($picture=='') {
        $data['got_pic']=FALSE;
        $data['btn_style']='';
        $data['btn_info']='No picture has been uploaded so far . ';
    }else{
        $data['got_pic']=TRUE;
        $data['btn_style']="style='clear:both; margin-top:24px;' ";
        $data['btn_info']='the picture that is being used is shown below. ';
        $data['pic_path']=base_url().'image_galleries_pics/'.$picture;

    }
    $this->load->view('img_btn', $data);
}
function upload_image($parent_id)
{
    if (!is_numeric($parent_id)) {
        redirect('site_security/not_allowed');
    }
    $this->load->library('session');
    $this->load->module('site_security');
    $this->site_security->_make_sure_is_admin();

    $data['headline'] = 'upload Image';
    $data['parent_id'] = $parent_id;
    $data['flash'] = $this->session->flashdata('item');
    $data['view_file'] = "upload_image";
    $this->load->module('templates');
    $this->templates->admin($data);
}
function _process_delete($update_id)
{
   //attempt to delete the item picture
    $data = $this->fetch_data_from_db($update_id);
    $picture = $data['picture'];

    $picture_path = './image_galleries_pics/' . $picture;
    
        //attempt to remove the images
    if (file_exists($picture_path)) {
        unlink($picture_path);
    }
    //delete item record 
    $this->_delete($update_id);
}

function delete($update_id)
{
    if (!is_numeric($update_id)) {
        redirect('site_security/not_allowed/');
    }
    $this->load->module('site_security');
    $this->site_security->_make_sure_is_admin();

    $submit = $this->input->post('submit', TRUE);
    if ($submit == "Cancel") {
        redirect('item_galleries/view/' . $update_id);
    } elseif ($submit == "Yes - delete") {
        $parent_id=$this->_get_parent_id($update_id);
        $this->_process_delete($update_id);

        $entity_name=$this->_get_entity_name('singular');
        $flash_msg = "The ".$entity_name." was  successfully deleted.";
        $value = '<div class="alert alert-success" role="alert">' . $flash_msg . '</div>';
        $this->session->set_flashdata('item', $value);
        redirect('item_galleries/update_group/'.$parent_id );
       
    }
     

}

function deleteconf($update_id)
{
    if (!is_numeric($update_id)) {
        redirect('site_security/not_allowed/');
    }
    $this->load->module('site_security');
    $this->site_security->_make_sure_is_admin();

    $entity_name = $this->_get_entity_name('singular');
    $data['headline'] = 'Delete '.ucfirst($entity_name);
    $data['update_id'] = $update_id;
    $data['flash'] = $this->session->flashdata('item');
    $data['view_file'] = "deleteconf";
    $this->load->module('templates');
    $this->templates->admin($data);

}


function do_upload($parent_id)
{
    if (!is_numeric($parent_id)) {
        redirect('site_security/not_allowed/');
    }
    $this->load->library('session');
    $this->load->module('site_security');
    $this->site_security->_make_sure_is_admin();

    $submit = $this->input->post('submit', TRUE);
    if ($submit == "Cancel") {
        // $parent_id=$this->_get_parent_id($parent_id);
        redirect('item_galleries/update_group/' . $parent_id);
    }

    $config['upload_path'] = './image_galleries_pics/';
    $config['allowed_types'] = 'gif|jpg|png|webp|DOC';
    $config['max_size'] = 4000;
    $config['max_width'] = 2024;
    $config['max_height'] = 1620;

    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('userfile')) {
        $data['error'] = array('error' => $this->upload->display_errors("<p style='color: #ff0000'>", "</p>"));
        $data['headline'] = 'upload Error';
        $data['parent_id'] = $parent_id;
        $data['flash'] = $this->session->flashdata('item');
        $data['view_file'] = "upload_image";
        $this->load->module('templates');
        $this->templates->admin($data);
    } else {
            //upload was successful
        $data = array('upload_data' => $this->upload->data());

        $upload_data = $data['upload_data'];
        $file_name = $upload_data['file_name'];
        

        unset($data);
        //inserting image into database or update the database
        $data['parent_id']=$parent_id;
        $data['picture'] = $file_name;
        $this->_insert($data);

        redirect('item_galleries/Update_group/'.$parent_id);

    }
}
function submit($update_id)
{
    // update the recode has been  submitted via /view
    $this->load->module('site_security');
    $this->site_security->_make_sure_is_admin();

    $alt_text=$this->input->post('alt_text', TRUE);

    if ($submit=='Cancel') {
        $parent_id=$this->_get_parent_id($update_id);
        redirect('item_galleries/update_group/'.$parent_id);
    }elseif ($submit=='Submit') {
        $this->_update($update_id, $data);
        redirect('item_galleries/view/'.$update_id);
    }

}

function get($order_by){
    $this->load->model('Mdl_item_galleries');
    $query = $this->Mdl_item_galleries->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) {
    $this->load->model('Mdl_item_galleries');
    $query = $this->Mdl_item_galleries->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id){
    $this->load->model('Mdl_item_galleries');
    $query = $this->Mdl_item_galleries->get_where($id);
    return $query;
}

function get_where_custom($col, $value) {
    $this->load->model('Mdl_item_galleries');
    $query = $this->Mdl_item_galleries->get_where_custom($col, $value);
    return $query;
}

function _insert($data){
    $this->load->model('Mdl_item_galleries');
    $this->Mdl_item_galleries->_insert($data);
}

function _update($id, $data){
    $this->load->model('Mdl_item_galleries');
    $this->Mdl_item_galleries->_update($id, $data);
}

function _delete($id){
    $this->load->model('Mdl_item_galleries');
    $this->Mdl_item_galleries->_delete($id);
}

function count_where($column, $value) {
    $this->load->model('Mdl_item_galleries');
    $count = $this->Mdl_item_galleries->count_where($column, $value);
    return $count;
}

function get_max() {
    $this->load->model('Mdl_item_galleries');
    $max_id = $this->Mdl_item_galleries->get_max();
    return $max_id;
}

function _custom_query($mysql_query) {
    $this->load->model('Mdl_item_galleries');
    $query = $this->Mdl_item_galleries->_custom_query($mysql_query);
    return $query;
}

}