<?php
class Repairstatus extends Doctrine_Record{
 public function setTableDefinition()
 {
 	
 	$this->hasColumn('repairid','integer',4);
	$this->hasColumn('currentstatus','string',255);
	$this->hasColumn('date','timestamp');
	$this->hasColumn('faultstatus','string',255);
		
 }
 
 public function setUp()
 {
 	
	$this->hasOne('Repair',array(
				'local'=>'repairid',
				'foreign'=>'id')
				);	
						
	
 }

}

?>