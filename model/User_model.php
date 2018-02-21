<?php

/*
##########
File untuk pemodelan objek dari DATABASE USER - tb_user
##########
*/

//pemanggilan fungsi global database sehingga otomatis semua konek
include_once "configuration/Database.php"; 

class User_model{
	
	public function __construct() //supaya semua kodingan di fungsi ini konek ke database global
	{
		$db = new Database();
	}

	public function insert($param1, $param2, $dst){
		$sql = "";
		$query = mysql_query($sql);
		return $query;
	}

	public function update($param1, $param2, $dst){
		$sql = "";
		$query = mysql_query($sql);
		return $query;
	}
	
	public function delete($param1)
	{
		$sql = "";
		$query = mysql_query($sql);
		return $query;
	}

	public function select()
	{
		$sql = "";
		$query = mysql_query($sql);
		return $query;
	}
	
}

?>