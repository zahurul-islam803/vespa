
<?php
session_start();
require '../users/db.php';

$id = $_GET['id'];

$delete_skill = "DELETE FROM skills WHERE id=$id";
$delete_skill_result = mysqli_query($db_connect, $delete_skill);
$_SESSION['delete_user'] = 'Skill Deleted Successfully!';
header('location:skills.php');

?>