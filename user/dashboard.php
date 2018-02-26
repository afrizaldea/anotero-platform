<?php
	include "../control/User.php";
	$user = new User();
	$user->valhalaman();
    $_SESSION['nama_usaha'] = $user->cek_nama_usaha();
    $user->require_step();
    if(isset($_SESSION['requirestep']) && $_SESSION['requirestep'] == 1){
        header("location:require_step.php");
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
