<?php

require_once('lib/view.php');
require_once('models/m_siswa.php');
require_once('models/m_nationality.php');

$siswa = new Siswa();
$nat = new Nationality();

$data['title'] = "Import Students";
$data['page'] = "v_insiswa.php";

if(!empty($_FILES)){	

	$f = $_FILES['input_csv'];
	copy($f['tmp_name'], 'tmp.csv');

	$fo = fopen('tmp.csv', 'r');
	while($read = fgetcsv($fo)){
		$out[] = $read;	
		
	}

	


}

require_once View::getView('dashboard.php', $data);

