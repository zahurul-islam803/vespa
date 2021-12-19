<?php
session_start();
require '../users/db.php';

$id = $_POST['id'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$author = $_POST['author'];

      
    $update_footer = "UPDATE footers SET phone='$phone', email='$email', author='$author' WHERE id=$id";
    $update_footer_result = mysqli_query($db_connect, $update_footer);
   
    $_SESSION['update_user'] = 'Footer Updated!';
    header('location:edit_footer.php?id='.$id);
   
  
?>