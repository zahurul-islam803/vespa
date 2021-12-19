<?php
session_start();
require '../users/db.php';
$id = $_GET['id'];

$update_trust = "UPDATE trust SET status=0 WHERE id=$id";
$update_trust_result = mysqli_query($db_connect, $update_trust);

$_SESSION['restore'] = "Trust Restored Successfully!";
header('location:trust.php');

?>