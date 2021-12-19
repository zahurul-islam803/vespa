<?php
require '../users/session_check.php';
require '../dashboard_includes/header.php';

require '../users/db.php';


$id = $_GET['id'];
$select_testimonial = "SELECT * FROM testimonials WHERE id=$id";
$select_testimonial_result = mysqli_query($db_connect, $select_testimonial);
$after_assoc = mysqli_fetch_assoc($select_testimonial_result);
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
                      <h3 class="text-white">Edit Testimonial Information</h3>
                  </div>
                  <?php if(isset($_SESSION['update_user'])){ ?>
                    <div class="alert alert-success">
                        <?=$_SESSION['update_user'];?>
                    </div>
                    <?php } unset($_SESSION['update_user']);?>
                  <div class="card-body bg-secondary">
                      <form action="update_testimonial.php" method="POST">
                                             
                        <div class="mb-3">
                            <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                            <label for="exampleInputEmail1" class="form-label text-white">Testimonial Title</label>
                            <input value="<?=$after_assoc['title']?>" type="text" name="title" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Testimonial Description</label> <br>
                            <textarea name="description" class="form-control"><?=substr($after_assoc['description'], 0, 100)?></textarea>

                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Testimonial Name</label>
                            <input value="<?=$after_assoc['name']?>" type="text" name="name" class="form-control">
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Testimonial Designation</label>
                            <input value="<?=$after_assoc['designation']?>" type="text" name="designation" class="form-control">
                                              
                                              
                         
               
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