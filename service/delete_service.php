
<?php
session_start();
require '../users/db.php';

$id = $_GET['id'];

$select_img = "SELECT * FROM services WHERE id=$id";
$select_img_result = mysqli_query($db_connect, $select_img);
$after_assoc = mysqli_fetch_assoc($select_img_result);
$delete_from = '../uploads/services/'.$after_assoc['image'];
unlink($delete_from);

$delete_service = "DELETE FROM services WHERE id=$id";
$delete_service_result = mysqli_query($db_connect, $delete_service);
$_SESSION['delete_user'] = 'Service Deleted Successfully!';
header('location:service.php');

?>