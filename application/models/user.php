<?php

class User extends CI_Model{
var $table = 'users';
function _construct(){
	parent::_construct();
}

function saveUser($data){
	if($this->db->insert('users',$data))
	   return true;
}

function verify_user($email,$password)
{
   $query = $this->db->get_where('users', array('email' => $email, 'password' => $password));

   $numOfRows = $query->num_rows;
   if($numOfRows >0){
   
   	$user =$query->result();

   	$this->session->set_userdata('user_id', $user[0]->id);
   	$this->session->set_userdata('full_name', $user[0]->full_name);
   	$this->session->set_userdata('email', $user[0]->email);

   	
    return true;
   }
   return false;
}

function get_all_users(){
	
	 $query = $this->db->get_where('users', array('type' =>  0));
	 return $query->result();
	
}
function get_admin_users(){
	
	 $query = $this->db->get_where('users', array('type' =>  1));
	 return $query->result();
	
}
function admin_user($email,$password)
{
   $query = $this->db->get_where('users', array('email' => $email, 'password' => $password));

   $numOfRows = $query->num_rows;
   if($numOfRows >0){
   
		$user =$query->result();
		$type = $user[0]->type;
		if($type == 1)
		{
			$this->session->set_userdata('admin_id', $user[0]->id);
			$this->session->set_userdata('admin_name', $user[0]->full_name);
			$this->session->set_userdata('admin_email', $user[0]->email);
		
			
			return true;
		}
		else 
			return false;
   }
   return false;
}


}