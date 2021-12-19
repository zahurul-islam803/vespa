
<?php
session_start();
require '../users/db.php';

$id = $_GET['id'];

$delete_menu = "DELETE FROM menus WHERE id=$id";
$delete_menu_result = mysqli_query($db_connect, $delete_menu);
$_SESSION['delete_user'] = 'Menu Deleted Successfully!';
header('location:menus.php');

?>