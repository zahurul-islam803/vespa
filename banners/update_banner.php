<?php
session_start();
require '../users/db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$btn = $_POST['btn'];


    if($_FILES['image']['name'] != ''){

      $uploaded_file = $_FILES['image'];
      $after_explode = explode('.', $uploaded_file['name']);
      $extension = end($after_explode);
      $allowed_extension = array('jpg', 'jpeg', 'png', 'webp', 'gif');

      if(in_array($extension, $allowed_extension)){
        if($uploaded_file['size'] < 5000000) {
          $select_img = "SELECT * FROM banners WHERE id=$id";
          $select_img_result = mysqli_query($db_connect, $select_img);
          $after_assoc = mysqli_fetch_assoc($select_img_result);

          $delete_from = '../uploads/banners/'.$after_assoc['image'];
          unlink($delete_from);
      
          $update_banner = "UPDATE banners SET title='$title', description='$description', btn='$btn' WHERE id=$id";
          $update_banner_result = mysqli_query($db_connect, $update_banner);
      
          $file_name = $id.'.'.$extension;
          $new_location = '../uploads/banners/'.$file_name;
          move_uploaded_file($uploaded_file['tmp_name'], $new_location);
          
          $update_image = "UPDATE banners SET image='$file_name' WHERE id=$id";
          $update_image_result = mysqli_query($db_connect, $update_image);

          $_SESSION['update_user'] = 'Banner Updated!';
          header('location:edit_banner.php?id='.$id);
        }
      else{
          $_SESSION['file_size'] = 'File Size Too Large!';
          header('location:edit_banner.php?id='.$id); 
      }
      }
      else{
          $_SESSION['extension'] = 'Invalid Extension!';
          header('location:edit_banner.php?id='.$id);
      }
    }
  
    else{

      $update_banner = "UPDATE banners SET title='$title', description='$description', btn='$btn' WHERE id=$id";
      $update_banner_result = mysqli_query($db_connect, $update_banner);
      
      $_SESSION['update_user'] = 'Banner Updated!';
      header('location:edit_banner.php?id='.$id);
    }
  
?>