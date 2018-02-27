<?php
	include_once "$_SERVER[DOCUMENT_ROOT]/anotero-platform/control/User.php";
	$user = new User();
	$user->valhalaman();
    $email = $_SESSION['email'];
    $hak_akses = $user->cek_role($email);
    if($hak_akses != "pelayan"){
        header("location:http://localhost/anotero-platform/user/login.php");
    }
?>

hai <?php echo $email; ?>
<br/>
<a href="http://localhost/anotero-platform/user/logout.php">logout</a>