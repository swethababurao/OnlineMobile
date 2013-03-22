<?php

class Shoppingcart extends CI_Model{
var $table = 'products';
var $table1 = 'shopping_bag';
function _construct(){
	parent::_construct();
}

function save_to_shopping_bag($productId){
   $this->db->select('id, product_model, color, price');
   $query = $this->db->get_where('products', array('id' => $productId)); 
   $rs = $query->result();
   //$this->load->library('cart');
  
 $this->db->set('product_id', $rs[0]->id);
$this->db->set('product_model', $rs[0]->product_model);
$this->db->set('color', $rs[0]->color);
$this->db->set('price', $rs[0]->price);
$this->db->insert('shopping_bag');
}


}
