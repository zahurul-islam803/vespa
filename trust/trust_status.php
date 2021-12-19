<?php
require '../users/db.php';

$id = $_GET['id'];

$select_trust = "SELECT * FROM trust WHERE id=$id";
$select_trust_result = mysqli_query($db_connect, $select_trust);
$after_assoc = mysqli_fetch_assoc($select_trust_result);

if($after_assoc['status'] == 1){
    $update_status = "UPDATE trust SET status=0 WHERE id=$id";
    $update_status_result = mysqli_query($db_connect, $update_status);
    header('location:trust.php');
}
else{
    $update_status1 = "UPDATE trust SET status=0";
    $update_status_result1 = mysqli_query($db_connect, $update_status1);

    $update_status = "UPDATE trust SET status=1 WHERE id=$id";
    $update_status_result = mysqli_query($db_connect, $update_status);
    header('location:trust.php');  
}
?>