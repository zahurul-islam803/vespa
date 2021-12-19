<?php
require '../users/session_check.php';
require '../dashboard_includes/header.php';

require '../users/db.php';


$id = $_GET['id'];
$select_footer = "SELECT * FROM footers WHERE id=$id";
$select_footer_result = mysqli_query($db_connect, $select_footer);
$after_assoc = mysqli_fetch_assoc($select_footer_result);
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
                      <h3 class="text-white">Edit Footer Information</h3>
                  </div>
                  <?php if(isset($_SESSION['update_user'])){ ?>
                    <div class="alert alert-success">
                        <?=$_SESSION['update_user'];?>
                    </div>
                    <?php } unset($_SESSION['update_user']);?>
                  <div class="card-body bg-secondary">
                      <form action="update_footer.php" method="POST">
                                             
                        <div class="mb-3">
                            <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                            <label for="exampleInputEmail1" class="form-label text-white">Phone</label>
                            <input value="<?=$after_assoc['phone']?>" type="number" name="phone" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Email</label>
                            <input value="<?=$after_assoc['email']?>" type="email" name="email" class="form-control">

                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Author</label>
                            <input value="<?=$after_assoc['author']?>" type="text" name="author" class="form-control">

                          
               
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