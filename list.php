<?php

require_once 'lib/view.php';
require_once 'models/Siswa.php';

$siswa = new Siswa();
$data['siswa'] = $siswa->getSiswaFull();

require_once View::getView('layout.php', $data);