<?php 
require 'session_check.php';
require '../dashboard_includes/header.php';

?>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
      </nav>

      <div class="sl-pagebody">
  

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">starlight <span class="tx-info tx-normal">admin</span></div>
        <div class="tx-center mg-b-60">Professional Admin Template Design</div>

               <?php if(isset($_SESSION['success'])){ ?>
                    <div class="alert alert-success">
                        <?=$_SESSION['success']?>
                    </div>
                    <?php } unset($_SESSION['success'])?>
                    
                <?php if(isset($_SESSION['email_exist'])){ ?>
                    <div class="alert alert-success mt-2">
                        <?=$_SESSION['email_exist']?>
                    </div>
                    <?php } unset($_SESSION['email_exist'])?>

     <form action="post.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <input type="text" name="name" class="form-control" placeholder="Enter your Fullname">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Enter your Email">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Enter your Password">
        </div><!-- form-group -->
       
        <div class="form-group">
          <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Country</label>
          <div class="row row-xs">
              <select class="form-control" name="country" data-placeholder="Month">
                <option value="">Select Country</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="USA">USA</option>
                <option value="Canada">Canada</option>
                <option value="Finland">Finland</option>
              </select>
          </div>
         </div>
          <div class="form-group">
          <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Role</label>
          <div class="row row-xs">
              <select class="form-control" name="role" data-placeholder="Month">
                <option value="">Select Role</option>
                <option value="1">Admin</option>
                <option value="2">Moderator</option>
                <option value="3">Viewer</option>
                <option value="0">Gorib</option>
              </select>
          </div>
        </div>
        <div class="form-group">
          <input type="file" name="profile_image" class="form-control">
        </div><!-- form-group -->

        <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>
    </form>
        <div class="mg-t-40 tx-center">Already have an account? <a href="login.php" class="tx-info">Sign In</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->
    </div>
</div>


 <?php require '../dashboard_includes/footer.php'; ?>

<?php 
// unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['password']);
?>