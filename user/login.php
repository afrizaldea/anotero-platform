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

	<body>
		<ul class="topnav">
  			<li><a href="#about"> ANOTERO </a></li>
  			<li class="right"><a href="login.php">Login</a></li>
  			<li class="right"><a href="../index.php #layanan">Layanan</a></li>
  			<li class="right"><a href="../index.php #about">Tentang</a></li>
  			<li class="right"><a href="../index.php #home">Home</a></li>		
		</ul>
	
	
	<!-- form biar ketengah -->
	<h3 class="jumbrotron" align="center">Masuk ke web apps kami!</h3>
	<hr/>
	
	<div class="row justify-content-center">
	
		<form>
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
			
			<button type="submit" class="btn btn-outline-info">Masuk</button>
			<a href="forgetpass.php" class="btn btn-link">Lupa Password</a>
		</form>
	</div>
	<!-- form selesai -->
	
	</body>
</html>