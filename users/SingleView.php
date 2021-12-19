<?php
session_start();
require '../dashboard_includes/header.php';
require 'db.php';

$id = $_GET['id'];

$get_data = "SELECT * FROM users WHERE id='$id'";
$get_data_result = mysqli_query($db_connect, $get_data);
$after_assoc = mysqli_fetch_assoc($get_data_result);

?>

<div class="sl-mainpanel">


      <div class="sl-pagebody">
        <div class="sl-page-title">
        <div class="card">
               <div class="card-header text-center">
                   <h2>Individual User Information</h2>
               </div>
               <div class="card-body">
               
               <table class="table">
            
                <tbody>
                   <tr>
                       <td>Name: </td>
                       <td><?=$after_assoc['name']?></td>
                      
                   </tr>
                   <tr>
                   <td>Email: </td>
                       <td><?=$after_assoc['email']?></td>
                      
                   </tr>
                   <tr>
                   <td>Profile Image: </td>
                       <td><img width="100" src="../uploads/users/<?=$after_assoc['profile_photo']?>" alt=""></td>
                      
                   </tr>
                   <tr> <td>Created_AT: </td>
                       <td><?=$after_assoc['created_at']?></td></tr>
                
                </tbody>
                </table>
               </div>
           </div>
        </div><!-- sl-page-title -->

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->


    <?php  require "../dashboard_includes/footer.php";?>