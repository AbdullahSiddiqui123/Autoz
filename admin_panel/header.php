<?php
session_start();
include("../function/function.php");
error_reporting(0);
if(!isset($_SESSION['adminemail']))
{
  echo "<script>window.open('admin_login.php','_self')</script>";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AUTOZ Management Portal</title>
    
  <!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.css">
    
  <!-- Bootstrap-extend -->
  <link rel="stylesheet" href="css/bootstrap-extend.css">
  
  <!-- theme style -->
  <link rel="stylesheet" href="css/master_style.css">
  
  <!-- Crypto_Admin skins -->
  <link rel="stylesheet" href="css/skins/_all-skins.css">

    <script src="https://kit.fontawesome.com/51238610b6.js" crossorigin="anonymous"></script>
<script src="jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>



     
  </head>

<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <header class="main-header" > 
    <!-- Logo -->
    <a href="index.php" class="logo">
    
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" style="background-color: #f4f6f9 !important">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="color:black">
        <span class="sr-only"  style="color:black">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
      
      <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
      </form>
          </li> 
        



    
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
     <div class="ulogo">
       <a href="index.php">
        <!-- logo for regular state and mobile devices -->
        <span style="color:white"> <br>Admin Panel</span>
      </a>
    </div>
        <div class="image">
        </div>
        <div class="info">
      
            <a href="admin_logout.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-sign-out"></i></a>
        </div>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
    <li class="nav-devider" style="margin-top: -10px"></li>
        <li class="active" style="margin-top: -10px">
          <a href="index.php">
           <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
          
            <span>Post's</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="rent_post.php">Rent Post</a></li>
            <li><a href="sale_post.php"> Sale Post</a></li>
            <li><a href="installment_post.php"> Installment Post</a></li>
             
            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
          
            <span>User's</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="buyer_list.php">Buyer</a></li>
            <li><a href="seller_list.php"> Seller</a></li>
            <li><a href="showroom_list.php"> Showroom</a></li>
             
            
          </ul>
        </li>


        
      </ul>
    </section>
  </aside>