<?php

require_once('DBClass.php');
class Siswa extends DBClass{
	
	public function getSiswa(){
		$str = "select nis,full_name,email from siswa order by full_name";		
		$r = $this->getRows($str);
		$this->close();
		
		return $r;
	} 

	public function getSiswaFull(){
		$str = "select nis,full_name,email,nationality from siswa s
		join nationality n on s.id_nationality = n.id_nationality
		order by full_name";		
		$r = $this->getRows($str);
		$this->close();
		
		return $r;	
	}
	
	public function editSiswa($id, $data = array()){
		$str = "Update siswa set ";
		
		$i = 0;
		foreach($data as $k=>$v){
			$coma = ($i>0)?",":"";
			$str .= $coma.$k."='".$v."'";			
			$i++;
		}	
			
		$str .= "Where id_siswa=".$id;
		
		$this->putRows($str);
	}
}
