<?php
session_start();
require 'db.php';
$id = $_GET['id'];

$update_user = "UPDATE users SET status=0 WHERE id=$id";
$update_user_result = mysqli_query($db_connect, $update_user);

$_SESSION['restore'] = "User Restored Successfully!";
header('location:users.php');

?>