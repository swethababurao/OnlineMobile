<?php
class Accessoriesdetail extends Doctrine_Record{
 public function setTableDefinition()
 {
	$this->hasColumn('name','string',255);
	$this->hasColumn('accessoriesid','integer',4);
	$this->hasColumn('description','string');
	$this->hasColumn('price','decimal',18,array('scale',2));
	$this->hasColumn('productcode','string',255);
	
 }
 
 public function setUp()
 {
 	
 	$this->hasMany('Shoppingdetail',array(
					'local'=>'id',
					'foreign'=>'itemid')
					);
	$this->hasOne('Accessorires',array(
				'local'=>'accessoriesid',
				'foreign'=>'id')
				);	
						
	
 }

}

?>