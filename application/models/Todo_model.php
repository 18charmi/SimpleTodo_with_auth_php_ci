<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class Todo_model extends CI_Model{
	
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }

   	public function saveNote($data){  
	   	$q = $this->db->insert('todo',$data);
		return $q;
	}

	public function readNote($uid){
        $query = $this->db->get_where('todo', array('uid' => $uid));        
        return $query->result_array();
    }


}

?>