<?php
class Purchasesdetail extends Doctrine_Record{
 public function setTableDefinition()
 {
	$this->hasColumn('purchaseid','integer',4);  
	$this->hasColumn('shippingitemid','integer',4);
	
 }
 
 public function setUp()
 {
 	$this->hasOne('Shoppingdetail',array(
					'local'=>'id',
					'foreign'=>'shippingitemid')
					);
	$this->hasOne('Purchasses',array(
				'local'=>'purchaseid',
				'foreign'=>'id')
				);	
						
	
 }

}

?>