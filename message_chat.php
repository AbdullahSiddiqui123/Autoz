<?php include("header.php");
if(!isset($_SESSION['uemail']))
{
  echo "<script>window.open('user_login.php','_self')</script>";
}

$sendid=$_GET['sendid'];
$sendtype=$_GET['sendtype'];
$recid=$_GET['recid'];
$rectype=$_GET['rectype'];

if($rectype == "Seller")
{
 $fg_rec="select user_name from tbl_seller where user_id='$recid'";
$run_rec=mysqli_query($con,$fg_rec);
$row_rec=mysqli_fetch_array($run_rec);
$user_name=$row_rec['user_name']; 
}
else{
 $fg_rec="select user_name from tbl_showroom where user_id='$recid'";
$run_rec=mysqli_query($con,$fg_rec);
$row_rec=mysqli_fetch_array($run_rec);
$user_name=$row_rec['user_name']; 
}

?>

<section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75" data-background="assets/img/shapes/texture-bg.png">
            <img src="assets/img/shapes/tire-print-left.png" alt="tire print" class="position-absolute start-0 z-1 tire-print">
            <img src="assets/img/shapes/tire-print-right.png" alt="tire print" class="position-absolute end-0 z-1 tire-print">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                            <h1 class="text-white">Chat Messanger</h1>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>

<input type="hidden" value="<?php echo $sendid ?>" id="sendid">
<input type="hidden" value="<?php echo $recid ?>" id="recid">
<input type="hidden" value="<?php echo $sendtype ?>" id="sendtype">
<input type="hidden" value="<?php echo $rectype ?>" id="rectype">
<div class="dashboard-content">
<div class="container">

<div class="profile-content">
<div class="row dashboard-info chat-window">
<div class="col-lg-2"></div>
<div class="col-lg-8">
<div class="chat-cont-right">
<div class="chat-header">

<div class="media d-flex align-items-center">
<div class="media-img-wrap flex-shrink-0">
<div class="avatar ">
  <br>
<img src="assets/img/avatar2.png" alt="User Image"  class="avatar-img rounded-circle w-75">
</div>
</div>
<div class="media-body flex-grow-1">
<h5 class="user-name" style="margin-top: 27px;"><?php echo $user_name ?></h5>
</div>
</div>
</div>

<div class="row">
  <div class="col-sm-12" style="height: 360px;border: 1px solid gray;margin-right: 80px;margin-top: 20px">
  <ul id="messagedatas">
    
  </ul>
  </div>

</div>


<div class="row">

<div class="col-sm-11">
  <br>
<input type="text" class="input-msg-send form-control" id="txtmsg" placeholder="Type something">

</div>
<div class="col-sm-1">
  <br>
<button type="button" id="btnsend" class="btn msg-send-btn"><i class="fas fa-paper-plane"></i></button>
<br><br>
</div>
</div>




</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
	messagedata();
	$('#btnsend').click(function(){
		
    messagesend();
  
	});
	$('#txtmsg').keypress(function (e) {
 var key = e.which;
 if(key == 13)  // the enter key code
  {
    messagesend();  
  }
});

	function messagesend()
	{
		 var txtmsg=$('#txtmsg').val();
     var sendid=$('#sendid').val();
     var recid=$('#recid').val();
     var rectype=$('#rectype').val();
     var sendtype=$('#sendtype').val();

     $.ajax({
      url:"insertmessage.php",
      method:"POST",
      data:{txtmsg:txtmsg,sendid:sendid,recid:recid,rectype:rectype,sendtype:sendtype},
      dataType:"text",
      success:function(data){
      	$('#txtmsg').val("");
      	messagedata();
        // $('#pform4').text(data);
     
      }
      
    });
	}

	function messagedata()
	{
      var sendid=$('#sendid').val();
     var recid=$('#recid').val();
     var rectype=$('#rectype').val();
     var sendtype=$('#sendtype').val();
	$.ajax({
      url:"fetchmessage.php",
      method:"POST",
      data:{sendid:sendid,recid:recid,rectype:rectype,sendtype:sendtype},
      dataType:"text",
      success:function(data){
      	
      	$('#messagedatas').html(data);
        // $('#pform4').text(data);
     
      }
      
    });

		
	}
</script>
<?php include("footer.php");?>