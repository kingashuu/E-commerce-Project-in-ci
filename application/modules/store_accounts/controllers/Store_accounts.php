<?php
class Store_accounts extends MX_Controller 
{
function __construct() {
    parent::__construct();
}
 function _get_shopper_address($update_id, $delimiter)
{
	//return the address of the shopper (user)
	$data = $this->fetch_data_from_db($update_id);
	$address = '';
	if ($data['address1']!= '') {
		$address.=$data['address1'];
		$address.=$delimiter;
	}

	if ($data['address2']!= '') {
		$address.=$data['address2'];
		$address.=$delimiter;
	}

	if ($data['twon']!= '') {
		$address.=$data['twon'];
		$address.=$delimiter;
	}

	if ($data['country']!= '') {
		$address.=$data['country'];
		$address.=$delimiter;
	}

	if ($data['postcode']!= '') {
		$address.=$data['postcode'];
		$address.=$delimiter;
	}
	return $address;
}
function _make_sure_delete_is_allowed($update_id)
	{
		//return TRUE or FALSE
		//You do not allow to delete if user  have item in basket or (SHOPERTRACK) 
		$mysql_query = " SELECT * FROM store_basket WHERE shopper_id=$update_id";
		$query = $this->_custom_query($mysql_query);
		$num_rows = $query->num_rows();

		if ($num_rows>0) {
			# i.e the the user have item in basket 
			return FALSE;//delete  not allowed since items in basket 
		}else{
			$mysql_query = " SELECT * FROM store_shoppertrack WHERE shopper_id=$update_id";
			$query = $this->_custom_query($mysql_query);
			$num_rows = $query->num_rows();
			if ($num_rows>0) {
		    	return FALSE;//shopper must have made a purtchase
		    }

		}
		return TRUE;//everything must be cool , so it's okay to delete
	}

	function delete($update_id)
	{
		if (!is_numeric($update_id)) {
			redirect('site_security/not_allowed/');
		}
		$this->load->library('session');
		$this->load->module('site_security');
		$this->site_security->_make_sure_is_admin();

		$submit = $this->input->post('submit', TRUE);
		if ($submit == "Cancel") {
			redirect('store_accounts/create/' . $update_id);
		} elseif ($submit == 'Yes - delete') {
			$allowed = $this->_make_sure_delete_is_allowed($update_id);
			if ($allowed==FALSE) {
				$flash_msg = "You are not  allowed to delete this account.";
				$value = '<div class="alert alert-danger" role="alert">' . $flash_msg . '</div>';
				$this->session->set_flashdata('item', $value);
				redirect('store_accounts/manage');
				
			}
			$this->_delete($update_id);

			$flash_msg = "The account was  successfully deleted.";
			$value = '<div class="alert alert-success" role="alert">' . $flash_msg . '</div>';
			$this->session->set_flashdata('item', $value);
			redirect('store_accounts/manage');
		}

	}

	function deleteconf($update_id)
	{
		if (!is_numeric($update_id)) {
			redirect('site_security/not_allowed/');
		}
		$this->load->library('session');
		$this->load->module('site_security');
		$this->site_security->_make_sure_is_admin();

		$data['headline'] = 'Delete Account';
		$data['update_id'] = $update_id;
		$data['flash'] = $this->session->flashdata('item');
		$data['view_file'] = "deleteconf";
		$this->load->module('templates');
		$this->templates->admin($data);

	}


function _generate_token($update_id)
{
	$data= $this->fetch_data_from_db($update_id);
	$date_made = $data['date_made'];
	    $last_login= $data['last_login'];
	$pword = $data['pword'];

	$pword_length = strlen($pword);
	$start_point = $pword_length-6;
	$last_six_chars =substr($pword, $start_point, 6);

	if (($pword_length>5) AND ($last_login>0)) {
		$token = $last_six_chars.$date_made.$last_login;
	  
	}else{
		$token = '';
	}
	return $token;

}
function _get_customer_id_from_token($token)
{
	$last_six_chars =substr($token, 0, 6);
	$date_made = substr($token, 6,10);
	$last_login = substr($token, 16,10);
	
	$sql = "SELECT * FROM store_accounts WHERE date_made =? AND pword LIKE ? AND last_login=?";
	$query= $this->db->query($sql, array($date_made, '%'.$last_six_chars, $last_login));
	
	foreach ($query->result() as $row) {
	 $customer_id = $row->id;
	}
	if (!isset($customer_id)) {
		$customer_id = 0;
	}
	return $customer_id;

}
function _get_customer_name($update_id, $optional_customer_data=NULL)
{
	if (!isset($optional_customer_data)) {
		$data=$this->fetch_data_from_db($update_id);
	}else{
		$data['firstname'] = $optional_customer_data['firstname'];
		$data['lastname'] = $optional_customer_data['lastname'];
		$data['company'] = $optional_customer_data['company'];
	}
	
	if ($data=="") {
		$customer_name="Unknown";
	}else{
		$firstname=trim(ucfirst($data['firstname']));
		$lastname=trim(ucfirst($data['lastname']));
		$company=trim(ucfirst($data['company']));

		$company_length= strlen($company);
		if ($company_length>2) {
			$customer_name=$company;
		}else{
			$customer_name=$firstname." ".$lastname;
		}
	
	}
	return $customer_name;
}
function update_pword()
{
	$this->load->library('session');
	$this->load->module('site_security');
	$this->site_security->_make_sure_is_admin();

	$update_id = $this->uri->segment(3);
	$submit = $this->input->post('submit', TRUE);
	if (!is_numeric($update_id)) {
		redirect('store_accounts/manage');

	} elseif ($submit == "Cancel") {
		redirect('store_accounts/create/' . $update_id);
	}

	if ($submit == "submit") {
		//process the form
		$this->load->library('form_validation');
		$this->form_validation->set_rules('pword','Password', 'required|min_length[7]|max_length[35]');
		$this->form_validation->set_rules('repeat_pword', 'Repeat Password', 'required|matches[pword]');

		//$this->form_validation->set_rules('pword', 'Password', 'required|min_length[5]');
		//$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[pword]');

		if ($this->form_validation->run() == TRUE) {
			//get the variables
			$pword = $this->input->post('pword', TRUE);
			$this->load->module('site_security');
			$data['pword'] = $this->site_security->_hash_string($pword);

				//update password
				$this->_update($update_id, $data);
				$flash_msg = "The Account Password  was  successfully updated.";
				$value = '<div class="alert alert-success" role="alert">' . $flash_msg . '</div>';
				$this->session->set_flashdata('item', $value);
				redirect('store_accounts/create/' . $update_id);
			}
		}
	    $data['headline'] = 'Update Account Password';
		$data['update_id'] = $update_id;
		$data['flash'] = $this->session->flashdata('item');
		$data['view_file'] = "update_pword";
		$this->load->module('templates');
		$this->templates->admin($data);
	}


	function fetch_data_from_post()
	{
		$data['username'] = $this->input->post('username', TRUE);
		$data['firstname'] = $this->input->post('firstname', TRUE);
		$data['lastname'] = $this->input->post('lastname', TRUE);
		$data['company'] = $this->input->post('company', TRUE);
		$data['address1'] = $this->input->post('address1', TRUE);
		$data['address2'] = $this->input->post('address2', TRUE);
		$data['twon'] = $this->input->post('twon', TRUE);
		$data['country'] = $this->input->post('country', TRUE);
		$data['postcode'] = $this->input->post('postcode', TRUE);
		$data['telnum'] = $this->input->post('telnum', TRUE);
		$data['email'] = $this->input->post('email', TRUE);
		return $data;
	}

	function fetch_data_from_db($update_id)
	{
		if (!is_numeric($update_id)) {
			redirect('site_security/not_allowed/');
		}

		$query = $this->get_where($update_id);
		foreach ($query->result() as $row) {

			$data['username'] = $row->username;
			$data['firstname'] = $row->firstname;
			$data['lastname'] = $row->lastname;
			$data['company'] = $row->company;
			$data['address1'] = $row->address1;
			$data['address2'] = $row->address2;
			$data['twon'] = $row->twon;
			$data['country'] = $row->country;
			$data['postcode'] = $row->postcode;
			$data['telnum'] = $row->telnum;
			$data['email'] = $row->email;
			$data['date_made'] = $row->date_made;
			$data['pword'] = $row->pword;
			$data['last_login'] = $row->last_login;
		}
		if (!isset($data)) {
			$data = "";
		}
		return $data;
	}

	function create()
	{
		$this->load->library('session');
		$this->load->module('site_security');
		$this->site_security->_make_sure_is_admin();

		$update_id = $this->uri->segment(3);
		$submit = $this->input->post('submit', TRUE);
		if ($submit == "Cancel") {
			redirect('store_accounts/manage');
		}
		if ($submit == "submit") {
			//process the form
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('firstname','First Name','required');


			if ($this->form_validation->run()== TRUE) {
				//get the variables
				$data = $this->fetch_data_from_post();

				if (is_numeric($update_id)) {
					//update items
					$this->_update($update_id, $data);
					$flash_msg = "The Account details were  successfully updated.";
					$value ='<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
					$this->session->set_flashdata('item', $value);
					redirect('store_accounts/create/' . $update_id);
				}else{
					//insert new item
					$data['date_made'] =time();
					$this->_insert($data);
					$update_id = $this->get_max();
					$flash_msg = "The Account was  successfully added.";
					$value ='<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
					$this->session->set_flashdata('item', $value);
					redirect('store_accounts/create/' . $update_id);
				}
			}else{

			}
		}
		if (is_numeric($update_id) && ($submit!="submit")) {
			$data = $this->fetch_data_from_db($update_id);
		}else{
			$data = $this->fetch_data_from_post();
			$data['pig_pic'] = '';
		}
		if (!is_numeric($update_id)) {
			$data['headline'] = 'Add New Account';
		}else{
			$data['headline'] = 'Update Account';
		}
		$data['update_id'] = $update_id;
		$data['flash'] = $this->session->flashdata('item');

		$data['view_file'] = "create";
		$this->load->module('templates');
		$this->templates->admin($data);
	}
function manage()
{
    $this->load->module('site_security');
    $this->site_security->_make_sure_is_admin();
    $data['query'] = $this->get('lastname');

    $data['flash'] = $this->session->flashdata('item');

	$data['view_file'] = "manage";
	$this->load->module('templates');
	$this->templates->admin($data);
}

function get($order_by){
    $this->load->model('mdl_store_accounts');
    $query = $this->mdl_store_accounts->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) {
    $this->load->model('mdl_store_accounts');
    $query = $this->mdl_store_accounts->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id){
    $this->load->model('mdl_store_accounts');
    $query = $this->mdl_store_accounts->get_where($id);
    return $query;
}

function get_where_custom($col, $value) {
    $this->load->model('mdl_store_accounts');
    $query = $this->mdl_store_accounts->get_where_custom($col, $value);
    return $query;
}

function get_with_double_condition($col1, $value1, $col2, $value2)
{
	$this->load->model('mdl_store_accounts');
	$query = $this->mdl_store_accounts->get_with_double_condition($col1, $value1, $col2, $value2);
	return $query;
}
function _insert($data){
    $this->load->model('mdl_store_accounts');
    $this->mdl_store_accounts->_insert($data);
}

function _update($id, $data){
    $this->load->model('mdl_store_accounts');
    $this->mdl_store_accounts->_update($id, $data);
}

function _delete($id){
    $this->load->model('mdl_store_accounts');
    $this->mdl_store_accounts->_delete($id);
}

function count_where($column, $value) {
    $this->load->model('mdl_store_accounts');
    $count = $this->mdl_store_accounts->count_where($column, $value);
    return $count;
}

function get_max() {
    $this->load->model('mdl_store_accounts');
    $max_id = $this->mdl_store_accounts->get_max();
    return $max_id;
}

function _custom_query($mysql_query) {
    $this->load->model('mdl_store_accounts');
    $query = $this->mdl_store_accounts->_custom_query($mysql_query);
    return $query;
}
function autogen()
	{
		$mysql_query = "SHOW COLUMNS FROM store_accounts";
		$query = $this->_custom_query($mysql_query);
		/*
		foreach ($query->result() as $row) {
			$column_name = $row->Field;

			if ($column_name != "id") {
				echo '$data[\''.$column_name.'\'] = $this->input->post(\''.$column_name.'\', TRUE);<br>';
			}
		}
		echo "<br>";
		foreach ($query->result() as $row) {
			$column_name = $row->Field;

			if ($column_name != "id") {
				echo '$data[\''.$column_name.'\'] = $row->'.$column_name.';<br>';
			}
		}


              echo "<br>";
              foreach ($query->result() as $row) {
              $column_name = $row->Field;
              if ($column_name != "id") {
                         $var='<div class="control-group">
						<label class="control-label" for="typeahead">'.ucfirst($column_name).' </label>
						<div class="controls">
							<input type="text" class="span6" name="'.$column_name.'" value="<?= $'.$column_name.'?>">
						</div>
					</div>' ;
              echo htmlentities($var);
              echo "<br>";
              }
			  }*/
	}

}
