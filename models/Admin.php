<?php

require_once('DBClass.php');
class Admin extends DBClass{
	
	public function login($u, $p){
		$str = "select username,fullname,email,lastlog from admin 
			where username='$u' and password='$p'";		
		$r = $this->getRows($str);
		$this->close();
		
		return $r;
	} 
		
}
