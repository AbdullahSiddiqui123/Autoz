<?php 
include("header.php");
$pid=$_GET['pid'];
$fg_comp2="select * from tbl_rent_upload where  upload_id='$pid'";
$run_comp=mysqli_query($con,$fg_comp2);
$row_comp=mysqli_fetch_array($run_comp);


$upload_id=$row_comp['upload_id'];
$user_id=$row_comp['user_id'];
$user_type=$row_comp['user_type'];
$car_title=$row_comp['car_title'];
$car_conidtion=$row_comp['car_conidtion'];
$company_id=$row_comp['company_id'];
$model_brand=$row_comp['model_brand'];
$transmission=$row_comp['transmission'];
$fuel_type=$row_comp['fuel_type'];
$color_code=$row_comp['color_code'];
$car_detail=$row_comp['car_detail'];
$adv_amount=$row_comp['adv_amount'];
$one_night_amount=$row_comp['one_night_amount'];
$full_day_amount=$row_comp['full_day_amount'];
$no_plate=$row_comp['no_plate'];
$reg_year=$row_comp['reg_year'];
$image_1=$row_comp['image_1'];
$image_2=$row_comp['image_2'];
$image_3=$row_comp['image_3'];
$post_datetime=$row_comp['post_datetime'];
$post_datetime=date("d-m-Y", strtotime($post_datetime));

 $fg_c="select * from tbl_company where c_id='$company_id'";
 $run_c=mysqli_query($con,$fg_c);
 $row_c=mysqli_fetch_array($run_c);
 $c_name=$row_c['c_name'];

 $fg_user="select * from tbl_seller where user_id='$user_id'";
 $run_user=mysqli_query($con,$fg_user);
 $row_user=mysqli_fetch_array($run_user);
 $user_name=$row_user['user_name'];
 $user_email=$row_user['user_email'];
 $address=$row_user['address'];
 $phone_no=$row_user['phone_no'];


 $uid=$_SESSION['uid'];
 $utype=$_SESSION['utype'];

?>
<section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75" data-background="assets/img/shapes/texture-bg.png">
            <img src="assets/img/shapes/tire-print-left.png" alt="tire print" class="position-absolute start-0 z-1 tire-print">
            <img src="assets/img/shapes/tire-print-right.png" alt="tire print" class="position-absolute end-0 z-1 tire-print">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                            <h1 class="text-white"><?php echo $car_title ?></h1>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--breadcrumb section end-->

        <!--inventory details-->
                   <section class="inventory-details-area ptb-120">
            <div class="container">
    <div class="row">
                    <div class="col-xl-8">
                        <div class="inventory-details">
                            <div class="product_details widget-padding bg-white rounded">
                                <span class="btn-meta bg-primary text-white">For Rent</span>
                                <h3 class="mt-2"><?php echo $car_title ?></h3>
                                <div class="iv-meta">
                                    <span><i class="fa-solid fa-clock"></i>Listed on: <?php echo $post_datetime ?></span>
                                </div>
                                <div class="iv_double_slider mt-30">
                                    <div class="iv_thumb_slider swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide thumb-wrapper rounded overflow-hidden">
                                                <center><img src="car_image/<?php echo $image_1 ?>" alt="car" class="img-fluid"></center>
                                            </div>
                                            <?php if($image_2 !=""){ ?>
                                            <div class="swiper-slide thumb-wrapper rounded overflow-hidden">
                                                <center><img src="car_image/<?php echo $image_2 ?>" alt="car" class="img-fluid"></center>
                                            </div>
                                        <?php }?>
                                        <?php if($image_3 !=""){ ?>
                                            <div class="swiper-slide thumb-wrapper rounded overflow-hidden">
                                                <center><img src="car_image/<?php echo $image_3 ?>" alt="car" class="img-fluid"></center>
                                            </div>
                                        <?php }?>
                                            
                                        </div>
                                    </div>
                                    <div class="iv_thumb_control_slider swiper mt-3 mt-lg-4">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide rounded overflow-hidden">
                                                <center><img src="car_image/<?php echo $image_1 ?>" alt="car" class="img-fluid"></center>
                                            </div>
                                            <?php if($image_2 !=""){ ?>
                                            <div class="swiper-slide rounded overflow-hidden">
                                               <center><img src="car_image/<?php echo $image_2 ?>" alt="car" class="img-fluid"></center>
                                            </div>
                                        <?php } ?>
                                        <?php if($image_3 !=""){ ?>
                                            <div class="swiper-slide rounded overflow-hidden">
                                               <center><img src="car_image/<?php echo $image_3 ?>" alt="car" class="img-fluid"></center>
                                            </div>
                                        <?php } ?>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product_info bg-white rounded widget-padding mt-30">
                                <h4 class="mb-5">Key Information</h4>
                                <div class="row g-4">
                                 
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="iv_info_item d-flex align-items-center">
                                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                            <i class="flaticon-energy"></i>
                                        </span>
                                            <div class="info_content">
                                                <span class="meta">Transmission</span>
                                                <span class="title"><?php echo $transmission ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="iv_info_item d-flex align-items-center">
                                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                            <i class="flaticon-car-repair"></i>
                                        </span>
                                            <div class="info_content">
                                                <span class="meta">Condition</span>
                                                <span class="title"><?php echo $car_conidtion  ?></span>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="iv_info_item d-flex align-items-center">
                                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                            <i class="flaticon-new-year"></i>
                                        </span>
                                            <div class="info_content">
                                                <span class="meta">Year</span>
                                                <span class="title"><?php echo $reg_year ?></span>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="iv_info_item d-flex align-items-center">
                                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                            <i class="flaticon-petrol"></i>
                                        </span>
                                            <div class="info_content">
                                                <span class="meta">Fuel Type</span>
                                                <span class="title"><?php echo $fuel_type ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="iv_info_item d-flex align-items-center">
                                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                            <i class="flaticon-drive"></i>
                                        </span>
                                            <div class="info_content">
                                                <span class="meta">Color</span>
                                                <span class="title"><?php echo $color_code ?></span>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="iv_info_item d-flex align-items-center">
                                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                            <i class="flaticon-drive"></i>
                                        </span>
                                            <div class="info_content">
                                                <span class="meta">No Plate</span>
                                                <span class="title"><?php echo $no_plate ?></span>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <hr class="mt-40 mb-30">
                                <h4 class="mb-40">About This Listing</h4>
                                <p><?php echo $car_detail ?></p>
                             
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="iv_sidebar mt-5 mt-xl-0">
                            <div class="iv_sidebar_widget iv_pricing_widget widget-padding bg-secondary rounded">
                                <h3 class="mb-2 text-white">Rs <?php echo number_format($full_day_amount) ?> / Day</h3>
                                <div class="widget_meta d-flex align-items-center">
                                    <span class="text-white"><i class="fa-solid fa-gauge-high"></i><?php echo $c_name ?></span>
                                    <span class="text-white"><i class="fa-solid fa-eye"></i>Rs : <?php echo $adv_amount ?> / Adv</span>
                                </div>
                            </div>
                            <div class="iv_sidebar_widget iv_seller_widget widget-padding bg-white rounded mt-4">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/author/seller.jpg" alt="seller" class="flex-shrink-0 rounded-circle">
                                    <div class="iv_seller_info ms-4">
                                        <h5 class="mb-0"><?php echo $user_name ?></h5>
                                        <div class="rating">
                                           <b>Phone</b> : <?php echo $phone_no ?>
                                           <b>Address</b> : <?php echo $address ?>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="widget_btns mt-30">
                                    <a href="message_chat.php?sendid=<?php echo $uid ?>&sendtype=<?php echo $utype ?>&recid=<?php echo $user_id ?>&rectype=<?php echo $user_type ?>"><span class="me-2"><i class="fa-solid fa-comment-dots"></i></span>Quick Chat</a>
                                   
                                </div>
                             
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--inventory details end-->

        <!--inventory slider start-->
       


<?php include("footer.php"); ?>