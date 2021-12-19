
<?php
session_start();
require '../users/db.php';

$id = $_GET['id'];

$delete_testimonial = "DELETE FROM testimonials WHERE id=$id";
$delete_testimonial_result = mysqli_query($db_connect, $delete_testimonial);
$_SESSION['delete_user'] = 'Testimonial Deleted Successfully!';
header('location:testimonials.php');

?>