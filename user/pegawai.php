<?php
	include "../control/User.php";
	$user = new User();
	$user->valhalaman();
    $_SESSION['nama_usaha'] = $user->cek_nama_usaha();
    $user->require_step();
    $hak_akses = $_SESSION['hak_akses'];
    if(isset($_SESSION['requirestep']) && $_SESSION['requirestep'] == 1 && $hak_akses=="manager"){
        header("location:require_step.php");
    }
    else if($hak_akses != "manager"){
        header("location:http://localhost/anotero-platform/apps/restorder.id/pegawai/$hak_akses/");
    }
    $email = $_SESSION['email'];
    $nama_usaha = $_SESSION['nama_usaha'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Manager - Kelola Pegawai</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSS FORM LOAD -->
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="../asset/dashboard-libs/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="../asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="../asset/form-vendor/animate/animate.css">
        <!--===============================================================================================-->	
            <link rel="stylesheet" type="text/css" href="../asset/form-vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="../asset/form-vendor/select2/select2.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="../asset/css/util-form.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="../asset/css/main-form.css">
        <!--===============================================================================================-->
        <!-- END CSS FORM -->
          
        
        <!-- NAVIGASI LINK & FONTSTYLE LOAD -->
        <!--===============================================================================================-->
        <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Oswald" rel="stylesheet">
        <!--===============================================================================================-->
        <link href="fonts/font-style.css" rel="stylesheet">
        <!--===============================================================================================-->
        <link href="../asset/css/navigasi.css" rel="stylesheet" type="text/css"/>    
        <!--===============================================================================================-->
        <!-- END NAVIGASI LINK & FONTSTYLE -->
    
    </head>
<body>
    
    <!--========== NAVBAR ==========-->
        
                
                              <div class="navigasi">
                                <ul class="navbar">
                                    <li><a  href="dashboard.php"><?php echo $email ?></a>
                                    <li><a  href="kelola-pegawai.php">Kelola Data Pegawai</a>
                                    <li><a  href="laporan-keuangan.php">Laporan Keuangan</a>
                                    <li><a  href="logout.php">Keluar</a> 
                                </ul>
                            </div>
              
        <!--========== END NAVBAR ==========-->
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
            <span class="login100-form-title">
						Daftar Pegawai <?php echo $nama_usaha ?>
					</span>
                <div class="container-login100-form-btn">
					<table border="1">
                    <tr>
                    <th>Email</th>
                    <th>Divisi</th>
                    <th></th>
                    </tr>
                    <?php
                        
                        $pegawai = $user->lihatpegawai($nama_usaha);
                        while($row = mysql_fetch_array($pegawai)){
                            $email = $row['email'];
                            
                        $cek_divisi = $user->cek_divisi("hak_akses",$email);
                        while($pegawaibyemail = mysql_fetch_array($cek_divisi)){
                            $divisi = $pegawaibyemail['hak_akses'];
                        }
                    ?>
                    <tr align="center">
                        <td><?php echo $email; ?></td>
                        <td><?php echo $divisi; ?></td>
                        <td><a href="">editor</a></td>
                    </tr>
                    <?php } ?>
                    </table>
				</div>
                 
            </div>
        </div>
    </div>
    
	
<!-- load js script form -->
<!--===============================================================================================-->	
	<script src="../asset/form-vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../asset/form-vendor/bootstrap/js/popper.js"></script>
	<script src="../asset/form-vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../asset/form-vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../asset/form-vendor/tilt/tilt.jquery.min.js"></script>
<!--===============================================================================================-->
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="../asset/dashboard-libs/js/main-form.js"></script>
<!--===============================================================================================-->
<!-- end js script form -->
</body>
</html>
