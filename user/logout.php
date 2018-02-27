<?php
session_start();
unset($_SESSION['email']);
session_destroy();

header("location: http://localhost/anotero-platform/user/login.php");

?>