<?php include("header.php");?>

  <section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75" data-background="assets/img/shapes/texture-bg.png">
            <img src="assets/img/shapes/tire-print-left.png" alt="tire print" class="position-absolute start-0 z-1 tire-print">
            <img src="assets/img/shapes/tire-print-right.png" alt="tire print" class="position-absolute end-0 z-1 tire-print">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                            <h1 class="text-white">Buyer Register Page</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--breadcrumb section end-->

        <!--login section-->
        <section class="login-section ptb-120 position-relative z-1 overflow-hidden">
            <span class="bg-primary-blur position-absolute z--1 start-50 top-0 tarnslate-middle-x"></span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-xxl-4">
                        <div class="login-form-area">
                            <h2 class="mb-5">Buyer Register Now !<br><span style="font-size:16px">For Exploring a Multiple Category Including Rent,Sell & Installment.</span></h2>
                            <form method="post"  enctype="multipart/form-data" class="login-form">
                                 <div class="row">
                                    <div class="col-sm-6">
                                        <label class="fw-semibold text-secondary mb-2 mt-4">Name</label>
                                <input type="text" name="uname" placeholder="Enter your Name" class="w-100 rounded" required="required" style="color:black">

                                    </div>

                                    <div class="col-sm-6">
                                        <label class="fw-semibold text-secondary mb-2 mt-4">Email</label>
                                <input type="email" name="uemail" placeholder="Enter your email" class="w-100 rounded" required="required" style="color:black">

                                    </div>
                                    <div class="col-sm-6">
                                        <label class="fw-semibold text-secondary mb-2 mt-4">Password</label>
                                <input type="password" name="upass" placeholder="Enter your Password" class="w-100 rounded" required="required" style="color:black">

                                    </div>
                                    <div class="col-sm-6">
                                        <label class="fw-semibold text-secondary mb-2 mt-4">Phone No</label>
                                <input type="text" name="uphone" placeholder="Enter your Phone No" class="w-100 rounded" required="required" style="color:black">

                                    </div>
                                    <div class="col-sm-6">
                                        <label class="fw-semibold text-secondary mb-2 mt-4">Cnic No</label>
                                <input type="text" name="ucnic" placeholder="Enter your CNIC" class="w-100 rounded" required="required"  style="color:black">

                                    </div>
                                    <div class="col-sm-6">
                                <label class="fw-semibold text-secondary mb-2 mt-4">Cnic Image</label>
                                <input type="file" name="cnicimage"  class="w-100 rounded" required="required">

                                    </div>
                                    <div class="col-sm-12">
                                <label class="fw-semibold text-secondary mb-2 mt-4">Complete Address</label>
                                <input type="text" name="uaddress" style="color:black" class="w-100 rounded" required="required">

                                    </div>
                                 </div>

                                <div class="login-btns d-flex align-items-center flex-wrap flex-sm-nowrap mt-40">
                                    <button type="submit" name="btn_register" class="btn btn-primary">Sign up</button>
                                  
                                </div>
                                <p class=" mt-4">Register as Seller? <a href="seller_register.php">Sign Up</a></p>
                                 <p class="mt-4">Register as ShowRoom? <a href="showroom_register.php">Sign Up</a></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 offset-xl-2">
                        <div class="login-form-right position-relative z-1 mt-5 mt-xl-0">
                            <br><br>
                            <img src="assets/img/login.jpg" alt="Auto Z" class="img-fluid">
                            <span class="bg-star-color position-absolute z--1 end-0 bottom-0"></span>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include("footer.php");?>

<?php 


if(isset($_POST['btn_register']))
{

$uname=mysqli_real_escape_string($con,$_POST['uname']);
$uemail=mysqli_real_escape_string($con,$_POST['uemail']);
$uphone=mysqli_real_escape_string($con,$_POST['uphone']);
$upass=mysqli_real_escape_string($con,$_POST['upass']);
$ucnic=mysqli_real_escape_string($con,$_POST['ucnic']);
$uaddress=mysqli_real_escape_string($con,$_POST['uaddress']);


$image_1=$_FILES['cnicimage']['name'];
$image_tmp1=$_FILES['cnicimage']['tmp_name'];
 


  move_uploaded_file($image_tmp1,"cnic_image/$image_1");

$fg_check="select * from tbl_buyer where user_email='$uemail'";
$run_check=mysqli_query($con,$fg_check);
$row_check=mysqli_num_rows($run_check);

if($row_check == 0)
{


$insert="INSERT INTO tbl_buyer(user_name,user_email,user_password,cnic_no,cnic_image,address,phone_no,register_date) VALUES ('$uname','$uemail','$upass','$ucnic','$image_1','$uaddress','$uphone',NOW())";
$runs=mysqli_query($con,$insert);

if($runs){

echo "<script>alert('Register Successfully')</script>";
echo "<script>window.open('user_login.php','_self')</script>";

}

else {

echo "<script>alert('Register Not Successfully')</script>";
echo "<script>window.open('buyer_register.php','_self')</script>";
}


}


else
{
   echo "<script>alert('Email ID Already Exist')</script>";
echo "<script>window.open('buyer_register.php','_self')</script>"; 
}
}


?>