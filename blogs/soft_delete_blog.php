<?php
session_start();
require '../users/db.php';
$id = $_GET['id'];

$update_blog = "UPDATE blogs SET status=1 WHERE id=$id";
$update_blog_result = mysqli_query($db_connect, $update_blog);

$_SESSION['soft_del'] = "Blog Soft Deleted!";
header('location:blog.php');

?>