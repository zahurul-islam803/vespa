<?php
session_start();
require '../users/db.php';

$id = $_POST['id'];
$company_name = $_POST['company_name'];
$duration = $_POST['duration'];
$designaton = $_POST['designaton'];
$details = $_POST['details'];



   
      
    $update_experience = "UPDATE experiences SET company_name='$company_name', duration='$duration', designaton='$designaton', details='$details' WHERE id=$id";
    $update_experience_result = mysqli_query($db_connect, $update_experience);
   
    $_SESSION['update_user'] = 'Experience Updated!';
    header('location:edit_experience.php?id='.$id);
   
  
?>