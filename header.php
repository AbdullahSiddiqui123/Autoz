<?php session_start(); include('function/function.php');
error_reporting(0);

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--required meta tags-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--meta-->
    <meta name="description" content="Online Car Rental Platform " />
    <meta name="author" content="Auto Z" />

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16" />

    <!--title-->
    <title>Auto Z | Online Car Rental Platform For Buyer , Seller & Showroom</title>

    <!--build:css-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- endbuild -->

    <!--custom css-->
    <link rel="stylesheet" href="assets/css/custom.css" />

</head>
<style type="text/css">
    .dropbtn {

  color: white;

  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
/.dropdown:hover .dropbtn {background-color: #3e8e41;}/
</style>
<body>

  
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--header area start-->
        <header class="header-style-one header-sticky">
            
            <div class="at_header_nav">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 col-lg-2">
                            <div class="logo-wrapper">
                                <a href="#"><img src="assets/img/autoz.png" class="w-100" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-10">
                            <div class="at_header_right d-flex align-items-center justify-content-end">
                                <nav class="at_nav_menu d-none d-lg-block">
                                    <ul>
                                        <li class=""><a href="index.php">Home</a></li>
                                        <li class=""><a href="rental_car.php">Rental</a></li>
                                        <li class=""><a href="sale_car.php">Sale</a></li>
                                        <li class=""><a href="installment_car.php">Installment</a></li>
                                        <li class=""><a href="showroom.php">Show Room</a></li>
                                       
                                        <li class=""><a href="contact_us.php">Contact</a></li>
                                      
                                      
                                    </ul>
                                </nav>
                                <a href="" class="listing-btn text-white ms-4 d-none d-sm-block"><span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-white me-2"><i class="fa-solid fa-plus"></i></span>Upload</a>
                              <?php if(isset($_SESSION['uemail']) && $_SESSION['utype'] == "Seller"){ ?>
    <div class="dropdown">
  <button class="dropbtn listing-btn">MyAccount</button>
  <div class="dropdown-content">
    <a href="upload_rent_car.php">Upload Rent Car</a>
    <a href="upload_sale_car.php">Upload Sale Car</a>
    <a href="seller_rent_car_list.php">My Listing</a>
    <a href="mychat.php?type=Seller">My Chat</a>
    <a href="user_logout.php">Logout</a>
  </div>
</div>
<?php } ?>
       <?php  if(isset($_SESSION['uemail']) && $_SESSION['utype'] == "ShowRoom"){ ?>
    <div class="dropdown">
  <button class="dropbtn listing-btn">MyAccount</button>
  <div class="dropdown-content">
    <a href="upload_rent_car.php">Upload Rent Car</a>
    <a href="upload_sale_car.php">Upload Sale Car</a>
    <a href="upload_installment_car.php">Upload Installment Car</a>
    <a href="seller_rent_car_list.php">My Listing</a>
    <a href="mychat.php?type=ShowRoom">My Chat</a>
    <a href="user_logout.php">Logout</a>
  </div>
</div>
<?php }  if(!isset($_SESSION['uemail'])) { ?>
                                <a href="user_login.php" class="listing-btn text-white ms-4 d-none d-sm-block"><span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-white me-2"><i class="fa-solid fa-user"></i></span>Login</a>
                            <?php } ?>
                          <?php if(isset($_SESSION['uemail']) && $_SESSION['utype'] == "Buyer"){ ?>
  <a href="user_logout.php" class="listing-btn text-white ms-4 d-none d-sm-block"><span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-white me-2"><i class="fa-solid fa-user"></i></span>Logout</a>
<?php } ?>

                              
                               
                                <button class="mobile-menu-toggle header-toggle-btn ms-4 d-lg-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--header area end-->

        <!--mobile menu start-->
        <div class="mobile-menu position-fixed bg-white deep-shadow">
            <button class="close-menu position-absolute"><i class="fa-solid fa-xmark"></i></button>
            <a href="" class="logo-wrapper bg-secondary d-block mt-4 p-3 rounded-1 text-center"><img src="assets/img/autoz2.png" alt="logo" class="" style="height: 100px;width: 220px"></a>
            <nav class="mobile-menu-wrapper mt-40">
               <ul>
                  <li class=""><a href="index.php">Home</a></li>
                                        <li class=""><a href="rental_car.php">Rental</a></li>
                                        <li class=""><a href="sale_car.php">For Sale</a></li>
                                        <li class=""><a href="installment_car.php">Installment</a></li>
                                        <li class=""><a href="showroom.php">Show Room</a></li>
                                       
                                        <li class=""><a href="#"><i class="fa-solid fa-plus"></i> Upload</a></li>
                                        <li class=""><a href="user_login.php"><i class="fa-solid fa-user"></i> Login</a></li>
               </ul>
            </nav>

           
        </div>
        <!--mobile menu end-->

        <!--ofcanvus menu start-->
      
        <!--ofcanvus menu end-->