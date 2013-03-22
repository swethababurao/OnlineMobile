<?php
class Brands extends Doctrine_Record{
 public function setTableDefinition()
 {
	$this->hasColumn('name','string',255);
	
 }
 
 public function setUp()
 {
 	$this->hasMany('Models',array(
					'local'=>'id',
					'foreign'=>'brandsid')
					);
	
						
	
 }

}

?>