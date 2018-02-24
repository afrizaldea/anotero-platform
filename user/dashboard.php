<?php
	include "../control/User.php";
	$user = new User();
	$user->valhalaman();
?>
<html>

<head>

</head>

<body>
<p><?php  echo "akun ini adalah " . $_SESSION['email']?></p>
<a href="logout.php" class="btn btn-link">Logout</a>

</body>