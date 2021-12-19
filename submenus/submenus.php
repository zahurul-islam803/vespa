<?php 
require '../users/session_check.php';
require '../dashboard_includes/header.php';

 ?>

<?php

require '../users/db.php';

$select_submenu = "SELECT * FROM submenus";
$select_submenu_result = mysqli_query($db_connect, $select_submenu);

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
                    <h3 class="text-white">Sub Menu Informations</h3>                        
                </div>  
               
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Menu Name</th>
                        <th scope="col">Sub Menu Name</th>
                        <th scope="col">Sub Menu Link</th>                      
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($select_submenu_result as $key=>$submenu) { $id=$submenu['menu_id']?>
                        <tr>
                            <th scope="row"><?=$key+1?></th>                           
                            <td>
                           <?php 
                           $select_menu = "SELECT * FROM menus WHERE id=$id";
                           $select_menu_result = mysqli_query($db_connect, $select_menu);
                           $after_assoc = mysqli_fetch_assoc($select_menu_result);
                           echo $after_assoc['menu_name'];
                           ?>
                            </td>
                            <td><?=$submenu['submenu_name']?></td>
                            <td><?=$submenu['submenu_link']?></td>
                            
                                    <td>                                      

                                    <?php if($_SESSION['role'] == 1){ ?>             
                                       <a id='delete_submenu.php?id=<?=$submenu['id']?>' class="btn btn-danger click">Delete</a>
                                   <?php } ?>
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


  
  
           


    
    
   
