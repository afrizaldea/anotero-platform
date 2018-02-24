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

		<link href="../asset/css/custom/style-login.css" rel="stylesheet">
		<link href="../asset/css/custom/switch.css" rel="stylesheet">

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
					<h2>BUAT AKUN</h2>
				</div>
				<div class="center">
					<form action="" method="POST">
						<div class="input_field"><span><small>Email</small></span>
							<input type="email" name="email" required=""/>
						</div>
						<div class="input_field"><span><small class="kecil">Password</small></span>
							<input type="password" name="password" required=""/>
						</div>
						<div class="input_field"><span><small class="kecil">Confrim</small></span>
							<input type="password" name="confimpassword" required=""/>
						</div>
    					<select>
    						<option value="0">-----</option>
      						<option value="1">Mini - Market</option>
      						<option value="2">Apotek</option>
      						<option value="3">Hotel</option>
      						<option value="4">Restaurant</option>
      						<option value="5">Clothing</option>
      						<option value="6">Toko Elektronik</option>
    					</select>
    					</p>

						<label class="switch">
  							<input type="checkbox" checked>
  							<span class="slider round"></span>
						</label>
						</p>
						<input class="button" type="submit" value="Daftar"/>
					</form>
				</div>
			</div>
		</div>
	
	</body>
</html>