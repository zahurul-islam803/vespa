
<?php
session_start();
require '../users/db.php';

$id = $_GET['id'];

$delete_footer = "DELETE FROM footers WHERE id=$id";
$delete_footer_result = mysqli_query($db_connect, $delete_footer);
$_SESSION['delete_user'] = 'Footer Deleted Successfully!';
header('location:footer.php');

?>