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
			$this->email 			= $_POST['email'];
			$email 					= $this->email;
			
			$this->password			= $_POST['password'];
			$encpass				= sha1($this->password);
			
			$this->nama_perusahaan	= $_POST['nama_perusahaan'];
			$nama_perusahaan 		= $this->nama_perusahaan;
			
			$this->jenis_usaha		= $_POST['jenis_usaha'];
			$jenis_usaha 			= $this->jenis_usaha;
			
			$user 					= new User_model();
			$new_user				= $user->register_user($email,$encpass);	
			
			$new_profil				= $user->register_profil($nama_perusahaan,$jenis_usaha);	
			if($new_user&&$new_profil)
			{
				
			}
		}
	}
	
}

?>