<?php
class Models extends Doctrine_Record{
 public function setTableDefinition()
 {
 
	$this->hasColumn('name','string',255);
	$this->hasColumn('brandsid','integer',4);
 }
 
 public function setUp()
 {
 	$this->setTableName('Models');
 	$this->hasMany('Accessorires',array(
					'local'=>'id',
					'foreign'=>'modelsid')
					);
	
	$this->hasOne('Brands',array(
				'local'=>'brandsid',
				'foreign'=>'id')
				);	
						
	
 }

}

?>