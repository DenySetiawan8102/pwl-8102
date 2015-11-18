<?php

if(empty($_COOKIE['username']) or empty($_COOKIE['fullname'])){
	header('location: index.php');
}

require_once 'lib/view.php';
require_once 'models/Siswa.php';
require_once 'models/Nationality.php';

$siswa = new Siswa();
$nat = new Nationality();

$data['siswa'] = $siswa->getSiswaFull();
$data['nat'] = $nat->getNationality();

require_once View::getView('layout.php', $data);