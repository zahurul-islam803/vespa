<?php
session_start();
require '../users/db.php';
$id = $_GET['id'];

$update_banner = "UPDATE banners SET status=1 WHERE id=$id";
$update_banner_result = mysqli_query($db_connect, $update_banner);

$_SESSION['soft_del'] = "Banner Soft Deleted!";
header('location:banners.php');

?>