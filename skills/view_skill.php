<?php
require '../users/session_check.php';
require '../dashboard_includes/header.php';

require '../users/db.php';

$id = $_GET['id'];

$select_skill = "SELECT * FROM skills WHERE id=$id";
$select_skill_result = mysqli_query($db_connect, $select_skill);
$after_assoc = mysqli_fetch_assoc($select_skill_result);

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
                         <td>Skill Name</td>
                         <td><?=$after_assoc['skill_name']?></td>
                         </tr>
                                                
                         <tr>
                         <td>Percentage</td>
                        <td><?=$after_assoc['percentage']?></td>
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

