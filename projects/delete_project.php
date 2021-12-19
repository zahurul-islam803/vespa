
<?php
session_start();
require '../users/db.php';

$id = $_GET['id'];

$select_img = "SELECT * FROM projects WHERE id=$id";
$select_img_result = mysqli_query($db_connect, $select_img);
$after_assoc = mysqli_fetch_assoc($select_img_result);
$delete_from = '../uploads/projects/'.$after_assoc['image'];
unlink($delete_from);

$delete_project = "DELETE FROM projects WHERE id=$id";
$delete_project_result = mysqli_query($db_connect, $delete_projects);
$_SESSION['delete_user'] = 'Project Deleted Successfully!';
header('location:projects.php');

?>