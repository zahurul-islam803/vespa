<?php
session_start();
require '../users/db.php';


$phone = $_POST['phone'];
$email = $_POST['email'];
$author = $_POST['author'];

$insert_footer = "INSERT INTO footers(phone, email, author)VALUES('$phone', '$email', '$author')";
$insert_footer_result = mysqli_query($db_connect, $insert_footer);

$_SESSION['add_footer'] = 'Footer Added Successfully!';
header('location:add_footer.php');

?>