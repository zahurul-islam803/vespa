<?php
session_start();
require '../users/db.php';
$id = $_GET['id'];

$update_experience = "UPDATE experiences SET status=0 WHERE id=$id";
$update_experience_result = mysqli_query($db_connect, $update_experience);

$_SESSION['restore'] = "Experience Restored Successfully!";
header('location:experience.php');

?>