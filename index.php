<?php include("header.php");
if(!isset($_SESSION['uemail']))
{
  echo "<script>window.open('user_login.php','_self')</script>";
}
?>

    <section class="dealership-hero position-relative overflow-hidden">
            <div class="swiper at-hero-slider-wrapper" data-speed="900">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="dl-hero-single" data-background="assets/img/shapes/texture-bg.png">
                            <div class="container">
                                <div class="at_hero_slider">
                                    <div class="row">
                                        <div class="col-xl-7">
                                            <div class="at-hero-title">
                                                <br><br>
                                                <span class="at-subtitle text-primary position-relative fw-bold">Online Car Portal</span>
                                                
                                                <p class="mb-30">Online Car Rental Platform For Buyer , Seller & Showroom. </p>
                                                <ul class="car-info mt-3 mb-30 fs-md fw-500">
                                                    <li class="pt-1"><span class="me-2"><i class="fa-regular fa-circle-check"></i></span>Easy to Sold Car Online</li>
                                                    <li class="pt-1"><span class="me-2"><i class="fa-regular fa-circle-check"></i></span>Easy & Smooth Process For Rent a Car</li>
                                                    <li class="pt-1"><span class="me-2"><i class="fa-regular fa-circle-check"></i></span>100 Trusted & Verified Buyer & Seller</li>
                                                    <li class="pt-1"><span class="me-2"><i class="fa-regular fa-circle-check"></i></span>Installment Car are Also Available.</li>
                                                </ul>
                                                
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="at-hero-banner position-relative mt-4 mt-sm-0">
                                                <img src="assets/img/home1/hero-car-1.png" alt="car" class="at_hero_car">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                <div class="swiper-pagination"></div>
            </div>
            
        </section>
        <!--hero section end-->

      

        <!--brands section start-->
        <section class="brands-section pt-60 pb-120" id="brands">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="at-section-title text-center">
                            
                            <h2 class="mt-1 mb-0 h1">Rental Car's</h2>
                            <p>Explore Cars in our rental portal !</p>
                            <br>
                        </div>
                    </div>

                    <div class="col-sm-12">

                        <div class="iv_listing mt-5 mt-xl-0">
                           
                            <div class="row g-4 justify-content-center">
                            <?php 
                    $fg_comp2="select * from tbl_rent_upload where post_status='Active' order by upload_id desc";        
                    $run_comp=mysqli_query($con,$fg_comp2);
                    while($row_comp=mysqli_fetch_array($run_comp))
                            {

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

                               $fg_c="select * from tbl_company where c_id='$company_id'";
                               $run_c=mysqli_query($con,$fg_c);
                               $row_c=mysqli_fetch_array($run_c);
                               $c_name=$row_c['c_name'];


                            ?>  
                                <div class="col-xxl-4 col-xl-6 col-lg-4 col-md-6">
                                    <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                       
                                        <span class="date position-absolute"><?php echo $reg_year ?></span>
                                        <div class="feature-thumb position-relative overflow-hidden">
                                           <center> <a href="rent_car_detail.php?pid=<?php echo $upload_id ?>"><img src="car_image/<?php echo $image_1 ?>" alt="car" class="img-fluid"></a>
                                           </center>
                                        </div>
                                        <div class="filter-card-content">
                                            <div class="price-btn text-end position-relative">
                                                <span class="small-btn-meta">Rs <?php echo number_format($full_day_amount) ?> / Day</span>
                                            </div>
                                            <a href="rent_car_detail.php?pid=<?php echo $upload_id ?>" class="mt-4 d-block">
                                                <h5><?php echo $car_title ?></h5>
                                            </a>
                                            <span class="meta-content"><strong>Company :</strong> <a href="#"><?php echo $c_name ?></a></span>
                                            <hr class="spacer mt-3 mb-3">
                                            <div class="card-feature-box d-flex align-items-center mb-4">
                                                <div class="icon-box d-flex align-items-center">
                                                    <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                                    <?php echo $model_brand ?>
                                                </div>
                                                <div class="icon-box d-flex align-items-center">
                                                    <span class="me-2"><i class="flaticon-steering-wheel"></i></span>
                                                    <?php echo $transmission ?>
                                                </div>
                                                <div class="icon-box d-flex align-items-center">
                                                    <span class="me-2"><i class="flaticon-petrol"></i></span>
                                                    <?php echo $fuel_type ?>
                                                </div>
                                            </div>
                                            <a href="rent_car_detail.php?pid=<?php echo $upload_id ?>" class="btn outline-btn btn-sm d-block">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                               
                                
                            </div>
                          
                        </div>

                    </div>
                </div>
              
                <div class="brands-explore-btn text-center mt-5">
                    <a href="rental_car.php" class="link-btn fw-bold d-inline-flex align-items-center">
                        <span class="me-2"><img src="assets/img/icons/arrow-black.png" alt="arrow"></span>
                        View All
                        <span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </section>



         <section class="brands-section pt-60 pb-120" id="brands">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="at-section-title text-center">
                            
                            <h2 class="mt-1 mb-0 h1">Sale Car's</h2>
                            <p>Explore Cars in our Sale portal !</p>
                            <br>
                        </div>
                    </div>

                    <div class="col-sm-12">

                        <div class="iv_listing mt-5 mt-xl-0">
                           
                            <div class="row g-4 justify-content-center">
                            <?php 
$fg_comp2="select * from tbl_sale_upload where post_status='Active' order by upload_id desc";      
                    $run_comp=mysqli_query($con,$fg_comp2);
                    while($row_comp=mysqli_fetch_array($run_comp))
                            {

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
                               $uamount=$row_comp['uamount'];
                               $no_plate=$row_comp['no_plate'];
                               $reg_year=$row_comp['reg_year'];
                               $image_1=$row_comp['image_1'];

                               $fg_c="select * from tbl_company where c_id='$company_id'";
                               $run_c=mysqli_query($con,$fg_c);
                               $row_c=mysqli_fetch_array($run_c);
                               $c_name=$row_c['c_name'];


                            ?>  
                                <div class="col-xxl-4 col-xl-6 col-lg-4 col-md-6">
                                    <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                       
                                        <span class="date position-absolute"><?php echo $reg_year ?></span>
                                        <div class="feature-thumb position-relative overflow-hidden">
                                           <center> <a href="sale_car_detail.php?pid=<?php echo $upload_id ?>"><img src="car_image/<?php echo $image_1 ?>" alt="car" class="img-fluid"></a>
                                           </center>
                                        </div>
                                        <div class="filter-card-content">
                                            <div class="price-btn text-end position-relative">
                                                <span class="small-btn-meta">Rs <?php echo number_format($uamount) ?></span>
                                            </div>
                                            <a href="sale_car_detail.php?pid=<?php echo $upload_id ?>" class="mt-4 d-block">
                                                <h5><?php echo $car_title ?></h5>
                                            </a>
                                            <span class="meta-content"><strong>Company :</strong> <a href="#"><?php echo $c_name ?></a></span>
                                            <hr class="spacer mt-3 mb-3">
                                            <div class="card-feature-box d-flex align-items-center mb-4">
                                                <div class="icon-box d-flex align-items-center">
                                                    <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                                    <?php echo $model_brand ?>
                                                </div>
                                                <div class="icon-box d-flex align-items-center">
                                                    <span class="me-2"><i class="flaticon-steering-wheel"></i></span>
                                                    <?php echo $transmission ?>
                                                </div>
                                                <div class="icon-box d-flex align-items-center">
                                                    <span class="me-2"><i class="flaticon-petrol"></i></span>
                                                    <?php echo $fuel_type ?>
                                                </div>
                                            </div>
                                            <a href="sale_car_detail.php?pid=<?php echo $upload_id ?>" class="btn outline-btn btn-sm d-block">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                               
                                
                            </div>
                          
                        </div>

                    </div>
                </div>
              
                <div class="brands-explore-btn text-center mt-5">
                    <a href="sale_car.php" class="link-btn fw-bold d-inline-flex align-items-center">
                        <span class="me-2"><img src="assets/img/icons/arrow-black.png" alt="arrow"></span>
                        View All
                        <span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </section>
        <!--brands section end-->

    
<?php include("footer.php");?>