<?php
class Accessorires extends Doctrine_Record{
 public function setTableDefinition()
 {
	$this->hasColumn('name','string',255);
	$this->hasColumn('modelsid','integer',4);
 }
 
 public function setUp()
 {
 	$this->hasMany('Accessoriesdetail',array(
					'local'=>'id',
					'foreign'=>'accessoriesid')
					);
	$this->hasOne('Models',array(
				'local'=>'modelsid',
				'foreign'=>'id')
				);	
						
	
 }

}

?>