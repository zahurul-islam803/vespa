<?php
session_start();
require '../users/db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$number = $_POST['number'];


      
      $update_trust = "UPDATE trust SET title='$title', description='$description', number='$number' WHERE id=$id";
      $update_trust_result = mysqli_query($db_connect, $update_trust);
  
      $_SESSION['update_user'] = 'Trust Updated!';
      header('location:edit_trust.php?id='.$id);
       
  
?>