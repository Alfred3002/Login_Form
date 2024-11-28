<?php
session_start();

unset($_SESSION['authenticated']);
unset($_SESSION['auth_user']);
session_destroy();
$_SESSION['status'] = "You Logged Out Successfully";
header("Location: login.php");

?>