
<?php
session_start();
require '../users/db.php';

$id = $_GET['id'];

$select_img = "SELECT * FROM logos WHERE id=$id";
$select_img_result = mysqli_query($db_connect, $select_img);
$after_assoc = mysqli_fetch_assoc($select_img_result);
$delete_from = '../uploads/logos/'.$after_assoc['logo'];
unlink($delete_from);

$delete_logo = "DELETE FROM logos WHERE id=$id";
$delete_logo_result = mysqli_query($db_connect, $delete_logo);
$_SESSION['delete_user'] = 'Logo Deleted Successfully!';
header('location:logo.php');

?>