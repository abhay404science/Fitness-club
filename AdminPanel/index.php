<?php 
session_start();
require("../component/comon.php");


if (!isset($_SESSION['email']) || $_SESSION['email'] != 'anirudhadmin@gmail.com') {
  header('location: ../AdminLogin.php');
}

#$sql = "SELECT name, email FROM users WHERE email = '{$_SESSION['email']}'";
$sql = "
    SELECT COUNT(*) AS item_count FROM items;
    SELECT COUNT(*) AS user_count FROM users;
    SELECT COUNT(*) AS news_count FROM newletter;
    SELECT * FROM users WHERE email = '{$_SESSION['email']}';
";

if ($con->multi_query($sql)) {
  $result = $con->store_result();
  $row = $result->fetch_assoc();
  $itemCount = $row['item_count'];

  $con->next_result(); // Move to the next result set
  $result = $con->store_result();
  $row = $result->fetch_assoc();
  $userCount = $row['user_count'];

  $con->next_result(); // Move to the next result set
  $result = $con->store_result();
  $row = $result->fetch_assoc();
  $newsCount = $row['news_count'];

  $con->next_result(); // Move to the next result set
  $result = $con->store_result();
  $row = $result->fetch_assoc();
  $name = $row['name'];
  $email = $row['email'];
  $image = $row['dpimage'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
<?php include 'component/header.php'?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">FITNESSCLUB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <?php 
            $sql = "SELECT * FROM users WHERE email = 'anirudhadmin@gmail.com'";
            $result = $con->query($sql);
            $row = $result->fetch_assoc();
            $image = $row['dpimage'];
            $name  = $row['name'];
            $firstLetter = substr($name, 0, 1);
            if($image ==""){
             
              echo '<div class="img-circle elevation-2" style="width:30px;height:25px;text-align:center;translate:0 15px;color:white;background-color:black">'.$firstLetter.'</div>';
              // echo '<img style= "translate:0 10px"src="upProfile/'.$image.'" class="img-circle elevation-2" alt="User Image">';
            }
else{

  echo '<img style= "translate:0 10px"src="../upProfile/'.$image.'" class="img-circle elevation-2" alt="User Image">';
}
         
          ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $name;
       
          ?><br>
          <?php echo '<span style="font-size:14px">' . $email . '</span>';
       ?>
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class=""></i>
              </p>
            </a>
           
          </li>
        
          <!-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
          
              
             
         
          <li class="nav-item">
            <a href="../ProfileAdmin_edit.php" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
               Profile
              
              </p>
            </a>
          </li>
              
              
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
          Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="../addProduct.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Items</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="../addAdminInxBanner.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banners</p>
                </a>
              </li>
              
              <!-- <li class="nav-item">
                <a href="../slideBanner.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Slide Image</p>
                </a>
              </li> -->
             

              <li class="nav-item">
                
                <a href="../EditItemAdmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Items</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../EditAboutAdmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../EditServiceAdmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../EditSlideAdmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slide Image</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../EditContactAdmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../EditTestimonalAdmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonial</p>
                </a>
              </li>

            </ul>
          </li>
        
          </li>
          <li class="nav-item">
            <a href="../orderTrans.php" class="nav-link">
            <i class='nav-icon fas fa-dolly'></i>

              <p>
               Order Transaction
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../AdminSetting.php" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
               Setting
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../contactList.php" class="nav-link">
              <i class="nav-icon fas fa-phone-alt"></i>
              <p>
               Contacted List
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../AdminLogout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
              Log Out
              
              </p>
            </a>
          </li>
        
         
        
            
             
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $itemCount;
              
       
                
                
                ?></h3>

                <p>Total Items</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="../EditItemAdmin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
       
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $userCount?></h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="../userRegistered.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo  $newsCount ?></h3>

                <p>Register For Newsletter</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="../userNewsletter.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
      
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright@fitnessclub; 2023 </strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>

