<?php

class Models extends CI_Model{
var $table = 'promodel';
function _construct(){
	parent::_construct();
}

function get_categories(){
	
	 $query = $this->db->get('promodel');
	 return $query->result();
	
}

function get_model_byid($modelid){

	$query = $this->db->get_where('promodel', array('id' => $modelid));
	return $query->result();

}

function get_model_by_catid($catid){

	$query = $this->db->get_where('promodel', array('catid' => $catid));
	return $query->result();

}





}