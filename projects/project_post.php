<?php
session_start();
require '../users/db.php';

$title = $_POST['title'];
$category = $_POST['category'];
$client = $_POST['client'];
$completion = $_POST['completion'];
$type = $_POST['type'];
$author = $_POST['author'];
$budget = $_POST['budget'];

$uploaded_file = $_FILES['image'];
$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'jpeg', 'png', 'gif', 'webp');
if(in_array($extension, $allowed_extension)){
    if($uploaded_file['size'] <= 5000000){
        $insert_project = "INSERT INTO projects(title, category, client, completion, type, author, budget)VALUES('$title', '$category', '$client', '$completion', '$type', '$author', '$budget')";
        $insert_project_result = mysqli_query($db_connect, $insert_project);
        $id = mysqli_insert_id($db_connect);
        $file_name = $id.'.'.$extension;
        $new_location = '../uploads/projects/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);
        $update_image = "UPDATE projects SET image='$file_name' WHERE id=$id";
        $update_image_result = mysqli_query($db_connect, $update_image);

        $_SESSION['success'] = 'Project Added Successfully!';
        header('location:add_project.php');

    }
    else{
    $_SESSION['size'] = 'Maximum File Size 5 MB';
    header('location:add_project.php');
   } 
}

else{
    $_SESSION['invalid_extension'] = 'Image Type Should Be (jpg, jpeg, png, gif, webp)';
    header('location:add_project.php');
}

?>