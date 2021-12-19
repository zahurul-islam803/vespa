<?php
session_start();
require '../users/db.php';

$title = $_POST['title'];
$description = $_POST['description'];
$name = $_POST['name'];
$designation = $_POST['designation'];

$insert_testimonial = "INSERT INTO testimonials(title, description, name, designation)VALUES('$title', '$description', '$name', '$designation')";
$insert_testimonial_result = mysqli_query($db_connect, $insert_testimonial);

$_SESSION['add_testimonial'] = 'Testimonial Added Successfully!';
header('location:add_testimonial.php');

?>