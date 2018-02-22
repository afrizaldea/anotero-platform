<?php

/*
##########
File untuk pemodelan objek dari DATABASE USER - tb_user
##########
*/

//pemanggilan fungsi global database sehingga otomatis semua konek
include_once "../configuration/Database.php"; 

class User_model{
	
	

	
	public function __construct() //supaya semua kodingan di fungsi ini konek ke database global
	{
		$db = new Database();
	}

	public function register_user($email,$password,$nama_perusahaan,$jenis_usaha)
	{
		$sql	= "INSERT INTO `tb_user` (`id`, `email`, `password`, `nama_perusahaan`, `jenis_usaha`, `asal_kota`, `status`, `alamat`, `website`) VALUES (NULL, '$email', '$password', '$nama_perusahaan', '$jenis_usaha', '', '0', '', '')";
		
		$query	= mysql_query($sql);
		return $query;
	}
	
	public function cek_email($email)
	{
		$sql 	= "SELECT COUNT(email) as _email FROM tb_user where email='$email'";
		$query	= mysql_query($sql);
		while($row = mysql_fetch_array($query))
		{
			$_email = $row['_email'];
		}
		return $_email;
	}

	public function update($param1, $param2, $dst)
	{
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