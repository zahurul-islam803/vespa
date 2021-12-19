<?php
session_start();
require '../users/db.php';

$title = $_POST['title'];
$description = $_POST['description'];
$number = $_POST['number'];



        $insert_trust = "INSERT INTO trust(title, description, number)VALUES('$title', '$description', '$number')";
        $insert_trust_result = mysqli_query($db_connect, $insert_trust);

        $_SESSION['success'] = 'Trust Added Successfully!';
        header('location:add_trust.php');

    
?>