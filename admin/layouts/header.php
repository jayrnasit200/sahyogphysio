<?php 
session_start();
// print_r($_SESSION["admin"]);
if(!isset($_SESSION["admin"])) {
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>site_name</title>
<link rel="shortcut icon" href="https://i0.wp.com/www.writefromscratch.com/wp-content/uploads/2018/12/demo-logo.png?ssl=1" />

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="assets/style.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
 
  <!-- DataTables -->
<link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css" />

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="admin" class="nav-link">Home</a> -->
      </li>

    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">site_name</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
        
          </li>
          <li class="nav-item has-treeview ">
            <a href="slider_list.php" class="nav-link  ">
              <i class="nav-icon fas fa-images"></i>
              <!-- <i class="fa-solid fa-projector"></i> -->
              <p>
                Slider 
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
              
          </li>

         

          <li class="nav-item has-treeview">
            <a href="book_appoitment_list.php" class="nav-link ">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
              Book Appoitment 
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview ">
            <a href="blogs_list.php" class="nav-link ">
              <i class="nav-icon fas fa-rss-square"></i>
              <p>
                Blogs (update)
                <!-- <i class="right fas fa-angle-left"></i> -->

              </p>
             
            </a>
             
          </li>
          <li class="nav-item has-treeview">
            <a href="gellary_list.php" class="nav-link ">
              <i class="nav-icon fas fa-images"></i>
              <p>
              Gellary 
                <!-- <i class="right fas fa-angle-left"></i> -->

              </p>
            </a>
             
          </li>
          <li class="nav-item has-treeview">
            <a href="product_list.php" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Products 
                <!-- <i class="right fas fa-angle-left"></i> -->

              </p>
            </a>
             
          </li>

          <li class="nav-item has-treeview ">
            <a href="contacts_list.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Contact  
                <!-- <i class="right fas fa-angle-left"></i> -->

              </p>
            </a>
             
          </li>
          <li class="nav-item has-treeview ">
            <a href="setting.php" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
              Settings  
                <!-- <i class="right fas fa-angle-left"></i> -->

              </p>
            </a>
             
          </li>
            <li class="nav-item has-treeview ">
            <a href="../logout.php" class="nav-link " >
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout 
                <!-- <i class="right fas fa-angle-left"></i> -->

              </p>
            </a>
             
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
   