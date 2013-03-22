<?php

class Product extends CI_Model{
var $table = 'products';

function _construct(){
	parent::_construct();
}

function get_products($catagoryId){
	
	 $query = $this->db->get_where('products', array('catagory_id' => $catagoryId));
	 return $query->result();
	
}

function get_product_details($productId){

	$query = $this->db->get_where('products', array('id' => $productId));
	return $query->result();

}


function GetAutocomplete($options = array())
{

	$this->db->select('id,product_model');
	$this->db->like('product_model', $options['keyword'], 'after');
	$query = $this->db->get('products');
	return $query->result();
}

function get_product_details_by_model($productmodel){

	$query = $this->db->get_where('products', array('product_model' => $productmodel));
	return $query->result();

}





}