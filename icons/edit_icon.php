<?php
require '../users/session_check.php';
require '../dashboard_includes/header.php';

require '../users/db.php';


$id = $_GET['id'];
$select_icon = "SELECT * FROM icons WHERE id=$id";
$select_icon_result = mysqli_query($db_connect, $select_icon);
$after_assoc = mysqli_fetch_assoc($select_icon_result);
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
                      <h3 class="text-white">Edit Icon Information</h3>
                  </div>
                  <?php if(isset($_SESSION['update_user'])){ ?>
                    <div class="alert alert-success">
                        <?=$_SESSION['update_user'];?>
                    </div>
                    <?php } unset($_SESSION['update_user']);?>
                  <div class="card-body bg-secondary">
                      <form action="update_icon.php" method="POST">
                                             
                        <div class="mb-3">
                            <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                            <label for="exampleInputEmail1" class="form-label text-white">Icon Name</label>
                            <input value="<?=$after_assoc['icon_name']?>" type="text" name="icon_name" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Icon Class</label>
                            <input value="<?=$after_assoc['icon_class']?>" type="text" name="icon_class" class="form-control">
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Icon Link</label>
                            <input value="<?=$after_assoc['icon_link']?>" type="text" name="icon_link" class="form-control">
                                              
                                              
                         
               
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