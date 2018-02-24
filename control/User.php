<?php
/*
##########
File ini untuk jadi jembatan / penghubung supaya si user tidak langsung request data lewat model, tapi ke control dlu.
dari control nanti ambil nilai (return value) yang ada di objek model dari database
##########
*/

include "../model/User_model.php";

class User{
	
	public $email;
	public $password;
	public $nama_perusahaan;
	public $jenis_usaha;
	public $asal_kota;
	public $status;
	public $alamat;
	public $website;
	
	public function register()
	{
		if($_POST)
		{
			$email 					= $_POST['email'];
			$encpass				= sha1($_POST['password']);
			$nama_perusahaan 		= $_POST['nama_perusahaan'];
			$jenis_usaha 			= $_POST['jenis_usaha'];
			
			//menginisialisasi model usder
			$user 					= new User_model();
			
			//insert user
			$new_user				= $user->register_user($email,$encpass);	
			
			//insert profil
			$new_profil				= $user->register_profil($nama_perusahaan,$jenis_usaha);	
			
			if($new_user&&$new_profil)
			{
				header("location: http://localhost/anotero-platform/user/login.php");
			}
		}
	}
	
	public function validasi(){	
		if(isset($_POST['email']))
		{
			$email 					= $_POST['email'];
			$password 				= $_POST['password'];
			$encpass				= sha1($password);
			$user 					= new User_model();
				
			$validasi				= $user->validasi($email,$encpass);	
			if($validasi==0)
			{
				echo "username atau password salah";
			}else if($validasi==1)
			{
				session_start();
				$_SESSION['email'] = $_POST['email'];
				header("location: http://localhost/anotero-platform/user/dashboard.php");
			}
		}
	}
	
	public function valhalaman(){	
		session_start();
		if(!isset($_SESSION['email']))
		{
			header("location: http://localhost/anotero-platform/user/login.php");
		}
	}	
	
	public function vallogin(){
		session_start();
		if(isset($_SESSION['email']))
		{		
			header("location: http://localhost/anotero-platform/user/dashboard.php");
		}
	}
}

?>