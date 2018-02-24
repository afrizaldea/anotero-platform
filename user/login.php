<?php

/*
############
ketika form di load, maka tidak masuk ke model secara langsung karena itu bahaya
maka di include lah si control user sebagai perantara
############
*/
include "../control/User.php";
$user = new User();
$user->validasi();

//proses teknikal selesai


?>

<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Login Anotero</title>

		<link href="../asset/css/custom/style-login.css" rel="stylesheet">

	</head>

	<body>

		<ul class="topnav">
			<div class="kiri">
  				<li><a href="#about"> ANOTERO </a></li>
  			</div>
  			<div class="kanan">
  				<li class="right"><a href="login.php">Login</a></li>
  				<li class="right"><a href="../index.php #produk">Layanan</a></li>
  				<li class="right"><a href="../index.php #about">Tentang</a></li>
  				<li class="right"><a href="../index.php #home">Home</a></li>
  			</div>		
		</ul>


		<div class="form_wrapper">
			<div class="form_container">
				<div class="title_container">
					<h2>LOGIN</h2>
				</div>
				<div class="row clearfix">
      				<div class="col_half">
						<div class="social_btn fb"><a href="#"><span><i class="fa fa-facebook" aria-hidden="true"></i></span>Sign in with Facebook</a></div>
						<div class="social_btn tw"><a href="#"><span><i class="fa fa-twitter" aria-hidden="true"></i></span>Sign in with Twitter</a></div>
						<div class="social_btn gplus"><a href="#"><span><i class="fa fa-google-plus" aria-hidden="true"></i></span>Sign in with Google+</a></div>
						<div class="row clearfix create_account">
							<div><a href="register.php">Buat Akun</a></div>
						</div>
					</div>
					<div class="col_half last">
						<form>
							<div class="input_field"><span><small>Email</small></span>
								<input type="email" name="email" required=""/>
							</div>
							<div class="input_field"><span><small class="kecil">Password</small></span>
								<input type="password" name="phone" required=""/>
							</div>
							<input class="button" type="submit" value="Login"/>
							<div class="row clearfix bottom_row">
								<div class="col_half remember_me">
									<input name="" type="checkbox" value=""/>Remember me
								</div>
								<div class="col_half forgot_pw"><a href="#">Lupa Passsword?</a></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	
	
	<!-- form biar ketengah -->
	<h3 class="jumbrotron" align="center">Masuk ke web apps kami!</h3>
	<hr/>
	
	<div class="row justify-content-center">
	
		<form action="" method="POST">
			<div class="form-group">
				<label for="InputEmail1">Alamat Email</label>
				<input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email anda">
			</div>
			<div class="form-group">
				<label for="InputPassword1">Password</label>
				<input type="password" class="form-control" id="InputPassword1" placeholder="Password">
			</div>
			
			<div class="alert alert-dark small" role="alert">
			Jika anda belum bergabung, silahkan <a href="register.php">daftar disini</a>.
			</div>
			
			<button type="submit" class="btn btn-outline-info" onclick="return confirm('Saya setuju mendaftar sebagai member anotero')">Masuk</button>
			<a href="forgetpass.php" class="btn btn-link">Lupa Password</a>
		</form>
	</div>
	<!-- form selesai -->

	</body>
</html>