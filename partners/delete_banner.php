
<?php
session_start();
require '../users/db.php';

$id = $_GET['id'];

$select_img = "SELECT * FROM banners WHERE id=$id";
$select_img_result = mysqli_query($db_connect, $select_img);
$after_assoc = mysqli_fetch_assoc($select_img_result);
$delete_from = '../uploads/banners/'.$after_assoc['image'];
unlink($delete_from);

$delete_banner = "DELETE FROM banners WHERE id=$id";
$delete_banner_result = mysqli_query($db_connect, $delete_banner);
$_SESSION['delete_user'] = 'Banner Deleted Successfully!';
header('location:banners.php');

?>