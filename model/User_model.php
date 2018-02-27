<?php

/*
##########
File untuk pemodelan objek dari DATABASE USER - tb_user
##########
*/

//pemanggilan fungsi global database sehingga otomatis semua konek
include_once "$_SERVER[DOCUMENT_ROOT]/anotero-platform/configuration/Database.php"; 

class User_model{
	
	public function __construct() //supaya semua kodingan di fungsi ini konek ke database global
	{
		$db = new Database();
	}

	public function register_user($email,$password)
	{
		$sql	= "INSERT INTO `tb_user` (`id`, `email`, `password`, `hak_akses`) VALUES (NULL, '$email', '$password' ,'manager'
		)";
		
		$query	= mysql_query($sql);
		return $query;
	}
    
    public function register_pegawai($email,$password, $hak_akses)
	{
		$sql	= "INSERT INTO `tb_user` (`id`, `email`, `password`, `hak_akses`) VALUES (NULL, '$email', '$password' ,'$hak_akses')";		
		$query	= mysql_query($sql);
		return $query;
	}
    
   
    public function cek_nama_usaha($email)
    {
        $sql 	= "SELECT nama_usaha FROM `tb_user_profil` where email='$email'";
        $query	= mysql_query($sql);
        while($row = mysql_fetch_array($query)){
            return $row['nama_usaha'];    
        }
		
    }
	
	public function register_profil($email, $nama_usaha, $jenis_usaha)
	{

		$sql = "INSERT INTO `tb_user_profil` (`id`, `email`, `nama_usaha`, `jenis_usaha`, `asal_kota`, `status`, `alamat`) VALUES (NULL, '$email', '$nama_usaha', '$jenis_usaha', NULL, '0', NULL)";

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
		$sql = "Select * from tb_user where email='$email' and password='$pass'";
		$query = mysql_query($sql);
		$num_rows = mysql_num_rows($query);
		return $num_rows;
	}
    
    public function _role($email)
    {
        $sql = "Select hak_akses from tb_user where email='$email'";
		$query = mysql_query($sql);
        while($row = mysql_fetch_array($query)){
            return $row['hak_akses'];
        }
    }
    
	public function capca_register1(){
	    $cap1 = (rand(0,10));
		return $cap1;
	}
	public function capca_register2(){
	    $cap2 = (rand(0,10));
		return $cap2;
	}
	public function capca_register3($a,$b){
		$hasil_capca= $a + $b;
	    return $hasil_capca;
	}
    
    public function require_step_($nama_usaha)
    {
        $sql = "SELECT count(nama_usaha) as namausaha FROM tb_user_profil where nama_usaha='$nama_usaha'";
        $query = mysql_query($sql);
        while($row = mysql_fetch_assoc($query))
        {
            return $row['namausaha'];    
        }    
    }
	
}

?>