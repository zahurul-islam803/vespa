<?php 
require '../users/session_check.php';
require '../dashboard_includes/header.php';

 ?>

<?php

require '../users/db.php';

$select_blog = "SELECT * FROM blogs WHERE status=0";
$select_blog_result = mysqli_query($db_connect, $select_blog);

?>

<!-- ########## START: MAIN PANEL ########## -->

<?php if($_SESSION['role'] != 0){ ?>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
      </nav>

      <div class="sl-pagebody">
        
    <div class="row">
        <div class="col-lg-12 m-auto">
            <div class="card">
                <div class="card-header bg-primary text-center">
                    <h3 class="text-white">Blogs Informations</h3>                        
                </div>  
               
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">created_at</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($select_blog_result as $key=>$blog) { ?>
                        <tr>
                            <th scope="row"><?=$key+1?></th>                           
                            <td><?=$blog['title']?></td>
                            <td><?= substr($blog['description'], 0, 10).'..Read More'?></td>
                            <td><?=$blog['created_at']?></td>
                            <td><img width="50" src="../uploads/blogs/<?=$blog['image']?>" alt=""></td>
                          
                                    <td>
                                        <a href="view_blog.php?id=<?=$blog['id']?>" class="btn btn-primary">View<a> 
                                
                                    <?php if($_SESSION['role'] != 3){ ?>
                                        <a href="edit_blog.php?id=<?=$blog['id']?>" class="btn btn-info">Edit</a> 
                                    <?php } ?>

                                    <?php if($_SESSION['role'] == 1){ ?>             
                                       <a id='soft_delete_blog.php?id=<?=$blog['id']?>' class="btn btn-danger click">Delete</a>
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
     <?php if(isset($_SESSION['soft_del'])) {?>
   <script>
         swal.fire(
         'Deleted!',
         'Your file has been deleted.',
         'success'
     )
   </script>
   <?php } unset($_SESSION['soft_del'])?>


   <?php if(isset($_SESSION['limit'])){ ?>
    <script>
        Swal.fire({
  icon: 'warning',
  title: 'Sorry!',
  text: '<?=$_SESSION['limit']?>',
  
})
    </script>
    <?php } unset($_SESSION['limit'])?>
  
           


    
    
   
