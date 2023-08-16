<?php 
include("header.php");
?>
<section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75" data-background="assets/img/shapes/texture-bg.png">
            <img src="assets/img/shapes/tire-print-left.png" alt="tire print" class="position-absolute start-0 z-1 tire-print">
            <img src="assets/img/shapes/tire-print-right.png" alt="tire print" class="position-absolute end-0 z-1 tire-print">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                            <h1 class="text-white">Show Room</h1>
                          
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
                   
                    <div class="col-xl-12">
                        <div class="iv_listing mt-5 mt-xl-0">
                           
                            <div class="row g-4 justify-content-center">
                            <?php 
                            $get_comp="SELECT * FROM `tbl_showroom` where active_status='Active'";
                            $run_comp=mysqli_query($con,$get_comp);
                            while($row_comp=mysqli_fetch_array($run_comp))
                            {

                               $user_id=$row_comp['user_id'];
                               $user_name=$row_comp['user_name'];
                               $user_email=$row_comp['user_email'];
                               $user_password=$row_comp['user_password'];
                               $cnic_no=$row_comp['cnic_no'];
                               $license_no=$row_comp['license_no'];
                               $license_image=$row_comp['license_image'];
                               $address=$row_comp['address'];
                               $phone_no=$row_comp['phone_no'];
                              


                            ?>	
                                <div class="col-xxl-3 col-xl-6 col-lg-4 col-md-6">
                                    <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                       
                                        <span class="date position-absolute bg-danger text-light"><?php echo $license_no ?></span>
                                        <div class="feature-thumb position-relative overflow-hidden">
                                           <center> <a href=""><img src="assets/img/showroom.png" alt="car" class="img-fluid" style="margin-top: 10px"></a>
                                           </center>
                                        </div>
                                        <div class="filter-card-content">
                                            
                                            <span class="meta-content"><strong>Phone :</strong> <a href="#"><?php echo $phone_no ?></a></span><br>
                                            <span class="meta-content"><strong>Address :</strong> <a href="#"><?php echo $address ?></a></span>
                                            <hr class="spacer mt-3 mb-3">
                                            
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                               
                                
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php include("footer.php");?>        