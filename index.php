<?php

require_once 'lib/view.php';
require_once 'models/Admin.php';

$adm = new Admin();
$data = array();

if(!empty($_POST)){	

	$rs = $adm->login($_POST['usr'], $_POST['pwd']);
	if(count($rs)>0){
		setcookie("username", $rs[0]['username'], time()+3600);
		setcookie("fullname", $rs[0]['fullname'], time()+3600);		

		header('location:list.php');
	}else{
		$data['error'] = "Error: User dan Password tidak sesuai";
	}

}

require_once View::getView('signin.php', $data);