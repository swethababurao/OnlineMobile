<?php
class Shoppingdetail extends Doctrine_Record{
 public function setTableDefinition()
 {
	$this->hasColumn('date','timestamp');
	$this->hasColumn('itemid','integer',4);  // forign id of accessoriesdetail... 
	$this->hasColumn('price','decimal',18,array('scale',2));
	$this->hasColumn('qty','integer',4);
	
 }
 
 public function setUp()
 {
 	$this->hasMany('Purchasesdetail',array(
					'local'=>'id',
					'foreign'=>'shippingitemid')
					);
	$this->hasOne('Accessoriesdetail',array(
				'local'=>'itemid',
				'foreign'=>'id')
				);	
					
	
 }

}

?>