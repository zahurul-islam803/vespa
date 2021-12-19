<?php

require '../users/db.php';


$select_user = "SELECT id FROM users WHERE status=0";
$select_user_result = mysqli_query($db_connect, $select_user);



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="../dashboard_assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../dashboard_assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../dashboard_assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="../dashboard_assets/css/starlight.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="../users/admin.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Home</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="../users/inbox.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-envelope-o" style="font-size:18px;"></i>
            <span class="menu-item-label">Inbox</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="../users/subscriber.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-bell-o" style="font-size:18px;"></i>
            <span class="menu-item-label">Subscriber</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="../users/register.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-user-o" style="font-size:18px;"></i>
            <span class="menu-item-label">Add User</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <?php if($_SESSION['role'] !=0) {?>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-user-o" style="font-size:18px;"></i>
            <span class="menu-item-label">Users</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="../users/users.php" class="nav-link">User Info</a></li>
          <?php if($_SESSION['role'] !=0 && $_SESSION['role'] !=3) {?>
          <li class="nav-item"><a href="../users/trash.php" class="nav-link">Trash</a></li>
          <?php } ?>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-grav" style="font-size:18px;"></i>
            <span class="menu-item-label">Logo</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="../logo/add_logo.php" class="nav-link">Add Logo</a></li>
          <?php if($_SESSION['role'] !=0 && $_SESSION['role'] !=3) {?>
          <li class="nav-item"><a href="../logo/logo.php" class="nav-link">Logo Info</a></li>
          <?php } ?>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-bandcamp" style="font-size:18px;"></i>
            <span class="menu-item-label">Banner</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="../banners/banners.php" class="nav-link">Banner Info</a></li>
          <?php if($_SESSION['role'] !=0 && $_SESSION['role'] !=3) {?>
          <li class="nav-item"><a href="../banners/add_banner.php" class="nav-link">Add Banner</a></li>
          <li class="nav-item"><a href="../banners/trash_banner.php" class="nav-link">Trash</a></li>
          <?php } ?>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-bandcamp" style="font-size:18px;"></i>
            <span class="menu-item-label">Trust</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="../trust/trust.php" class="nav-link">Trust Info</a></li>
          <?php if($_SESSION['role'] !=0 && $_SESSION['role'] !=3) {?>
          <li class="nav-item"><a href="../trust/add_trust.php" class="nav-link">Add Trust</a></li>
          <li class="nav-item"><a href="../trust/trash_trust.php" class="nav-link">Trash</a></li>
          <?php } ?>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-bandcamp" style="font-size:18px;"></i>
            <span class="menu-item-label">Skills</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="../skills/skills.php" class="nav-link">Skill Info</a></li>
          <?php if($_SESSION['role'] !=0 && $_SESSION['role'] !=3) {?>
          <li class="nav-item"><a href="../skills/add_skill.php" class="nav-link">Add Skill</a></li>
         
          <?php } ?>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-bandcamp" style="font-size:18px;"></i>
            <span class="menu-item-label">Service</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="../service/service.php" class="nav-link">Service Info</a></li>
          <?php if($_SESSION['role'] !=0 && $_SESSION['role'] !=3) {?>
          <li class="nav-item"><a href="../service/add_service.php" class="nav-link">Add Service</a></li>
          <li class="nav-item"><a href="../service/trash_service.php" class="nav-link">Trash</a></li>
          <?php } ?>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-bandcamp" style="font-size:18px;"></i>
            <span class="menu-item-label">Experiences</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="../experience/experience.php" class="nav-link">Experience Info</a></li>
          <?php if($_SESSION['role'] !=0 && $_SESSION['role'] !=3) {?>
          <li class="nav-item"><a href="../experience/add_experience.php" class="nav-link">Add Experience</a></li>
          <li class="nav-item"><a href="../experience/trash_experience.php" class="nav-link">Trash</a></li>
          <?php } ?>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-bandcamp" style="font-size:18px;"></i>
            <span class="menu-item-label">Projects</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="../projects/projects.php" class="nav-link">Project Info</a></li>
          <?php if($_SESSION['role'] !=0 && $_SESSION['role'] !=3) {?>
          <li class="nav-item"><a href="../projects/add_project.php" class="nav-link">Add Project</a></li>
          <li class="nav-item"><a href="../projects/trash_project.php" class="nav-link">Trash</a></li>
          <?php } ?>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-bandcamp" style="font-size:18px;"></i>
            <span class="menu-item-label">Testimonials</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="../testimonials/testimonials.php" class="nav-link">Testimonial Info</a></li>
          <?php if($_SESSION['role'] !=0 && $_SESSION['role'] !=3) {?>
                   
          <li class="nav-item"><a href="../testimonials/add_testimonial.php" class="nav-link">Add Testimonial</a></li>
          <?php } ?>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-bandcamp" style="font-size:18px;"></i>
            <span class="menu-item-label">Blogs</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="../blogs/blog.php" class="nav-link">Blog Info</a></li>
          <?php if($_SESSION['role'] !=0 && $_SESSION['role'] !=3) {?>
          <li class="nav-item"><a href="../blogs/add_blog.php" class="nav-link">Add Blog</a></li>
          <li class="nav-item"><a href="../blogs/trash_blog.php" class="nav-link">Trash</a></li>
          <?php } ?>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Menus</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="../menus/menus.php" class="nav-link">Menu Info</a></li>
          <li class="nav-item"><a href="../submenus/submenus.php" class="nav-link">Submenu Info</a></li>
          <?php if($_SESSION['role'] !=0 && $_SESSION['role'] !=3) {?>
          <li class="nav-item"><a href="../menus/add_menu.php" class="nav-link">Add Menu</a></li>
          <li class="nav-item"><a href="../submenus/add_submenu.php" class="nav-link">Add Submenu</a></li>
          <?php } ?>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Social Icons</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="../icons/icons.php" class="nav-link">Icon Info</a></li>
          
          <?php if($_SESSION['role'] !=0 && $_SESSION['role'] !=3) {?>
          <li class="nav-item"><a href="../icons/add_icon.php" class="nav-link">Add Icon</a></li>
          
          <?php } ?>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Partners</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="../partners/partners.php" class="nav-link">Partner Info</a></li>
          
          <?php if($_SESSION['role'] !=0 && $_SESSION['role'] !=3) {?>
          <li class="nav-item"><a href="../partners/add_partner.php" class="nav-link">Add Partner</a></li>
          
          <?php } ?>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Footer</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="../footers/footer.php" class="nav-link">Footer Info</a></li>
          <?php if($_SESSION['role'] !=0 && $_SESSION['role'] !=3) {?>
          <li class="nav-item"><a href="../footers/add_footer.php" class="nav-link">Add Footer</a></li>         
          <?php } ?>
        </ul>

       
        
      </div>
      <?php } ?>
      <!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name"><?=$_SESSION['name']?></span>
              <img src="../uploads/users/<?=$_SESSION['profile_photo']?>" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">

              
                     <li><a href="../users/edit.php?id=<?=$_SESSION['login_id']?>"><i class="icon ion-ios-person-outline"></i>Edit Profile</a></li>
                 
                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                <li><a href="../users/logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
      <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
        </li>
      </ul><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="../dashboard_assets/img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="../dashboard_assets/img/img4.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                  <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="../dashboard_assets/img/img7.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                  <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="../dashboard_assets/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                  <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                  <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="../dashboard_assets/img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
          <div class="pd-15">
            <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
          </div>
        </div><!-- #messages -->

        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../dashboard_assets/img/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                  <span class="tx-12">October 03, 2017 8:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../dashboard_assets/img/img9.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                  <span class="tx-12">October 02, 2017 12:44am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../dashboard_assets/img/img10.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">October 01, 2017 10:20pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../dashboard_assets/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">October 01, 2017 6:08pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../dashboard_assets/img/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 12 others in a post.</p>
                  <span class="tx-12">September 27, 2017 6:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../dashboard_assets/img/img10.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">September 28, 2017 11:30pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../dashboard_assets/img/img9.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Great Pyramid</strong></p>
                  <span class="tx-12">September 26, 2017 11:01am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../dashboard_assets/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">September 23, 2017 9:19pm</span>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
        </div><!-- #notifications -->

      </div><!-- tab-content -->
    </div><!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->