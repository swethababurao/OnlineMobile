<?php
class User extends Doctrine_Record{
 public function setTableDefinition()
 {
	$this->hasColumn('Name','string',255);
	$this->hasColumn('zipcode','string',255);
	$this->hasColumn('Address','string',255);
	$this->hasColumn('city','string',255);
	$this->hasColumn('address','string');
	$this->hasColumn('emailaddress','string',255);
	$this->hasColumn('phonenumber','string',255);
	$this->hasColumn('contid','integer',4);
	$this->hasColumn('usertype','string',50);
	
 }
 
 public function setUp()
 {
 	$this->setTableName('User');
	$this->actAs('Timestampable');
	$this->hasMutator('password','_encrypt_password');	
 	$this->hasMany('Shoppingaddress',array(
					'local'=>'id',
					'foreign'=>'userid')
					);
	$this->hasMany('Purchasses',array(
					'local'=>'id',
					'foreign'=>'userid')
					);
	
				
	$this->hasOne('Country',array(
				'local'=>'contid',
				'foreign'=>'id')
				);
						
	
 }
 protected function _encrypt_password($value)
 {
 	$secritkey ='#*seCc$Et!@-*%';
	$this->_set('password',md5($secritkey.$value.$secritkey));
 }

}

?>