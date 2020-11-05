<?php
//reset session
session_unset();
session_destroy();

session_start();
$_SESSION['error'] = "Session Closed by Dy-Server !";
header("Location: ../view/login.php");

?>