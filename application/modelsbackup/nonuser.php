<?php
class Nonuser extends Doctrine_Record{
 public function setTableDefinition()
 {
	$this->hasColumn('Name','string',255);
	$this->hasColumn('zipcode','string',255);
	$this->hasColumn('Address','string',255);
	$this->hasColumn('city','integer',255);
	$this->hasColumn('additional_info','string');
	$this->hasColumn('email_address','string',255);
	$this->hasColumn('phonenumber','string',255);
	
 }
 
 public function setUp()
 {
 	$this->hasMany('Shoppingaddress',array(
					'local'=>'id',
					'foreign'=>'nonuserid')
					);
	$this->hasMany('Purchasses',array(
					'local'=>'id',
					'foreign'=>'userid')
					);
					
						
	
 }

}

?>