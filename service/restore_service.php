<?php
session_start();
require '../users/db.php';
$id = $_GET['id'];

$update_service = "UPDATE services SET status=0 WHERE id=$id";
$update_service_result = mysqli_query($db_connect, $update_service);

$_SESSION['restore'] = "Service Restored Successfully!";
header('location:service.php');

?>