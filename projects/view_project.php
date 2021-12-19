<?php
require '../users/session_check.php';
require '../dashboard_includes/header.php';

require '../users/db.php';

$id = $_GET['id'];

$select_project = "SELECT * FROM projects WHERE id=$id";
$select_project_result = mysqli_query($db_connect, $select_project);
$after_assoc = mysqli_fetch_assoc($select_project_result);

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
                         <td>Category</td>
                        <td><?=$after_assoc['category']?></td>
                          </tr>
                          
                          <tr>
                         <td>Client</td>
                        <td><?=$after_assoc['client']?></td>
                          </tr>
                          
                          <tr>
                         <td>Completion</td>
                        <td><?=$after_assoc['completion']?></td>
                          </tr>
                          
                          <tr>
                         <td>Type</td>
                        <td><?=$after_assoc['type']?></td>
                          </tr>
                          
                          <tr>
                         <td>Author</td>
                        <td><?=$after_assoc['author']?></td>
                          </tr>
                          <tr>
                         <td>Budget</td>
                        <td>$<?=$after_assoc['budget']?></td>
                          </tr>

                          <tr>
                         <td>Profile Photo</td>
                         <td><img width="100" src="../uploads/projects/<?=$after_assoc['image']?>" alt=""></td>
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

