<?php include("header.php");
if(isset($_SESSION['uemail']))
{
	$userid=$_SESSION['uid'];
	$usertype=$_SESSION['utype'];
}
 ?>
 <!--breadcrumb section start-->
        <section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75" data-background="assets/img/shapes/texture-bg.png">
            <img src="assets/img/shapes/tire-print-left.png" alt="tire print" class="position-absolute start-0 z-1 tire-print">
            <img src="assets/img/shapes/tire-print-right.png" alt="tire print" class="position-absolute end-0 z-1 tire-print">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                            <h1 class="text-white">My Rent Car's Post</h1>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--breadcrumb section end-->

        <!--wishlist section start-->
        <section class="wishlist-section ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wishlist-table table-responsive bg-white">
                            <table class="table">
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Modal</th>
                                    <th class="price-column pe-0">Price</th>
                                    <th>Status</th>
                                  
                                </tr>
                                <?php
                                $fg_prod="select * from tbl_rent_upload where user_id='$userid' AND user_type='$usertype' order by upload_id desc";
                                $run_prod=mysqli_query($con,$fg_prod);
                                while($row_prod=mysqli_fetch_array($run_prod))
                                {
                                	$upload_id=$row_prod['upload_id'];
                                	$car_title=$row_prod['car_title'];
                                	$model_brand=$row_prod['model_brand'];
                                	$adv_amount=$row_prod['adv_amount'];
                                	$full_day_amount=$row_prod['full_day_amount'];
                                	$image_1=$row_prod['image_1'];
                                	$car_conidtion=$row_prod['car_conidtion'];
                                	$post_status=$row_prod['post_status'];
                                

                                 ?>
                                 <tr>
                                    <td class="product-thumb">
                                        <img src="car_image/<?php echo $image_1 ?>" alt="tire" class="img-fluid" style="height: 90px;width: 120px">
                                    </td>
                                    <td>
                                        <h6 class="mb-1"><?php echo $car_title ?></h6>
                                        <p><?php echo $car_conidtion ?></p>
                                        <p>For Rent</p>
                                      
                                    </td>
                                    <td>
                                        <span class="stock-btn rounded-pill"><?php echo $model_brand ?></span>
                                    </td>
                                    <td>
                                        <span class="price"><?php echo number_format($adv_amount) ?> adv<br>
                                        <?php echo number_format($full_day_amount) ?> Full Day</span>
                                      
                                    </td>
                                   
                                    <td>
                                    	<select class="form-control uchange" name="" data-id="<?php echo $upload_id ?>" style="display: inline-block;width: 60% !important">
                                    		<option><?php echo $post_status ?></option>
                                    		<option>Active</option>
                                    		<option>In Active</option>
                                    		<option>Sold</option>
                                    		
                                    	</select>
                                    	 <a href="?pid=<?php echo $upload_id ?>" class="close-btn ms-3" style="display: inline-block;"><i class="fas fa-close"></i></a>
                                    </td>

                                </tr>
                                 <?php
                                 } ?>


                                  <?php
                                $fg_prod="select * from tbl_sale_upload where user_id='$userid' AND user_type='$usertype' order by upload_id desc";
                                $run_prod=mysqli_query($con,$fg_prod);
                                while($row_prod=mysqli_fetch_array($run_prod))
                                {
                                    $upload_id=$row_prod['upload_id'];
                                    $car_title=$row_prod['car_title'];
                                    $model_brand=$row_prod['model_brand'];
                                    $uamount=$row_prod['uamount'];
                                    $image_1=$row_prod['image_1'];
                                    $car_conidtion=$row_prod['car_conidtion'];
                                    $post_status=$row_prod['post_status'];
                                

                                 ?>
                                 <tr>
                                    <td class="product-thumb">
                                        <img src="car_image/<?php echo $image_1 ?>" alt="tire" class="img-fluid" style="height: 90px;width: 120px">
                                    </td>
                                    <td>
                                        <h6 class="mb-1"><?php echo $car_title ?></h6>
                                        <p><?php echo $car_conidtion ?></p>
                                        <p>For Sale</p>
                                      
                                    </td>
                                    <td>
                                        <span class="stock-btn rounded-pill"><?php echo $model_brand ?></span>
                                    </td>
                                    <td>
                                        <span class="price">Rs <?php echo number_format($uamount) ?></span>
                                      
                                    </td>
                                   
                                    <td>
                                        <select class="form-control uchange2" name="" data-id="<?php echo $upload_id ?>" style="display: inline-block;width: 60% !important">
                                            <option><?php echo $post_status ?></option>
                                            <option>Active</option>
                                            <option>In Active</option>
                                            <option>Sold</option>
                                            
                                        </select>
                                         <a href="?pid2=<?php echo $upload_id ?>" class="close-btn ms-3" style="display: inline-block;"><i class="fas fa-close"></i></a>
                                    </td>

                                </tr>
                                 <?php
                                 } ?>

                                  <?php
                                $fg_prod="select * from tbl_installment_upload where user_id='$userid' AND user_type='$usertype' order by upload_id desc";
                                $run_prod=mysqli_query($con,$fg_prod);
                                while($row_prod=mysqli_fetch_array($run_prod))
                                {
                                    $upload_id=$row_prod['upload_id'];
                                    $car_title=$row_prod['car_title'];
                                    $model_brand=$row_prod['model_brand'];
                                    $adv_amount=$row_prod['adv_amount'];
                                    $full_day_amount=$row_prod['monthly_installment'];
                                    $image_1=$row_prod['image_1'];
                                    $car_conidtion=$row_prod['car_conidtion'];
                                    $post_status=$row_prod['post_status'];
                                

                                 ?>
                                 <tr>
                                    <td class="product-thumb">
                                        <img src="car_image/<?php echo $image_1 ?>" alt="tire" class="img-fluid" style="height: 90px;width: 120px">
                                    </td>
                                    <td>
                                        <h6 class="mb-1"><?php echo $car_title ?></h6>
                                        <p><?php echo $car_conidtion ?></p>
                                        <p>For Installment</p>
                                      
                                    </td>
                                    <td>
                                        <span class="stock-btn rounded-pill"><?php echo $model_brand ?></span>
                                    </td>
                                    <td>
                                        <span class="price"><?php echo number_format($adv_amount) ?> adv<br>
                                        <?php echo number_format($full_day_amount) ?> Installment</span>
                                      
                                    </td>
                                   
                                    <td>
                                        <select class="form-control uchange" name="" data-id="<?php echo $upload_id ?>" style="display: inline-block;width: 60% !important">
                                            <option><?php echo $post_status ?></option>
                                            <option>Active</option>
                                            <option>In Active</option>
                                            <option>Sold</option>
                                            
                                        </select>
                                         <a href="?pid=<?php echo $upload_id ?>" class="close-btn ms-3" style="display: inline-block;"><i class="fas fa-close"></i></a>
                                    </td>

                                </tr>

                            <?php } ?>
                                
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--wishlist section end-->

<?php include("footer.php"); ?>
<script type="text/javascript">
	$('.uchange').on('change',function(){
		var id=$(this).data('id');
		var status=$(this).val();


		$.ajax({
            type:"POST",
            url: "rent_status_change.php",
            data: {id:id,status:status },
            dataType: 'json',
            success: function(res){
            	alert(res);

               
            
           }
        });
    });

        $('.uchange2').on('change',function(){
        var id=$(this).data('id');
        var status=$(this).val();


        $.ajax({
            type:"POST",
            url: "sale_status_change.php",
            data: {id:id,status:status },
            dataType: 'json',
            success: function(res){
                alert(res);

               
            
           }
        });
    });
</script>
<?php 
if(isset($_GET['pid']))
{
	$pid=$_GET['pid'];
	$del="delete from tbl_rent_upload where upload_id='$pid'";
	$run_del=mysqli_query($con,$del);

	if($run_del)
	{
     echo "<script>alert('Delete Successfully')</script>";
     echo "<script>window.open('seller_rent_car_list.php','_self')</script>";
	}
	else{
     echo "<script>alert('Delete Not Successfully')</script>";
     echo "<script>window.open('seller_rent_car_list.php','_self')</script>";
	}
}


//for delete sale car
if(isset($_GET['pid2']))
{
    $pid=$_GET['pid2'];
    $del="delete from tbl_sale_upload where upload_id='$pid'";
    $run_del=mysqli_query($con,$del);

    if($run_del)
    {
     echo "<script>alert('Delete Successfully')</script>";
     echo "<script>window.open('seller_rent_car_list.php','_self')</script>";
    }
    else{
     echo "<script>alert('Delete Not Successfully')</script>";
     echo "<script>window.open('seller_rent_car_list.php','_self')</script>";
    }
}

?>