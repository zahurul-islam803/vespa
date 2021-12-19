<?php 
session_start();
require '../dashboard_includes/header.php';

?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Blogs</a>
      </nav>

      <div class="sl-pagebody">
          <div class="row">
              <div class="col-lg-8 m-auto">
                  <div class="card">
                      <div class="card-header">
                          <h5>Add Blog</h5>
                      </div>

                      <div class="card-body">
                          <form action="blog_post.php" method="POST" enctype="multipart/form-data">
                             
                              <div class="form-group">
                                  <label for="">Title</label>
                                  <input type="text" class="form-control" name="title">
                              </div>
                              <div class="form-group">
                                  <label for="">Description</label>
                                  <textarea name="description" class="form-control"></textarea>
                              </div>
                             
                              <div class="form-group">
                                  <label for="">Image</label>
                                  <input type="file" class="form-control" name="image">
                              </div>
                              
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Add Blog</button>
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


    <?php if(isset($_SESSION['add_blog'])){ ?>
    <script>
        Swal.fire({
  icon: 'success',
  title: 'Congratulations',
  text: '<?=$_SESSION['add_blog']?>',
  
})
    </script>
    <?php } unset($_SESSION['add_blog'])?>