<?php
session_start();
require '../users/db.php';

$id = $_POST['id'];
$icon_name = $_POST['icon_name'];
$icon_class = $_POST['icon_class'];
$icon_link = $_POST['icon_link'];

      
    $update_icon = "UPDATE icons SET icon_name='$icon_name', icon_class='$icon_class', icon_link='$icon_link' WHERE id=$id";
    $update_icon_result = mysqli_query($db_connect, $update_icon);
   
    $_SESSION['update_user'] = 'Icon Updated!';
    header('location:edit_icon.php?id='.$id);
   
  
?>