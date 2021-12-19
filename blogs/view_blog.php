<?php
require '../users/session_check.php';
require '../dashboard_includes/header.php';

require '../users/db.php';

$id = $_GET['id'];

$select_blog = "SELECT * FROM blogs WHERE id=$id";
$select_blog_result = mysqli_query($db_connect, $select_blog);
$after_assoc = mysqli_fetch_assoc($select_blog_result);

?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
      </nav>

      <div class="sl-pagebody">

      <div class="row">
      <div class="col-lg-8 m-auto">
          <div class="card">
             <div class="card-header bg-primary text-center">
              <h3 class="text-white">Users Individual Information</h3>
                 </div>
                  <div class="card-body">
                                        
                    <table class="table table-borderd">
                                            
                        <tbody>
                         <tr>
                         <td>Title</td>
                         <td><?=$after_assoc['title']?></td>
                         </tr>
                                                
                         <tr>
                         <td>Description</td>
                        <td><?=$after_assoc['description']?></td>
                          </tr>
                          <tr>
                         <tr>
                         <td>Created_at</td>
                        <td><?=$after_assoc['created_at']?></td>
                          </tr>
                          <tr>
                         <td>Image</td>
                         <td><img width="100" src="../uploads/blogs/<?=$after_assoc['image']?>" alt=""></td>
                          </tr>                
                                           
                        </tbody>
                           </table>
                            </div>
                             </div>
                        </div>
                           <div>                                                      
                        </div>
                        </div>
  <?php require '../dashboard_includes/footer.php'; ?>

