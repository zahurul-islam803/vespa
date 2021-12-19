<?php
session_start();
require '../users/db.php';

$menu_id = $_POST['menu_id'];
$submenu_name = $_POST['submenu_name'];
$submenu_link = $_POST['submenu_link'];

$insert_submenu = "INSERT INTO submenus(menu_id, submenu_name, submenu_link)VALUES('$menu_id', '$submenu_name', '$submenu_link')";
$insert_submenu_result = mysqli_query($db_connect, $insert_submenu);

$_SESSION['add_submenu'] = 'Sub Menu Added Successfully!';
header('location:add_submenu.php');

?>