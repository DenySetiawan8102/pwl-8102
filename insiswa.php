<?php

require_once('lib/view.php');
require_once('models/m_siswa.php');
require_once('models/m_nationality.php');

$siswa = new Siswa();
$nat = new Nationality();

$data['title'] = "Import Students";
$data['page'] = "v_insiswa.php";

require_once View::getView('dashboard.php', $data);

