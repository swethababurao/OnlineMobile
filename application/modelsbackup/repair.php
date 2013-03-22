<?php
class Repair extends Doctrine_Record{
 public function setTableDefinition()
 {
 	
 	$this->hasColumn('name','string',255);
	$this->hasColumn('address','string',255);
	$this->hasColumn('zipcode','string',255);
	$this->hasColumn('city','string',255);
	$this->hasColumn('country','string',255);
	$this->hasColumn('email','string',255);
	$this->hasColumn('productname','string',255);
	$this->hasColumn('defect','string');
	$this->hasColumn('date','timestamp');
	
	
 }
 
 public function setUp()
 {
 	$this->hasMany('Repairstatus',array(
					'local'=>'id',
					'foreign'=>'repairid')
					);
	
	
 }

}

?>