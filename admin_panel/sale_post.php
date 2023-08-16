<?php
include("header.php");

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sale  Post List's 
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         
          <div class="box box-solid bg-dark">
           
            <!-- /.box-header -->
            <div class="box-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
          <thead>
            <tr>
              <th><center>Id</center></th>
              <th><center>Title</center></th>
         
              <th><center>Condition</center></th>
              <th><center>Brand</center></th>
              <th><center>Amount</center></th>

              <th><center>Detail</center></th>
            
         
            
         
              
            </tr>
          </thead>
          <tbody>

<?php 

$feth_user="SELECT upload_id,car_title,car_conidtion,model_brand,car_detail,uamount FROM `tbl_sale_upload`";
$run_us=mysqli_query($con,$feth_user);


$index=1;
while($rows=mysqli_fetch_array($run_us))
{
$upload_id=$rows['upload_id'];
$car_title=$rows['car_title'];
$car_conidtion=$rows['car_conidtion'];
$model_brand=$rows['model_brand'];
$car_detail=$rows['car_detail'];
$uamount=$rows['uamount'];

echo "
<tr>

              <td><center>$index</center></td>
          
              <td><center>$car_title</center></td>
              <td><center>$car_conidtion</center></td>
              <td><span>$model_brand</span></td>
              
              <td><center>$uamount</center></td>
<td><span>$car_detail</span></td>
             
           
     
            </tr>

";

$index =$index + 1;

}

?>


            
            
          </tbody>          
          
        </table>
        </div>              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->   
         
       
      
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->


  <?php include("footer.php");?>
 