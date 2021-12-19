<?php
session_start();
require '../users/db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$name = $_POST['name'];
$designation = $_POST['designation'];

      
    $update_testimonial = "UPDATE testimonials SET title='$title', description='$description', name='$name', designation='$designation' WHERE id=$id";
    $update_testimonial_result = mysqli_query($db_connect, $update_testimonial);
   
    $_SESSION['update_user'] = 'Testimonial Updated!';
    header('location:edit_testimonial.php?id='.$id);
   
  
?>