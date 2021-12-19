<?php 
session_start();
require '../dashboard_includes/header.php';

?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Icons</a>
      </nav>

      <div class="sl-pagebody">
          <div class="row">
              <div class="col-lg-8 m-auto">
                  <div class="card">
                      <div class="card-header">
                          <h5>Add Icon</h5>
                      </div>

                      <div class="card-body">
                          <form action="icon_post.php" method="POST">
                             
                              <div class="form-group">
                                  <label for="">Icon Name</label>
                                  <input type="text" class="form-control" name="icon_name">
                              </div>
                              <div class="form-group">
                                  <label for="">Icon Class</label>
                                  <input type="text" class="form-control" name="icon_class">
                              </div>
                              <div class="form-group">
                                  <label for="">Icon Link</label>
                                  <input type="text" class="form-control" name="icon_link">
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Add Icon</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
 </div>
</div>

<?php 
require '../dashboard_includes/footer.php';

?>


    <?php if(isset($_SESSION['add_icon'])){ ?>
    <script>
        Swal.fire({
  icon: 'success',
  title: 'Congratulations',
  text: '<?=$_SESSION['add_icon']?>',
  
})
    </script>
    <?php } unset($_SESSION['add_icon'])?>