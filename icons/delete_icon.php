
<?php
session_start();
require '../users/db.php';

$id = $_GET['id'];

$delete_icon = "DELETE FROM icons WHERE id=$id";
$delete_icon_result = mysqli_query($db_connect, $delete_icon);
$_SESSION['delete_user'] = 'Icon Deleted Successfully!';
header('location:icons.php');

?>