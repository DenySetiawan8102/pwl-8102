<?php

require_once('DBClass.php');
class Nationality extends DBClass{
	
	public function getNationality(){
		$str = "select id_nationality as id, nationality as n 
		from nationality order by code";		
		$r = $this->getRows($str);
		$this->close();
		
		return $r;
	} 
}	