<?php 
session_start();
require '../dashboard_includes/header.php';

?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Footer</a>
      </nav>

      <div class="sl-pagebody">
          <div class="row">
              <div class="col-lg-8 m-auto">
                  <div class="card">
                      <div class="card-header">
                          <h5>Add Footer</h5>
                      </div>

                      <div class="card-body">
                          <form action="footer_post.php" method="POST">
                             
                            
                              <div class="form-group">
                                  <label for="">Phone</label>
                                  <input type="number" class="form-control" name="phone">
                              </div>
                              <div class="form-group">
                                  <label for="">Email</label>
                                  <input type="email" class="form-control" name="email">
                              </div>
                              <div class="form-group">
                                  <label for="">Author</label>
                                  <input type="text" class="form-control" name="author">
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Add Footer</button>
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


    <?php if(isset($_SESSION['add_footer'])){ ?>
    <script>
        Swal.fire({
  icon: 'success',
  title: 'Congratulations',
  text: '<?=$_SESSION['add_footer']?>',
  
})
    </script>
    <?php } unset($_SESSION['add_footer'])?>