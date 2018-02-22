<?php

/*
############
ketika form di load, maka tidak masuk ke model secara langsung karena itu bahaya
maka di include lah si control user sebagai perantara
############
*/
include "../control/User.php";
$user = new User();
$user->register();

//proses teknikal selesai


?>

<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Registrasi Anotero</title>

		<!-- Bootstrap core CSS -->
		<link href="../asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="../asset/css/custom/style.css" rel="stylesheet">

	</head>

	<body class="container">

		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		  <div class="container">
			<a class="navbar-brand" href="#">ANOTERO</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
			  <ul class="navbar-nav ml-auto">
				<li class="nav-item">
				  <a class="nav-link" href="#">Home
				  </a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">Tentang</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">Layanan</a>
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
	<div class="row justify-content-center">
		<form action="" method="POST">
			<div class="form-group">
				<label for="nama_perusahaan">Nama Perusahaan</label>
				<input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan">
			</div>
			<div class="form-group">
				<label for="InputEmail1">Alamat Email</label>
				<input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email anda" name="email">
			</div>
			<div class="form-group">
				<label for="InputPassword1">Password</label>
				<input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password">
			</div>
			<div class="form-group">
				<label for="jenis_usaha">Jenis Usaha</label>
				<input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha">
			</div>
			<div class="alert alert-dark small" role="alert">
			Jika anda belum bergabung, silahkan <a href="">daftar disini</a>.
			</div>
			
			<button type="submit" class="btn btn-outline-info" onclick="return confirm('Saya setuju mendaftar sebagai member anotero')">Daftar</button>
			<a href="login.php" class="btn btn-link">Kembali</a>
		</form>
	</div>
	<!-- form selesai -->
	
	</body>
</html>