<?php 
session_start();
require '../dashboard_includes/header.php';

?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Skills</a>
      </nav>

      <div class="sl-pagebody">
          <div class="row">
              <div class="col-lg-8 m-auto">
                  <div class="card">
                      <div class="card-header">
                          <h5>Add Skill</h5>
                      </div>

                      <div class="card-body">
                          <form action="skill_post.php" method="POST">
                             
                              <div class="form-group">
                                  <label for="">Skill Name</label>
                                  <input type="text" class="form-control" name="skill_name">
                              </div>
                              <div class="form-group">
                                  <label for="">Skill Percentage</label>
                                  <input type="text" class="form-control" name="percentage">
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Add Skill</button>
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


    <?php if(isset($_SESSION['add_skill'])){ ?>
    <script>
        Swal.fire({
  icon: 'success',
  title: 'Congratulations',
  text: '<?=$_SESSION['add_skill']?>',
  
})
    </script>
    <?php } unset($_SESSION['add_skill'])?>