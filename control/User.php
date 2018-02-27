<?php
/*
##########
File ini untuk jadi jembatan / penghubung supaya si user tidak langsung request data lewat model, tapi ke control dlu.
dari control nanti ambil nilai (return value) yang ada di objek model dari database
##########
*/

include "$_SERVER[DOCUMENT_ROOT]/anotero-platform/model/User_model.php";

class User{
	
	public $email;
	public $password;
	public $nama_usaha;
	public $jenis_usaha;
	public $asal_kota;
	public $status;
	public $alamat;
	
	public function register()
	{
		if($_POST)
		{
			$email 					= $_POST['email'];
			$encpass				= sha1($_POST['password']);
			$nama_usaha 		    = $_POST['nama_usaha'];
			$jenis_usaha 			= $_POST['jenis_usaha'];
			
			//menginisialisasi model usder
			$user 					= new User_model();
			
			//insert user
			$new_user				= $user->register_user($email,$encpass);	
			
			//insert profil
			$new_profil				= $user->register_profil($email, $nama_usaha,$jenis_usaha);	
			
			if($new_user&&$new_profil)
			{
                
				header("location: http://localhost/anotero-platform/user/login.php");
			}
		}
	}
    
    public function register_pegawai()
	{
		if($_GET)
		{
			$email 					= $_GET['email'];
			$encpass				= sha1($_GET['password']);
            $hak_akses              = $_GET['hak_akses'];
			$nama_usaha             = $_GET['nama_usaha'];
            
			$user = new User_model();
            $new_user				= $user->register_pegawai($email,$encpass,$hak_akses);	
			
			//insert profil
			$new_profil				= $user->register_profil($email, $nama_usaha, null);	
			
			if($new_user&&$new_profil)
			{
                
				header("location: http://localhost/anotero-platform/user/dashboard.php");
			}
		}
                
            
		}
	
    
    public function cek_nama_usaha()
    {
        $user = new User_model();
        $email = $_SESSION['email'];
        return $user->cek_nama_usaha($email);
    }
	
	public function validasi(){	
		if(isset($_POST['email']))
		{
			$email 					= $_POST['email'];
			$password 				= $_POST['password'];
			$encpass				= sha1($password);
			$user 					= new User_model();
				
			$validasi				= $user->validasi($email,$encpass);
            $hak_akses              = $user->_role($email);
            
			if($validasi==0)
			{
				echo "username atau password salah";
			}
            else if($validasi==1 && $hak_akses=="manager")
			{
				session_start();
				$_SESSION['email'] = $_POST['email'];
				header("location: http://localhost/anotero-platform/user/require_step.php");
			}
            else if($validasi==1 && $hak_akses=="kasir")
            {
                session_start();
				$_SESSION['email'] = $_POST['email'];
				header("location: http://localhost/anotero-platform/apps/restorder.id/pegawai/kasir/");
            }
            else if($validasi==1 && $hak_akses=="pelayan")
            {
                session_start();
				$_SESSION['email'] = $_POST['email'];
				header("location: http://localhost/anotero-platform/apps/restorder.id/pegawai/pelayan/");
            }
            else if($validasi==1 && $hak_akses=="supervisor")
            {
                session_start();
				$_SESSION['email'] = $_POST['email'];
				header("location: http://localhost/anotero-platform/apps/restorder.id/pegawai/supervisor/");
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
			header("location: http://localhost/anotero-platform/user/require_step.php");
		}
	}
    
	public function capca(){
	    $capcay = new User_model();
		$cap1 = $capcay->capca_register1();
		$cap2 = $capcay->capca_register2();
		$cap3 = $capcay->capca_register3($cap1,$cap2);
		$capca = array(
		    "cap1" => $cap1,
		    "cap2" => $cap2,
		    "cap3" => $cap3,
		);
		echo $capca['cap3'];
		return $capca;
	}
    
    public function require_step()
    {
        $nama_usaha = $_SESSION['nama_usaha'];
        $user = new User_model();
        $validator = $user->require_step_($nama_usaha);
        if($validator==1){
            $_SESSION['requirestep'] = 1;
        }else{
            $_SESSION['requirestep'] = 0;
        }
    }
    
    public function cek_role($email)
    {
        $user = new User_model();
        return $user->_role($email);
    }
    
}

?>