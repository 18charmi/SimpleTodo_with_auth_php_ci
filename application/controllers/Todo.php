<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('todo_model');
	}    

	public function index()
	{
		if($this->checklogin())
		{
		
		
		$this->load->view('header');
		
		// get the user id
		$uid = $this->session->userdata('uid');
		$list = $this->todo_model->readNote($uid);
		if($list)
		{
			$data['list'] = $list;
		}	
		
		$this->load->view('listitems', $data);
		}
	}

	public function newTodo()
	{
		if($this->checklogin())
		{
		
		$this->load->view('header');
		$this->load->view('newtodo');
		}
	}

	public function addTodo()
	{
		if($this->checklogin())
		{
		
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'uid' => $this->session->userdata('uid')
		);

		$insert = $this->todo_model->saveNote($data);

		if($insert)
		{
			echo "<script>";
			echo " 
			window.location.href=".base_url('note').";
			</script>";
		}

		}
			
	}
	
	public function allTodo()
	{
		if($this->checklogin())
		{
		
		$this->index();}
	}

	public function checklogin()
	{
		if($this->session->userdata('logged_in')){
			return true;
		}
		else{
			
			$this->alert("register or login first...",base_url('loginv'));
			
		}
	}
	
	function alert($message,$url) { 
		echo "<script>";
		echo " alert('$message');      
			window.location.href='$url';
			</script>";
	} 
}