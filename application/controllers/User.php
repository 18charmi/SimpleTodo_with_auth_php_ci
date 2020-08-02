<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}    

	public function login()
	{
		$name = $this->input->post('name');
		$password = $this->input->post('password');
		
		$result = $this->user_model->getUser($name,$password);

		if($result){
			$this->session->set_userdata('uid', $result[0]['id']);
			$this->session->set_userdata('name', $result[0]['name']);
			$this->session->set_userdata('logged_in', true);
			Redirect(base_url().'note', false);

		}
		else{
			$this->alert("No user found with given details ... Try Again",base_url('loginv'));
		}
		
	}

	public function register()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'password' => $this->input->post('password'),
		);

		$insert = $this->user_model->insertUser($data);
		if($insert)
		{
			$this->session->set_userdata('uid', $insert);
			$this->session->set_userdata('name', $data['name']);
			$this->session->set_userdata('logged_in', true);
			Redirect(base_url().'note', false);
		}
		else{
			$this->alert("Unable to register... Same username already exists",base_url('registerv'));
		}
	}
	
	public function loginView()
	{
		$this->load->view('headerRegister');
		$this->load->view('login');
	}
	
	public function registerView()
	{
		$this->load->view('headerRegister');
		$this->load->view('register');
	}

	public function logout(){

		$this->session->unset_userdata('uid');
		$this->session->unset_userdata('name');
        $this->session->unset_userdata('logged_in');
		Redirect(base_url(), false);

	}

	function alert($message,$url) { 
		echo "<script>";
		echo " alert('$message');      
			window.location.href='$url';
			</script>";
	} 
	
}
