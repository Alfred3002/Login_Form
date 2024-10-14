<?php
session_start();

    if(!isset($_SESSION['authenticated'])){

        $_SESSION['status'] = "Please Login to access User's Dashboard.";
        header('Location: login.php');
        exit(0);

    }
?>