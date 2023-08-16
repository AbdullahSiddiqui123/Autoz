<?php include("header.php");?>

  <section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75" data-background="assets/img/shapes/texture-bg.png">
            <img src="assets/img/shapes/tire-print-left.png" alt="tire print" class="position-absolute start-0 z-1 tire-print">
            <img src="assets/img/shapes/tire-print-right.png" alt="tire print" class="position-absolute end-0 z-1 tire-print">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                            <h1 class="text-white">Contact Us</h1>
                            
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
                            <h2 class="mb-5">Contact Now !<br><span style="font-size:16px">For Any Query Please Feel Free to Contact Us.</span></h2>
                            <form method="post" class="login-form">
                                <label class="fw-semibold text-secondary mb-2 mt-4">Name</label>
                                <input type="text" name="uname" placeholder="Enter your name" class="w-100 rounded" style="color:black">

                                <label class="fw-semibold text-secondary mb-2 mt-4">Email</label>
                                <input type="email" name="uemail" placeholder="Enter your email" class="w-100 rounded" style="color:black">

                                <label class="fw-semibold text-secondary mb-2 mt-4">Phone</label>
                                <input type="text" name="uphone" placeholder="Enter your Phone No" class="w-100 rounded" style="color:black">

                                <label class="fw-semibold text-secondary mb-2 mt-4">Message</label>
                                <input type="text" name="umessage" placeholder="Enter your Message" class="w-100 rounded" style="color:black">

                                



                                <div class="login-btns d-flex align-items-center flex-wrap flex-sm-nowrap" style="margin-top: 15px">
                                    <button type="submit" name="btn_send" class="btn btn-primary">Message Send</button>

                                  
                                </div>
                                
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


if(isset($_POST['btn_send']))
{

$uemail=mysqli_real_escape_string($con,$_POST['uemail']);
$uname=mysqli_real_escape_string($con,$_POST['uname']);
$uphone=mysqli_real_escape_string($con,$_POST['uphone']);
$umessage=mysqli_real_escape_string($con,$_POST['umessage']);
 

$ins="INSERT INTO `tbl_contactus`(user_name,user_email,user_phone,user_message,message_date) VALUES ('$uname','$uemail','$uphone','$umessage',NOW())";
$run_ins=mysqli_query($con,$ins); 

if($run_ins)
{
echo "<script>alert('Message Send Successfully')</script>";
echo "<script>window.open('contact_us.php','_self')</script>";
}
else{
echo "<script>alert('Message Not Send Successfully')</script>";
echo "<script>window.open('contact_us.php','_self')</script>";
}


}
?>