<?php
class Shoppingaddress extends Doctrine_Record{
 public function setTableDefinition()
 {
	$this->hasColumn('Name','string',255);
	$this->hasColumn('zipcode','string',255);
	$this->hasColumn('Address','string',255);
	$this->hasColumn('city','integer',255);
	$this->hasColumn('additional_info','string');
	$this->hasColumn('emailaddress','string',255);
	$this->hasColumn('phonenumber','string',255);
	$this->hasColumn('userid','integer',4);
	$this->hasColumn('nonuserid','integer',4);
	$this->hasColumn('itemid','integer',4);
	
 }
 
 public function setUp()
 {
 		
 	$this->hasMany('Purchasses',array(
					'local'=>'id',
					'foreign'=>'shippingaddressid')
					);
	$this->hasOne('User',array(
				'local'=>'userid',
				'foreign'=>'id')
				);
	$this->hasOne('Nonuser',array(
				'local'=>'nonuserid',
				'foreign'=>'id')
				);	
	$this->hasOne('Accessoriesdetail',array(
				'local'=>'itemid',
				'foreign'=>'id')
				);	
						
	
 }
 

}

?>