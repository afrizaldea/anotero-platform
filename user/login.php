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

		<!-- Bootstrap core CSS -->
		<link href="../asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="../asset/css/custom/style.css" rel="stylesheet">

	</head>

	<body class="container">

		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top header-top-bar">
		  <div class="container">
			<a class="navbar-brand" href="#">ANOTERO</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
			  <ul class="navbar-nav ml-auto">
				<li class="nav-item">
				  <a class="nav-link" href="../index.php">Home
				  </a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="../index.php #tentang">Tentang</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="../index.php #layanan">Layanan</a>
				</li>
				<li class="nav-item active">
				  <a class="nav-link" href="user/login.php">Login</a>
				  <span class="sr-only">(current)</span>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
		<br/>
	
	
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