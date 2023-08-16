<?php include("header.php");?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <!-- Main content -->
    <section class="content">
      <div class="row">

  <div class="col-12 col-lg-3">
      <a href="bank_ledger2.php?cid=4">
      <div class="card" style="width: 18rem;">

  <div class="card-body">
    <h4 class="card-title" style="color:black"><center>Total Teacher's</center></h4>
    <h4  style="color:black;margin-top:10px"> <center><?php


    $fg="select * from tbl_teacher";
    $run_ft=mysqli_query($con,$fg);
    $row_ft=mysqli_num_rows($run_ft);
    
    echo number_format($row_ft); ?></center></h4>
   
  </div>
</div>
</a>

</div>

  <div class="col-12 col-lg-3">
    <a href="#">
      <div class="card" style="width: 18rem;">

  <div class="card-body">
    <h4 class="card-title" style="color:black"><center>Total Student's</center></h4>
    <h4  style="color:black;margin-top:10px"> <center><?php


    $fg="select * from tbl_student";
    $run_ft=mysqli_query($con,$fg);
    $row_ft=mysqli_num_rows($run_ft);
    
    echo number_format($row_ft); ?></center></h4>
   
  </div>
</div>
   </a>

</div>

<div class="col-12 col-lg-3">
    <a href="#">
      <div class="card" style="width: 18rem;">

  <div class="card-body">
    <h4 class="card-title" style="color:black"><center>Sick Leave Allow</center></h4>
    <h4  style="color:black;margin-top:10px"> <center><?php


    $fg="SELECT sick_leave FROM `tbl_leave_setup`";
    $run_ft=mysqli_query($con,$fg);
    $row_ft=mysqli_fetch_array($run_ft);
    
    echo number_format($row_ft['sick_leave']); ?></center></h4>
   
  </div>
</div>
   </a>

</div>

<div class="col-12 col-lg-3">
    <a href="#">
      <div class="card" style="width: 18rem;">

  <div class="card-body">
    <h4 class="card-title" style="color:black"><center>Casual Leave Allow</center></h4>
    <h4  style="color:black;margin-top:10px"> <center><?php


    $fg="SELECT casual_leave FROM `tbl_leave_setup`";
    $run_ft=mysqli_query($con,$fg);
    $row_ft=mysqli_fetch_array($run_ft);
    
    echo number_format($row_ft['casual_leave']); ?></center></h4>
   
  </div>
</div>
   </a>

</div>


      </div>
    
    
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php include("footer.php");?>