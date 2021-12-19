<?php
session_start();
require '../users/db.php';

$id = $_POST['id'];
$skill_name = $_POST['skill_name'];
$percentage = $_POST['percentage'];

      
    $update_skill = "UPDATE skills SET skill_name='$skill_name', percentage='$percentage' WHERE id=$id";
    $update_skill_result = mysqli_query($db_connect, $update_skill);
   
    $_SESSION['update_user'] = 'Skill Updated!';
    header('location:edit_skill.php?id='.$id);
   
  
?>