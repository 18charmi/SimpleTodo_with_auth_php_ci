<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class User_model extends CI_Model{
	
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insertUser($data){
        $q = $this->db->insert('user',$data);
        
        if($q){
            $insertId = $this->db->insert_id();
            return  $insertId;
        }
        else
            return false;
    }

	public function getUser($user,$password){
		$query = $this->db->get_where('user', array('name' => $user, 'password' => $password));
        return $query->result_array();
	}
}

?>