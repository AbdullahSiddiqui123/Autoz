<?php include("header.php");?>

  <section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75" data-background="assets/img/shapes/texture-bg.png">
            <img src="assets/img/shapes/tire-print-left.png" alt="tire print" class="position-absolute start-0 z-1 tire-print">
            <img src="assets/img/shapes/tire-print-right.png" alt="tire print" class="position-absolute end-0 z-1 tire-print">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                            <h1 class="text-white">Login Page</h1>
                            
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
                    <div class="col-xl-5 col-xxl-4">
                        <div class="login-form-area">
                            <h2 class="mb-5">Login Now !<br><span style="font-size:16px">For Exploring AutoZ Portal Features.</span></h2>
                            <form method="post" class="login-form">
                               

                                <label class="fw-semibold text-secondary mb-2 mt-4">Email</label>
                                <input type="email" name="uemail" placeholder="Enter your email" class="w-100 rounded" style="color:black">

                                <label class="fw-semibold text-secondary mb-2 mt-4">Password</label>
                                <input type="password" name="upass" placeholder="Enter your email" class="w-100 rounded"  style="color:black">

                                <label class="fw-semibold text-secondary mb-2 mt-4">Account Type</label>
                                <select class="form-control w-100" name="utype"  style="color:black">
                                	<option>Buyer</option>
                                	<option>Seller</option>
                                	<option>ShowRoom</option>
                                </select>


                                <div class="login-btns d-flex align-items-center flex-wrap flex-sm-nowrap" style="margin-top: 15px">
                                    <button type="submit" name="btn_login" class="btn btn-primary">Sign in</button>

                                  
                                </div>
                                 <p class="text-xl mt-4">Don't have an account? <a href="buyer_register.php">Sign Up</a></p>
                                                           </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 offset-xl-2">
                        <div class="login-form-right position-relative z-1 mt-5 mt-xl-0">
                            <img src="assets/img/login.jpg" alt="Auto Z" class="img-fluid">
                            <span class="bg-star-color position-absolute z--1 end-0 bottom-0"></span>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include("footer.php");?>

<?php 


if(isset($_POST['btn_login']))
{

$uemail=mysqli_real_escape_string($con,$_POST['uemail']);
$utype=mysqli_real_escape_string($con,$_POST['utype']);
$upass=mysqli_real_escape_string($con,$_POST['upass']);
 

if($utype == "Buyer")
{

$fg_check="select * from tbl_buyer where user_email='$uemail' AND user_password='$upass'";
$run_check=mysqli_query($con,$fg_check);
$row_check=mysqli_num_rows($run_check);	
if($row_check != 0)
{
	$cn_check=mysqli_fetch_array($run_check);
	$_SESSION['uname']=$cn_check['user_name'];
	$_SESSION['uemail']=$cn_check['user_email'];
	$_SESSION['uid']=$cn_check['user_id'];
	$_SESSION['utype']=$utype;
	echo "<script>alert('Login Successfully')</script>";
echo "<script>window.open('rental_car.php','_self')</script>";

}
else
{
echo "<script>alert('Email ID or Password is Incorrect')</script>";
echo "<script>window.open('user_login.php','_self')</script>";
}


}


else if($utype == "Seller")
{

$fg_check="select * from tbl_seller where user_email='$uemail' AND user_password='$upass'";
$run_check=mysqli_query($con,$fg_check);
$row_check=mysqli_num_rows($run_check);	
if($row_check != 0)
{
	$cn_check=mysqli_fetch_array($run_check);
	$_SESSION['uname']=$cn_check['user_name'];
	$_SESSION['uemail']=$cn_check['user_email'];
	$_SESSION['uid']=$cn_check['user_id'];
	$_SESSION['utype']=$utype;
	echo "<script>alert('Login Successfully')</script>";
echo "<script>window.open('rental_car.php','_self')</script>";

}
else
{
echo "<script>alert('Email ID or Password is Incorrect')</script>";
echo "<script>window.open('user_login.php','_self')</script>";
}


}


//showroom
else if($utype == "ShowRoom")
{

$fg_check="select * from tbl_showroom where user_email='$uemail' AND user_password='$upass'";
$run_check=mysqli_query($con,$fg_check);
$row_check=mysqli_num_rows($run_check);	
if($row_check != 0)
{
	$uname=$cn_check['user_name'];
	$cn_check=mysqli_fetch_array($run_check);
	$_SESSION['uname']=$cn_check['user_name'];
	$_SESSION['uemail']=$cn_check['user_email'];
	$_SESSION['uid']=$cn_check['user_id'];
	$_SESSION['utype']=$utype;
	echo "<script>alert('Login Successfully')</script>";
echo "<script>window.open('rental_car.php','_self')</script>";

}
else
{
echo "<script>alert('Email ID or Password is Incorrect')</script>";
echo "<script>window.open('user_login.php','_self')</script>";
}


}

}
?>