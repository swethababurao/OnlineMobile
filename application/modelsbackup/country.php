<?php
class Country extends Doctrine_Record{
 public function setTableDefinition()
 {
	$this->hasColumn('Name','string',255);
 }
 
 public function setUp()
 {
 	
	$this->hasMany('User',array(
				'local'=>'id',
				'foreign'=>'contid')
				);
		
	
 }

}

?>