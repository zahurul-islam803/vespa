<?php
session_start();
require '../users/db.php';

$title = $_POST['title'];
$description = $_POST['description'];


$uploaded_file = $_FILES['image'];
$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'jpeg', 'png', 'gif', 'webp');
if(in_array($extension, $allowed_extension)){
    if($uploaded_file['size'] <= 5000000){
        $insert_service = "INSERT INTO services(title, description)VALUES('$title', '$description')";
        $insert_service_result = mysqli_query($db_connect, $insert_service);
        $id = mysqli_insert_id($db_connect);
        $file_name = $id.'.'.$extension;
        $new_location = '../uploads/services/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);
        $update_image = "UPDATE services SET image='$file_name' WHERE id=$id";
        $update_image_result = mysqli_query($db_connect, $update_image);

        $_SESSION['success'] = 'Service Added Successfully!';
        header('location:add_service.php');

    }
    else{
    $_SESSION['size'] = 'Maximum File Size 5 MB';
    header('location:add_service.php');
   } 
}

else{
    $_SESSION['invalid_extension'] = 'Image Type Should Be (jpg, jpeg, png, gif, webp)';
    header('location:add_service.php');
}

?>