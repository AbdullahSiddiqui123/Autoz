<?php include("header.php");
if(isset($_SESSION['uemail']))
{
	$userid=$_SESSION['uid'];
	$usertype=$_SESSION['utype'];
}
else{
	echo "<script>window.open('user_login.php','_self')</script>";
}
?>

   <section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75" data-background="assets/img/shapes/texture-bg.png">
            <img src="assets/img/shapes/tire-print-left.png" alt="tire print" class="position-absolute start-0 z-1 tire-print">
            <img src="assets/img/shapes/tire-print-right.png" alt="tire print" class="position-absolute end-0 z-1 tire-print">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                            <h1 class="text-white">Upload Car For Installment</h1>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--breadcrumb section end-->

        <!--car listing section start-->
        <section class="car-listing-section ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="car_listing_sidebar">
                            <h4 class="mb-2">Add Your Car Information</h4>
                            <p class="mb-0">Holistically embrace strategic theme and high standards in information.</p>
                            <div class="car_listing_nav mt-4">
                                <ul>
                                    <li><a href="#basic" class="active">Basic Info</a></li>
                                    <li><a href="#price">Vehicle Price</a></li>
                                    <li><a href="#vin">Registration</a></li>
                                    <li><a href="#gallery">Car Gallery</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="car_listing_form">
                            <form method="post" enctype="multipart/form-data">
                                <div class="listing_info_box bg-white rounded" id="basic">
                                    <h5 class="mb-4">Basic info</h5>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input-field">
                                                <label>Your car title</label>
                                                <input type="text" placeholder="Mercedes benz e 400 coupe 2017" name="ucartitle" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-field mt-4">
                                                <label>condition*</label>
                                                <select class="form-select" name="ucondition" required="">
                                                    <option>Used Car</option>
                                                    <option>Brand New</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-field mt-4">
                                                <label>Company*</label>
                                                <select class="form-select" name="ucompany" required="">
                                                   <option value="" hidden="">Select Company</option>
                                                   <?php 
                                                   $fg_comp="select * from tbl_company";
                                                   $run_comp=mysqli_query($con,$fg_comp);
                                                   while($row_comp=mysqli_fetch_array($run_comp))
                                                   {
                                                   	$c_id=$row_comp['c_id'];
                                                   	$c_name=$row_comp['c_name'];
                                                   	echo "<option value='$c_id'>$c_name</option>";
                                                   }
                                                   ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mt-4">
                                            <div class="input-field">
                                                <label>Model/Brand</label>
                                                <input type="text"  name="carmodel" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-field mt-4">
                                                <label>transmission*</label>
                                                <select class="form-select" name="utransmission" required="">
                                                    <option>Manual</option>
                                                    <option>Automatic</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-field mt-4">
                                                <label>Fuel Type*</label>
                                                <select class="form-select" name="fueltype" required="">
                                                    <option>Petrol</option>
                                                    <option>CNG</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 mt-4">
                                            <div class="input-field">
                                                <label>Color</label>
                                                <input type="color"  name="ucolor" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-4">
                                            <div class="input-field">
                                                <label>Detail</label>
                                                <input type="text"  name="cardetail" required="">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="listing_info_box bg-white rounded mt-40" id="price">
                                    <h4 class="mb-4">Vehicle pricing</h4>
                                    <div class="row">
                                      
                                        <div class="col-6 col-sm-4">
                                            <div class="input-field">
                                                <label>Advance*</label>
                                                <input type="number" name="uadvance" required="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <div class="input-field">
                                                <label>Monthly Installment*</label>
                                                <input type="number" name="onenight" required="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <div class="input-field">
                                                <label>Final Payment*</label>
                                                <input type="number" name="fullday" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing_info_box bg-white rounded mt-40" id="vin">
                                    <h4 class="mb-2">Registration</h4>
                                    <div class="row g-4">
                                        <div class="col-sm-6">
                                            <div class="input-field">
                                                <label>Number plat*</label>
                                                <input type="text" placeholder="Number plat#" name="noplat">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-field">
                                                <label>Register Year*</label>
                                                <input type="text" placeholder="Register Year" name="ryear">
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                               
                                <div class="listing_info_box bg-white rounded mt-40" id="gallery">
                                    <h4 class="mb-4">Photos</h4>
                                   <div class="row g-4">
                                     <div class="col-sm-4">
                                            <div class="input-field">
                                                <label>Image 1*</label>
                                                <input type="file" name="image_1">
                                            </div>
                                     </div>
                                     <div class="col-sm-4">
                                            <div class="input-field">
                                                <label>Image 2*</label>
                                                <input type="file" name="image_2">
                                            </div>
                                     </div>
                                     <div class="col-sm-4">
                                            <div class="input-field">
                                                <label>Image 3*</label>
                                                <input type="file" name="image_3">
                                            </div>
                                     </div>
                                 </div>
                                </div>
                               
                                <div class="form-btns d-flex align-items-center mt-40">
                                    <input type="submit" name="btn_add" class="btn btn-primary" value="Upload For Installment">
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--car listing section end-->
<?php include("footer.php");?>

<?php 
if(isset($_POST['btn_add']))
{

$ucartitle=$_POST['ucartitle'];
$ucondition=$_POST['ucondition'];
$ucompany=$_POST['ucompany'];
$carmodel=$_POST['carmodel'];
$utransmission=$_POST['utransmission'];
$fueltype=$_POST['fueltype'];
$ucolor=$_POST['ucolor'];
$cardetail=mysqli_real_escape_string($con,$_POST['cardetail']);
$uadvance=$_POST['uadvance'];
$onenight=$_POST['onenight'];
$fullday=$_POST['fullday'];
$noplat=$_POST['noplat'];
$ryear=$_POST['ryear'];	

$image_1=$_FILES['image_1']['name'];
$image_tmp1=$_FILES['image_1']['tmp_name'];
  
$image_2=$_FILES['image_2']['name'];
$image_tmp2=$_FILES['image_2']['tmp_name'];

$image_3=$_FILES['image_3']['name'];
$image_tmp3=$_FILES['image_3']['tmp_name'];

 move_uploaded_file($image_tmp1,"car_image/$image_1");
   move_uploaded_file($image_tmp2,"car_image/$image_2");
    move_uploaded_file($image_tmp3,"car_image/$image_3");                                            

$insert="INSERT INTO `tbl_installment_upload`(user_id,user_type,car_title,car_conidtion,company_id,model_brand,transmission,fuel_type,color_code,car_detail,adv_amount,monthly_installment,final_amount,no_plate,reg_year,image_1,image_2,image_3) VALUES ('$userid','$usertype','$ucartitle','$ucondition','$ucompany','$carmodel','$utransmission','$fueltype','$ucolor','$cardetail','$uadvance','$onenight','$fullday','$noplat','$ryear','$image_1','$image_2','$image_3')";
$run_insert=mysqli_query($con,$insert); 


if($run_insert)
{
echo "<script>alert('Upload Successfully')</script>";
echo "<script>window.open('seller_rent_car_list.php','_self')</script>";
}
else
{
echo "<script>alert('Upload Not Successfully')</script>";
echo "<script>window.open('upload_rent_car.php','_self')</script>";
}


}

?>