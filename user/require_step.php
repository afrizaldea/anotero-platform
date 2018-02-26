<?php
	include "../control/User.php";
	$user = new User();
	$user->valhalaman();
    $user->register_pegawai();
    $_SESSION['nama_usaha'] = $user->cek_nama_usaha();
    $user->require_step();
    if(isset($_SESSION['requirestep']) && $_SESSION['requirestep'] == 0){
        header("location:dashboard.php");
    }
    $email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registrasi Aplikasi</title>
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
                                    <li><a  href="../"><?php echo $email ?></a>
                                    <li><a  href="#">Produk</a>
                                    <li><a  href="register.php">Daftar</a>
                                    <li><a  href="login.php">Masuk</a>
                                       
                                </ul>
                            </div>
              
        <!--========== END NAVBAR ==========-->
    
        <!--========== FORM ==========-->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../asset/img/medium/user-register.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="GET" action="" onsubmit="return validasi_pass(this)">
					<span class="login100-form-title">
						<small>Hmmm...Nampaknya Anda belum menambahkan pegawai :(</small><br/><hr/>
                        Silahkan tambahkan setidaknya 1 pegawai
					</span>
                    
                    
                    <input type="text" name="nama_usaha" value="<?php echo $user->cek_nama_usaha(); ?>" hidden>
					<div class="wrap-input100 validate-input" data-validate = "Format email harus valid, contoh: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>
                    

					<div class="wrap-input100 validate-input" data-validate = "Kata sandi harus di inputkan">
						<input class="input100" type="password" name="password" placeholder="Kata sandi" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "hak akses">
						<select class="input100" type="text" name="hak_akses" required>
						<span class="focus-input100"></span>
						<option class="symbol-input100" value="">
							Pilih Bagian / Divisi
						</option>
                            <option class="symbol-input100" value="supervisor">
							Supervisor
						</option>
                            <option class="symbol-input100" value="kasir">
							Kasir
						</option>
						    <option class="symbol-input100" value="pelayan">
							Pelayan
						</option>
					   </select>
                    </div>
                    
			            <br/>					
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Daftarkan Pegawai
						</button>
					</div>
    
				</form>
				<!--========== END FORM ==========-->
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
