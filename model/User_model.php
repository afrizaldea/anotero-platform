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

	public function register_user($email,$password)
	{
		$sql	= "INSERT INTO `tb_user` (`id`, `email`, `password`, `hak_akses`) VALUES (NULL, '$email', '$password' ,'user'
		)";
		
		$query	= mysql_query($sql);
		return $query;
	}
	
	public function register_profil($nama_perusahaan,$jenis_usaha)
	{
		$sql 	= "SELECT email FROM `tb_user` ORDER by id DESC LIMIT 1";

		$query	= mysql_query($sql);
		while($row = mysql_fetch_array($query))
		{
			$email = $row['email'];
		}

		$sql = "INSERT INTO `tb_user_profil` (	`id`,`email`, `nama_perusahaan`, `jenis_usaha`, `status`) VALUES (null,'$email',
		'$nama_perusahaan', '$jenis_usaha', '0')";

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
	
	public function _delete($param1)
	{
		$sql = "";
		$query = mysql_query($sql);
		return $query;
	}

	public function select($id)
	{
		$sql = "Select * from tb_user where id='$id'";
		$query = mysql_query($sql);
		return $query;
	}
	
	public function validasi($email, $pass)
	{
		$query = false;
		$sql = "Select * from tb_user where email='$email' and password='$pass'";
		$query = mysql_query($sql);
		return $query;
	}
	
}

?>