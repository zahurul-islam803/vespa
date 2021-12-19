<?php 
session_start();
require '../dashboard_includes/header.php';

require '../users/db.php';

$select_menu = "SELECT * FROM menus";
$select_menu_result = mysqli_query($db_connect, $select_menu);

?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Submenus</a>
      </nav>

      <div class="sl-pagebody">
          <div class="row">
              <div class="col-lg-8 m-auto">
                  <div class="card">
                      <div class="card-header">
                          <h5>Add Submenu</h5>
                      </div>

                      <div class="card-body">
                          <form action="submenu_post.php" method="POST">
                             
                              <div class="form-group">
                                 <select name="menu_id" class="form-control">
                                     <option value="">-- Select Menu --</option>
                                      <?php foreach($select_menu_result as $menu) { ?>
                                     <option value="<?=$menu['id']?>"><?=$menu['menu_name']?></option>
                                     <?php } ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                  <label for="">Submenu Name</label>
                                  <input type="text" class="form-control" name="submenu_name">
                              </div>
                              <div class="form-group">
                                  <label for="">Submenu Link</label>
                                  <input type="text" class="form-control" name="submenu_link">
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Add Submenu</button>
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


    <?php if(isset($_SESSION['add_submenu'])){ ?>
    <script>
        Swal.fire({
  icon: 'success',
  title: 'Congratulations',
  text: '<?=$_SESSION['add_submenu']?>',
  
})
    </script>
    <?php } unset($_SESSION['add_submenu'])?>