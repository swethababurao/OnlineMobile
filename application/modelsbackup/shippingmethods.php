<?php
class Shippingmethods extends Doctrine_Record{
 public function setTableDefinition()
 {
	$this->hasColumn('Name','string',255);
	$this->hasColumn('daysofdelivery','integer',4);
	$this->hasColumn('charges','decimal',18,array('scale',2));
	
 }
 
 public function setUp()
 {
 	
						
	
 }

}

?>