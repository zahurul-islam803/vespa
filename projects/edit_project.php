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
                      <h3 class="text-white">Edit Project Information</h3>
                  </div>
                  <?php if(isset($_SESSION['update_user'])){ ?>
                    <div class="alert alert-success">
                        <?=$_SESSION['update_user'];?>
                    </div>
                    <?php } unset($_SESSION['update_user']);?>
                  <div class="card-body bg-secondary">
                      <form action="update_projects.php" method="POST" enctype="multipart/form-data">
                                             
                        <div class="mb-3">
                            <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                            <label for="exampleInputEmail1" class="form-label text-white">PROJECT TITLE</label>
                            <input value="<?=$after_assoc['title']?>" type="text" name="title" class="form-control">
                            </div>

                      

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">CATEGORY</label>
                            <input value="<?=$after_assoc['category']?>" type="text" name="category" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">CLIENT</label>
                            <input value="<?=$after_assoc['client']?>" type="text" name="client" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">COMPLETION</label>
                            <input value="<?=$after_assoc['completion']?>" type="date" name="completion" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">PROJECT TYPE</label>
                            <input value="<?=$after_assoc['type']?>" type="text" name="type" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">AUTHOR</label>
                            <input value="<?=$after_assoc['author']?>" type="text" name="author" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">BUDGET</label>
                            <input value="$<?=$after_assoc['budget']?>" type="text" name="budget" class="form-control">
                        </div>

                         <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label text-white">Present Image</label>
                         <br>
                           <img width="100" src="../uploads/projects/<?=$after_assoc['image']?>" alt="">
                         </div>

                         <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Image</label>
                            <input type="file" name="image" class="form-control">
                         </div>
                         <?php if(isset($_SESSION['extension'])){ ?>
                    <div class="alert alert-warning">
                        <?=$_SESSION['extension'];?>
                    </div>
                    <?php } unset($_SESSION['extension']);?>

                    <?php if(isset($_SESSION['file_size'])){ ?>
                    <div class="alert alert-warning">
                        <?=$_SESSION['file_size'];?>
                    </div>
                    <?php } unset($_SESSION['file_size']);?>
               
                           <div align="center" class="mt-2">
                             <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                      </form>
                  </div>
                  <form> 
              </div>
            </div>
        </div>
      </div>
    </div>
<?php require '../dashboard_includes/footer.php'; ?>