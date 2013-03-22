<?php
class Paymentmethods extends Doctrine_Record{
 public function setTableDefinition()
 {
	$this->hasColumn('Name','string',255);
	
 }
 
 public function setUp()
 {
 	
	
 }

}

?>