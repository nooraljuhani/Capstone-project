<?php

session_start();
if (! $_SESSION['id'] )
{
    header("location:../login_Admin/Login.php");

}


  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="test.php" class="nav-link">Home<i class="fas fa-home"></i></a>
      </li>
      <li class="nav-item dropdown" style="margin-left: 800px">
        <a class="nav-link" data-toggle="dropdown" href="#">
         Countact
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
             <i class="fas fa-envelope-open-text"></i>
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Gmail
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">N&N-Mall@Gmail.com</p>
            
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
            <i class="fas fa-phone-square-alt"></i>
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Phone
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">067689543</p>
              
              </div>
            </div></a>
          </div>
        </li>

     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto" >
     <!-- Notifications Dropdown Menu -->
      <li class="nav-item" >
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      
      <span class="brand-text font-weight-light">Admin dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8;margin-left: 70px;width: 60px">
        </div>
        <div class="info">
          <a href="#" class="d-block">     </a>
        </div>
      </div>

  
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" style="height: 800px">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="margin-bottom: 10px;margin-top: 10px">
           <li class="nav-item">
            <a href="report.php" class="nav-link">
              <i class="fas fa-book-open"></i>
              <p>
               Report
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
          </li>
            <li class="nav-item ">
            <a href=" Admins_Management.php" class="nav-link ">
             <i class="fas fa-user-shield"></i>
              <p>
            Admins_Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            </li>
          <li class="nav-item ">
            <a href=" Vendor_Management.php" class="nav-link ">
              <i class="fas fa-users"></i>
              <p>
            Vendors_Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            </li>
        
          <li class="nav-item">
            <a href="Customer_Management.php" class="nav-link">
            <i class="fas fa-user-friends"></i>
              <p>
               Customers_Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="Category_Management.php" class="nav-link">
              <i class="fas fa-shopping-cart"></i>
              <p>
               Categores-Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Product_Management.php" class="nav-link">
              <i class="fas fa-shopping-basket"></i>
              <p>
               Prodects_Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
          </li>
          <li class="nav-header"></li>
          <li class="nav-item">
            <a href="../login_Admin/logout.php" class="nav-link">
             <i class="fas fa-sign-out-alt"></i>
              <p>
                Logout
                 <i class="fas fa-angle-left right"></i>
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
  
  <!-- /.content-wrapper -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>

