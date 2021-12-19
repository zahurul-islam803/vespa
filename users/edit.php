<?php
require 'session_check.php';
require '../dashboard_includes/header.php';

require 'db.php';


$id = $_GET['id'];
$select_user = "SELECT * FROM users WHERE id=$id";
$select_user_result = mysqli_query($db_connect, $select_user);
$after_assoc = mysqli_fetch_assoc($select_user_result);
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
                      <h3 class="text-white">Edit User Information</h3>
                  </div>
                  <?php if(isset($_SESSION['update_user'])){ ?>
                    <div class="alert alert-success">
                        <?=$_SESSION['update_user'];?>
                    </div>
                    <?php } unset($_SESSION['update_user']);?>
                  <div class="card-body bg-secondary">
                      <form action="update.php" method="POST" enctype="multipart/form-data">
                                             
                        <div class="mb-3">
                            <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                            <label for="exampleInputEmail1" class="form-label text-white">Name</label>
                            <input value="<?=$after_assoc['name']?>" type="text" name="name" class="form-control">
                            
                            </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Email</label>
                            <input value="<?=$after_assoc['email']?>" type="email" name="email" class="form-control">
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Password</label>
                            <input type="password" name="password" class="form-control">
                         </div>
                         <div class="mb-3">
                           <img class="w-20" src="../uploads/users/<?=$after_assoc['profile_photo']?>" alt="">
                         </div>
                         <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Profile Photo</label>
                            <input type="file" name="profile_photo" class="form-control">
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
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Country</label>
                            <select name="country" class="form-control">
                                <option value="">-- Select Your Country --</option>
                                <option value="Bangladesh" <?=($after_assoc['country'] == 'Bangladesh'? 'selected':'')?>>Bangladesh</option>
                                 <option value="USA" <?=($after_assoc['country'] == 'USA'? 'selected':'')?>>USA</option>
                                 <option value="Canada" <?=($after_assoc['country'] == 'Canada'? 'selected':'')?>>Canada</option>
                                 <option value="Finland" <?=($after_assoc['country'] == 'Finland'? 'selected':'')?>>Finland</option>
                            </select>
                            </div>
                           <div align="center" class="mt-2">
                             <button type="submit" class="btn btn-primary">Submit</button>
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