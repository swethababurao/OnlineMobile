<?php
class Purchasses extends Doctrine_Record{
 public function setTableDefinition()
 {
 	$this->hasColumn('username','string',255);
	$this->hasColumn('usertype','string',255);
	$this->hasColumn('shippingtype','string',255);
	$this->hasColumn('shippmentmethod','string',255);
	$this->hasColumn('paymenttype','string',255);
	$this->hasColumn('transactionid','string',255);
	$this->hasColumn('userid','integer',4);  
	$this->hasColumn('nonuserid','integer',4);
	$this->hasColumn('shippingaddressid','integer',4);
	
 }
 
 public function setUp()
 {
 	$this->hasMany('Purchasesdetail',array(
					'local'=>'id',
					'foreign'=>'shippingitemid')
					);
	$this->hasOne('User',array(
				'local'=>'userid',
				'foreign'=>'id')
				);
	$this->hasOne('Nonuser',array(
				'local'=>'nonuserid',
				'foreign'=>'id')
				);
	$this->hasOne('Shoppingaddress',array(
				'local'=>'shippingaddressid',
				'foreign'=>'id')
				);					
	
 }

}

?>