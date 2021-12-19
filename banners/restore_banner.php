<?php
session_start();
require '../users/db.php';
$id = $_GET['id'];

$update_banner = "UPDATE banners SET status=0 WHERE id=$id";
$update_banner_result = mysqli_query($db_connect, $update_banner);

$_SESSION['restore'] = "Banner Restored Successfully!";
header('location:banners.php');

?>