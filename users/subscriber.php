<?php 
session_start();
require '../dashboard_includes/header.php';
require 'db.php';

$select_subscriber = "SELECT * FROM subscribers";
$select_subscriber_result = mysqli_query($db_connect, $select_subscriber);
?>

<!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
        
      </nav>

      <div class="sl-pagebody">
        <div class="card">
            <div class="card-header">
                <h3>Subscriber</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                  <tr>
                      <th>SL</th>
                      
                      <th>Email</th>
                      
                      <th>Action</th>
                  </tr>
                  <?php foreach($select_subscriber_result as $key=>$subscriber){ ?>
                  <tr>
                      <td><?=$key+1?></td>
                      
                      <td><?=$subscriber['email']?></td>
                      
                      <td>
                          <a href="#" class="btn btn-danger">Delete</a>
                      </td>
                  </tr>
                  <?php } ?>
                </table>
            </div>
        </div>
         
        </div><!-- sl-page-title -->

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


<?php 
require '../dashboard_includes/footer.php'; 
?>