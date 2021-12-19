
<?php
session_start();
require '../users/db.php';

$id = $_GET['id'];

$delete_submenu = "DELETE FROM submenus WHERE id=$id";
$delete_submenu_result = mysqli_query($db_connect, $delete_submenu);
$_SESSION['delete_user'] = 'Submenu Deleted Successfully!';
header('location:submenus.php');

?>