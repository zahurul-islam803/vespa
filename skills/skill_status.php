<?php
session_start();
require '../users/db.php';

$id = $_GET['id'];

$select_skills = "SELECT * FROM skills WHERE id=$id";
$select_skills_result = mysqli_query($db_connect, $select_skills);
$after_assoc = mysqli_fetch_assoc($select_skills_result);

if($after_assoc['status'] == 1){
    $update_status = "UPDATE skills SET status=0 WHERE id=$id";
    $update_status_result = mysqli_query($db_connect, $update_status);
    header('location:skills.php');
}
else{

    $count_skills = "SELECT COUNT(*) as total_active FROM skills WHERE status=1";
    $count_skills_result = mysqli_query($db_connect, $count_skills);
    $after_count_assoc = mysqli_fetch_assoc($count_skills_result);
    if($after_count_assoc['total_active'] == 3) {

    $_SESSION['limit'] = 'You can not active more than 3 skills';
    header('location:skills.php');
    }
    else{

        $update_status = "UPDATE skills SET status=1 WHERE id=$id";
        $update_status_result = mysqli_query($db_connect, $update_status);
        header('location:skills.php'); 
    }
     
}
?>