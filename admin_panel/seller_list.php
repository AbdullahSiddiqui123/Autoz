<?php
include("header.php");

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Seller List's 
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
              <th><center>Name</center></th>
         
              <th><center>Email</center></th>
              <th><center>Cnic No</center></th>
              <th><center>Phone No</center></th>

             
         
              
            </tr>
          </thead>
          <tbody>

<?php 

$feth_user="SELECT user_id,user_name,user_email,cnic_no,phone_no FROM `tbl_seller`";
$run_us=mysqli_query($con,$feth_user);


$index=1;
while($rows=mysqli_fetch_array($run_us))
{
$user_id=$rows['user_id'];
$user_name=$rows['user_name'];
$user_email=$rows['user_email'];
$cnic_no=$rows['cnic_no'];
$phone_no=$rows['phone_no'];

echo "
<tr>

              <td><center>$index</center></td>
          
              <td><center>$user_name</center></td>
              <td><center>$user_email</center></td>
              <td><span>$cnic_no</span></td>
              
              <td><center>$phone_no</center></td>

             
           
     
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
 