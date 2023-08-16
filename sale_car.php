<?php 
include("header.php");
if(isset($_GET['cid']))
{
$cid=$_GET['cid'];
$fg_comp2="select * from tbl_sale_upload where post_status='Active' AND company_id='$cid' order by upload_id desc";
}
else if(isset($_GET['ukeyword']))
{
	$ukeyword=$_GET['ukeyword'];
	$ustart=$_GET['ustart'];
	$uend=$_GET['uend'];
  // $fg_comp2="select * from tbl_rent_upload where post_status='Active' AND full_day_amount between '$ustart' AND '$uend' AND car_title like '%$ukeyword%' OR car_detail like '%$ukeyword%' order by upload_id desc";
	if($_GET['ukeyword'] !="")
	{
$fg_comp2="select * from tbl_sale_upload where post_status='Active' AND uamount between '$ustart' AND '$uend' AND car_title like '%$ukeyword%' OR car_detail like '%$ukeyword%' order by upload_id desc";
	}
	else
	{
		$fg_comp2="select * from tbl_sale_upload where post_status='Active' AND uamount between '$ustart' AND '$uend'  order by upload_id desc";
	}
	

   
}
// else if(isset($_GET['ustart'] && $_GET['uend']))
// {
// 	$ustart=$_GET['ustart'];
// 	$uend=$_GET['uend'];
// 	

   
// }

	
else
{
	$fg_comp2="select * from tbl_sale_upload where post_status='Active' order by upload_id desc";
}
?>
<section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75" data-background="assets/img/shapes/texture-bg.png">
            <img src="assets/img/shapes/tire-print-left.png" alt="tire print" class="position-absolute start-0 z-1 tire-print">
            <img src="assets/img/shapes/tire-print-right.png" alt="tire print" class="position-absolute end-0 z-1 tire-print">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                            <h1 class="text-white">Car For Sale</h1>
                          
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
                    <div class="col-xl-3">
                        <div class="iv2_sidebar bg-white rounded overflow-hidden">
                         
                            <div class="iv2_sidebar_widget iv2_search_widget">
                            	 <form method="get" action="sale_car.php">
                                <h6 class="mb-3">What Are You Looking For</h6>
                                  
                                    <input type="text" placeholder="Search Vehicle/Company" class="border border-end-0 rounded-start w-100" name="ukeyword" style="color:black" value="">

                                    <input type="number" placeholder="Range From 0" class="border border-end-0 rounded-start w-50" name="ustart" style="display: inline-block;width: 47% !important;color:black" value="0">

                                    <input type="number" placeholder="Range From 9999" class="border border-end-0 rounded-start w-50" name="uend" style="display: inline-block;width: 47% !important;color:black" value="999999">
                                    
                                     <input type="submit" class="btn btn-secondary btn-md mt-40 w-100" value="Filter Result">
                                 </form>
                                   
                               
                            </div>
                         <div class="iv2_sidebar_widget iv2_search_widget">
                         	<h6 class="mb-3">Company</h6>
                          <?php 
                                         $fg_comp="select * from tbl_company";
                                         $run_comp=mysqli_query($con,$fg_comp);
                                         while($row_comp=mysqli_fetch_array($run_comp))
                                         {
                                         	$c_id=$row_comp['c_id'];
                                         	$c_name=$row_comp['c_name'];
                                         	echo "<li><label><a href='?cid=$c_id'>$c_name</a></label></li>";
                                         }      
                                               ?> 	

                          </div>
                           
                           
                          
                           
                        </div>
                       
                    </div>
                    <div class="col-xl-9">
                        <div class="iv_listing mt-5 mt-xl-0">
                           
                            <div class="row g-4 justify-content-center">
                            <?php 
                            
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
            </div>
        </section>


<?php include("footer.php");?>        