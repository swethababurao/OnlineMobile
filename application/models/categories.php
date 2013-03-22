<?php

class Categories extends CI_Model{
var $table = 'category';
function _construct(){
	parent::_construct();
}

function get_categories(){
	
	 $query = $this->db->get('category');
	 return $query->result();
	
}

function get_category_byid($category){

	$query = $this->db->get_where('products', array('id' => $productId));
	return $query->result();

}

public function loadcategoryarray()
{
			$query = $this->db->get('category');
	 		$cnt = $query->result();
			$cat = array("no-val"=>"Select Category");
			foreach($cnt as $ct)
			{
				$cat[$ct["id"]]=$ct["Name"];
			}
			//print_r($cat);
			return $cat;
			
		
}

function saveCategory($data){
	if($this->db->insert('category',$data))
	   return true;
}




}