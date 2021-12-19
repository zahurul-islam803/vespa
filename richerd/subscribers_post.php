<?php
require '../users/db.php';


$email = $_POST['email'];


$insert_email = "INSERT INTO subscribers(email)VALUES('$email')";
$insert_email_result = mysqli_query($db_connect, $insert_email);

header('location:index.php');

?>