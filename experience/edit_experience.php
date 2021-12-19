<?php
require '../users/session_check.php';
require '../dashboard_includes/header.php';

require '../users/db.php';


$id = $_GET['id'];
$select_experience = "SELECT * FROM experiences WHERE id=$id";
$select_experience_result = mysqli_query($db_connect, $select_experience);
$after_assoc = mysqli_fetch_assoc($select_experience_result);
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
                      <h3 class="text-white">Edit Experience Information</h3>
                  </div>
                  <?php if(isset($_SESSION['update_user'])){ ?>
                    <div class="alert alert-success">
                        <?=$_SESSION['update_user'];?>
                    </div>
                    <?php } unset($_SESSION['update_user']);?>
                  <div class="card-body bg-secondary">
                      <form action="update_experience.php" method="POST">
                                             
                        <div class="mb-3">
                            <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                            <label for="exampleInputEmail1" class="form-label text-white">Company Name</label>
                            <input value="<?=$after_assoc['company_name']?>" type="text" name="company_name" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Duration</label>
                            <input value="<?=$after_assoc['duration']?>" type="date" name="duraton" class="form-control">
                        </div>
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Designation</label>
                            <input value="<?=$after_assoc['designaton']?>" type="text" name="designaton" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Details</label>
                            <textarea name="details" class="form-control"><?=$after_assoc['details']?></textarea>
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