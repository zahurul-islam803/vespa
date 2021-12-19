<?php 
require '../users/session_check.php';
require '../dashboard_includes/header.php';

 ?>

<?php

require '../users/db.php';

$select_logo = "SELECT * FROM logos";
$select_logo_result = mysqli_query($db_connect, $select_logo);

?>

<!-- ########## START: MAIN PANEL ########## -->

<?php if($_SESSION['role'] != 0){ ?>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
      </nav>

      <div class="sl-pagebody">
        
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card">
                <div class="card-header bg-primary text-center">
                    <h3 class="text-white">Logo Informations</h3>                        
                </div>  
               
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($select_logo_result as $key=>$logo) { ?>
                        <tr>
                            <th scope="row"><?=$key+1?></th>
                            
                            <td>
                                <img width="50" src="../uploads/logos/<?=$logo['logo']?>" alt="">
                            </td>
                            <td>
                              <?php if($logo['status'] == 1) {?>
                                  <a href="logo_status.php?id=<?=$logo['id'];?>" class="btn btn-success">Active</a>
                               <?php } else{?>
                                  <a href="logo_status.php?id=<?=$logo['id'];?>" class="btn btn-secondary">Deactive</a>
                                <?php }?>
                           </td>

                            <td>
                              <a href="delete_logo.php?id=<?=$logo['id']?>" class="btn btn-danger">Delete</a>
                           </td>
                                                                              
                                   
                                </tr>
                                 <?php } ?>
                             </tbody>
                        </table>
                    </div>
                </div>

                <!-- First table end -->

            </div>
        </div>

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <?php } ?>
    <!-- ########## END: MAIN PANEL ########## -->
    <?php require '../dashboard_includes/footer.php'; ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
     $('.click').click(function(){
            Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
         window.location.href=$(this).attr('id');
        }
        })
     });
     </script>
     <?php if(isset($_SESSION['delete_user'])) {?>
   <script>
         swal.fire(
         'Deleted!',
         'Your file has been deleted.',
         'success'
     )
   </script>
   <?php } unset($_SESSION['delete_user'])?>
  
           


    
    
   
