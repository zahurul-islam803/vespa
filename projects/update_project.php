<?php
session_start();
require '../users/db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$category = $_POST['category'];
$client = $_POST['client'];
$completion = $_POST['completion'];
$type = $_POST['type'];
$author = $_POST['author'];
$budget = $_POST['budget'];


    if($_FILES['image']['name'] != ''){

      $uploaded_file = $_FILES['image'];
      $after_explode = explode('.', $uploaded_file['name']);
      $extension = end($after_explode);
      $allowed_extension = array('jpg', 'jpeg', 'png', 'webp', 'gif');

      if(in_array($extension, $allowed_extension)){
        if($uploaded_file['size'] < 5000000) {
          $select_img = "SELECT * FROM projects WHERE id=$id";
          $select_img_result = mysqli_query($db_connect, $select_img);
          $after_assoc = mysqli_fetch_assoc($select_img_result);

          $delete_from = '../uploads/projects/'.$after_assoc['image'];
          unlink($delete_from);
      
          $update_project = "UPDATE projects SET title='$title', category='$category', client='$client', completion='$completion', type='$type', author='$author', budget='$budget' WHERE id=$id";
          $update_project_result = mysqli_query($db_connect, $update_project);
      
          $file_name = $id.'.'.$extension;
          $new_location = '../uploads/projects/'.$file_name;
          move_uploaded_file($uploaded_file['tmp_name'], $new_location);
          
          $update_image = "UPDATE projects SET image='$file_name' WHERE id=$id";
          $update_image_result = mysqli_query($db_connect, $update_image);

          $_SESSION['update_user'] = 'Project Updated!';
          header('location:edit_project.php?id='.$id);
        }
      else{
          $_SESSION['file_size'] = 'File Size Too Large!';
          header('location:edit_project.php?id='.$id); 
      }
      }
      else{
          $_SESSION['extension'] = 'Invalid Extension!';
          header('location:edit_project.php?id='.$id);
      }
    }
  
    else{

      $update_project = "UPDATE projects SET title='$title', category='$category', client='$client', completion='$completion', type='$type', author='$author', budget='$budget' WHERE id=$id";
      $update_project_result = mysqli_query($db_connect, $update_project);
      
      $_SESSION['update_user'] = 'Project Updated!';
      header('location:edit_project.php?id='.$id);
    }
  
?>