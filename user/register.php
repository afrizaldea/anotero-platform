<?php

include "../control/User.php";
	$user = new User();
	$user->vallogin();
	$user->validasi();
	$msg = $user->register();
    $capca = $user->capca();
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
                                    <li><a  href="../">Home</a>
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

				<form class="login100-form validate-form" method="POST" action="" onsubmit="return validasi_pass(this)">
					<span class="login100-form-title">
						Registrasi Sekarang!
					</span>
                    
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
                    
                    <div class="wrap-input100 validate-input" data-validate = "Kata sandi harus di inputkan">
						<input class="input100" type="password" name="konfirmasi" placeholder="Konfirmasi Kata sandi" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Masukan nama perusahaan anda">
						<input class="input100" type="text" name="nama_usaha" placeholder="Nama brand anda" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card-o" aria-hidden="true"></i>
						</span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "masukan jenis_usaha anda">
						<select class="input100" type="text" name="jenis_usaha" placeholder="jenis usaha anda" required>
						<span class="focus-input100"></span>
						<option class="symbol-input100" value="">
							Pilih Jenis Usaha
						</option>
                            <option class="symbol-input100" value="restoran">
							Kafetaria / Resto
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
                    </div>
                    <fieldset>
			            <legend>Captcha</legend>
				            <label><?php echo $capca['cap1'] . "+" . $capca['cap2'] ?></label>
					        <br/>
					        <input type="text" class="input100" onkeyup="capca(<?php echo $capca['cap3']; ?>)" id="nilai" >
			        </fieldset>
			            <br/>					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="button" disabled>
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

<script>
    var hidden = false;
    function capca(x) {
	    var y = document.getElementById('nilai').value;
        if(x == y) {
            document.getElementById('button').disabled = false;
        } else {
            document.getElementById('button').disabled = true;
        }
    }
	function validasi_pass(form){
        if (form.password.value != form.konfirmasi.value){
            alert("Kata sandi dan konfirmasi kata sandi harus sama");
            form.konfirmasi.focus();
            return (false);
        }
        return (true);
    }
</script>