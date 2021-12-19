<?php
session_start();
require '../users/db.php';
$id = $_GET['id'];

$update_experience = "UPDATE experiences SET status=1 WHERE id=$id";
$update_experience_result = mysqli_query($db_connect, $update_experience);

$_SESSION['soft_del'] = "Experience Soft Deleted!";
header('location:experience.php');

?>