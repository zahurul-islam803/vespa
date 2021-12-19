
<?php
session_start();
require '../users/db.php';

$id = $_GET['id'];

$delete_experience = "DELETE FROM experiences WHERE id=$id";
$delete_experience_result = mysqli_query($db_connect, $delete_experience);
$_SESSION['delete_user'] = 'Experience Deleted Successfully!';
header('location:experience.php');

?>