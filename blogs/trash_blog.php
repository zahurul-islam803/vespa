
<?php
require '../users/session_check.php';
require '../dashboard_includes/header.php';

require '../users/db.php';

$select_trash_blog = "SELECT * FROM blogs WHERE status=1";
$select_trash_blog_result = mysqli_query($db_connect, $select_trash_blog);
?>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
      </nav>

      <div class="sl-pagebody">

        <div class="row">
            <div class="col-lg-10 m-auto">
               
                <div class="card mt-5">
                    <div class="card-header bg-secondary text-center">
                        <h3 class="text-white">Trash
                     </h3>                        
                    </div>                  
                <?php if(isset($_SESSION['delete_user'])){ ?>
                    <div class="alert alert-success mt-2">
                        <?=$_SESSION['delete_user']?>
                    </div>
                    <?php } unset($_SESSION['delete_user'])?>
                    
                <?php if(isset($_SESSION['restore'])){ ?>
                    <div class="alert alert-success mt-2">
                        <?=$_SESSION['restore']?>
                    </div>
                    <?php } unset($_SESSION['restore'])?>
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
                                 <?php foreach($select_trash_blog_result as $key=>$trash_blog) { ?>
                                 <tr>
                                     <th scope="row"><?=$key+1?></th>
                                     <td><?=$trash_blog['title']?></td>
                                     <td><?= substr($trash_blog['description'], 0, 20)?></td>
                                     <td><?=$trash_blog['created_at']?></td>
                                     <td><img width="50" src="../uploads/blogs/<?=$trash_blog['image']?>" alt=""></td>
                                     <td>
                                                          
                                    <a href="restore_blog.php?id=<?=$trash_blog['id']?>" class="btn btn-info">Restore</a>              
                                    <a data-bs-toggle="modal" data-bs-target="#mod<?=$trash_blog['id']?>" class="btn btn-danger">Delete</a>
                                 </td> 
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="mod<?=$trash_blog['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Are You Sure?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <a  href="delete_blog.php?id=<?=$trash_blog['id']?>" class="btn btn-danger">Yes Delete</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                 <?php } ?>
                             </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require '../dashboard_includes/footer.php'; ?>