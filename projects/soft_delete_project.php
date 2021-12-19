<?php
session_start();
require '../users/db.php';
$id = $_GET['id'];

$update_project = "UPDATE projects SET status=1 WHERE id=$id";
$update_project_result = mysqli_query($db_connect, $update_project);

$_SESSION['soft_del'] = "Project Soft Deleted!";
header('location:projects.php');

?>