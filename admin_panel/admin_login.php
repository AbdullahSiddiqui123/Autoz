<?php session_start();
include("../function/function.php");
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/src/pages/samplepage/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jan 2020 11:28:21 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="LMS ESS">
    <meta name="author" content="">
     <title>Autoz  - Admin Log in </title>
  
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/bootstrap-extend.css">
	
	<link rel="stylesheet" href="css/master_style.css">

	<link rel="stylesheet" href="css/skins/_all-skins.css">	


</head>
<style>
.login-page, .register-page {
    /*background: url('images/loginpage.jpg') center center no-repeat #d2d6de;
    background-size: cover;
    height: 100%;
    width: 100%;
    position: fixed;*/

}
  </style>
<body class="login-page" >
<!-- 
style="background-image:url('images/techtrixlogo.jpg')" -->
<div class="container-fluid">

<div class="row">

<div class="col-sm-3"></div>

<div class="col-sm-5">
  <center><br><br>
  <div class="login-box" style="height: 570px;overflow: hidden; ">
  <div class="login-logo">
    <a href=""><br>Admin Portal</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form  method="post" class="form-element">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="aemail" placeholder="Email">
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="apass" placeholder="Password">
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
       
        <!-- /.col -->
       
        <!-- /.col -->
        <div class="col-12 text-center">
          <input type="submit" class="btn btn-danger btn-block margin-top-10" name="btnlogin" value="SIGN IN">
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

   

  </div>
  <!-- /.login-box-body -->
</div>

</center>
</div>

<div class="col-sm-3"></div>

</div>
</div>


<!-- /.login-box -->


<?php


if(isset($_POST['btnlogin']))
{


$email=$_POST['aemail'];
$pass=$_POST['apass'];


$check_avail="select * from tbl_admin_user where admin_email='$email' AND admin_pass='$pass'";
$run_avail=mysqli_query($con,$check_avail);
$cn_a=mysqli_num_rows($run_avail);

if($cn_a !=0)
{
$row_avail=mysqli_fetch_array($run_avail);
$aid=$row_avail['admin_id'];
$_SESSION['adminemail']=$email;
$_SESSION['adminid']=$aid;
// echo "<script>alert('Login Successfully')</script>";
echo "<script>window.open('rent_post.php','_self')</script>";
}
else
{

echo "<script>alert('Email Id or Pass Is Incorrect')</script>";
echo "<script>window.open('admin_login.php','_self')</script>";
}






}



?>



	<!-- jQuery 3 -->
	<script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>
