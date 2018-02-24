<?php

include "../control/User.php";
	$user = new User();
	$user->register();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="../asset/dashboard-libs/image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/dashboard-libs/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/dashboard-libs/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/dashboard-libs/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../asset/dashboard-libs/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/dashboard-libs/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/dashboard-libs/css/util.css">
	<link rel="stylesheet" type="text/css" href="../asset/dashboard-libs/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../asset/dashboard-libs/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="">
					<span class="login100-form-title">
						Registrasi Sekarang!
					</span>
                    
					<div class="wrap-input100 validate-input" data-validate = "Format email harus valid, contoh: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Kata sandi harus di inputkan">
						<input class="input100" type="password" name="password" placeholder="Kata sandi">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Kata sandi harus di inputkan">
						<input class="input100" type="password" name="password" placeholder="Konfirmasi Kata sandi">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Masukan nama perusahaan anda">
						<input class="input100" type="text" name="nama_perusahaan" placeholder="Nama perusahaan anda">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card-o" aria-hidden="true"></i>
						</span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "masukan jenis_usaha anda">
						<select class="input100" type="text" name="jenis_usaha" placeholder="jenis usaha anda">
						<span class="focus-input100"></span>
						<option class="symbol-input100" value="">
							Pilih Jenis Usaha
						</option>
                            <option class="symbol-input100" value="Toko Baju">
							Toko Baju
						</option>
                            <option class="symbol-input100" value="Apotek">
							Apotek
						</option>
						    <option class="symbol-input100" value="Mini Market">
							Mini Market
						</option>
						    <option class="symbol-input100" value="Restoran">
							Restoran
						</option>
						    <option class="symbol-input100" value="Toko Elektronik">
							Toko Elektronik
						</option>
						    <option class="symbol-input100" value="Hotel">
							Hotel
						</option>
						
					   </select>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Daftarkan Saya
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Anda Sudah Punya Akun?
						</span>
						<a class="txt2" href="login.php">
							Masuk disini!
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Daftar menggunakan Gmail
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="../asset/dashboard-libs/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../asset/dashboard-libs/vendor/bootstrap/js/popper.js"></script>
	<script src="../asset/dashboard-libs/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../asset/dashboard-libs/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../asset/dashboard-libs/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="../asset/dashboard-libs/js/main.js"></script>

</body>
</html>