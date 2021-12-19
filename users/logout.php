<?php
session_start();
unset($_SESSION['login']);
$_SESSION['logout'] = 'Logout Successfully!';
header('location:login.php');

?>