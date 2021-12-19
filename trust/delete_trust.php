
<?php
session_start();
require '../users/db.php';

$id = $_GET['id'];

$delete_trust = "DELETE FROM trust WHERE id=$id";
$delete_trust_result = mysqli_query($db_connect, $delete_trust);
$_SESSION['delete_user'] = 'Trust Deleted Successfully!';
header('location:trust.php');

?>