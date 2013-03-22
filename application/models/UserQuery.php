<?php

class UserQuery extends CI_Model{
var $table = 'user_queries';
function _construct(){
	parent::_construct();
}

function saveQuestion($data){
	if($this->db->insert('user_queries',$data))
	   return true;
}

}