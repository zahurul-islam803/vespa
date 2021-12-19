<?php
session_start();
require '../users/db.php';

$company_name = $_POST['company_name'];
$duration = $_POST['duration'];
$designaton = $_POST['designaton'];
$details = $_POST['details'];

$insert_experience = "INSERT INTO experiences(company_name, duration, designaton, details)VALUES('$company_name', '$duration', '$designaton', '$details')";
$insert_experience_result = mysqli_query($db_connect, $insert_experience);

$_SESSION['add_experience'] = 'Experience Added Successfully!';
header('location:add_experience.php');

?>