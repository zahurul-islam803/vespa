<?php
require '../users/session_check.php';
require '../dashboard_includes/header.php';

require '../users/db.php';


$id = $_GET['id'];
$select_banner = "SELECT * FROM banners WHERE id=$id";
$select_banner_result = mysqli_query($db_connect, $select_banner);
$after_assoc = mysqli_fetch_assoc($select_banner_result);
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
                      <h3 class="text-white">Edit Banner Information</h3>
                  </div>
                  <?php if(isset($_SESSION['update_user'])){ ?>
                    <div class="alert alert-success">
                        <?=$_SESSION['update_user'];?>
                    </div>
                    <?php } unset($_SESSION['update_user']);?>
                  <div class="card-body bg-secondary">
                      <form action="update_banner.php" method="POST" enctype="multipart/form-data">
                                             
                        <div class="mb-3">
                            <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                            <label for="exampleInputEmail1" class="form-label text-white">Title</label>
                            <input value="<?=$after_assoc['title']?>" type="text" name="title" class="form-control">
                            </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Description</label>
                            <textarea name="description" class="form-control"><?=$after_assoc['description']?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Btn</label>
                            <input value="<?=$after_assoc['btn']?>" type="text" name="btn" class="form-control">
                        </div>

                         <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label text-white">Present Image</label>
                         <br>
                           <img width="100" src="../uploads/banners/<?=$after_assoc['image']?>" alt="">
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