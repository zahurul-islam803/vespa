<?php 
session_start();
 require '../dashboard_includes/header.php'; 
 require 'db.php';
 ?>



 <!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
        
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h1>Welcome To Vespa Admin Panel</h1>
         
        </div><!-- sl-page-title -->

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   

<?php if(isset($_SESSION['login_done'])){ ?>
<script>
      Swal.fire({
  position: 'center',
  icon: 'success',
  title: '<?=$_SESSION['login_done'];?>',
  showConfirmButton: false,
  timer: 1500
  })

</script>
  <?php } unset($_SESSION['login_done'])?>

  <?php require '../dashboard_includes/footer.php';  ?>



