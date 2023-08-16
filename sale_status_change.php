<?php 
include("function/function.php");
$id=$_POST['id'];
$status=$_POST['status'];

$upd="update tbl_sale_upload set post_status='$status' where upload_id='$id'";
$run_upd=mysqli_query($con,$upd);

if($run_upd)
{
	echo "Status Change Successfully";
}
else{
echo "Status Change Not Successfully";
}

?>