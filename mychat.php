<?php include("header.php");
$uid=$_SESSION['uid'];
 $utype=$_SESSION['utype'];
?>

  <section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75" data-background="assets/img/shapes/texture-bg.png">
            <img src="assets/img/shapes/tire-print-left.png" alt="tire print" class="position-absolute start-0 z-1 tire-print">
            <img src="assets/img/shapes/tire-print-right.png" alt="tire print" class="position-absolute end-0 z-1 tire-print">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                            <h1 class="text-white">My Chat</h1>
                            
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
                    <div class="col-sm-1"></div>
                   <div class="col-sm-10">
                      <table border="1" style="width:100%">
                                         <tr style="text-align: center;border:1px solid black">
                                             <th style="border:1px solid black">Sender Name</th>
                                             <th style="border:1px solid black">Last Message</th>
                                             <th style="border:1px solid black">Chat Now</th>
                                             
                                         </tr>
                                        <?php 
                    $fg_order="select * from tbl_chat_message where receiver_id='$uid' AND rectype='$utype' group by sender_id,sendtype";
                    $run_order=mysqli_query($con,$fg_order);
                    while($row_order=mysqli_fetch_array($run_order))
                    {
    $sender_id=$row_order['sender_id'];
    $sendtype=$row_order['sendtype'];

if($sendtype == "Seller")
{
 $fg_rec="select user_name from tbl_seller where user_id='$sender_id'";
$run_rec=mysqli_query($con,$fg_rec);
$row_rec=mysqli_fetch_array($run_rec);
$user_name=$row_rec['user_name']; 
}
else if($sendtype == "ShowRoom"){
 $fg_rec="select user_name from tbl_showroom where user_id='$sender_id'";
$run_rec=mysqli_query($con,$fg_rec);
$row_rec=mysqli_fetch_array($run_rec);
$user_name=$row_rec['user_name']; 
}
else if($sendtype == "Buyer"){
 $fg_rec="select user_name from tbl_buyer where user_id='$sender_id'";
$run_rec=mysqli_query($con,$fg_rec);
$row_rec=mysqli_fetch_array($run_rec);
$user_name=$row_rec['user_name']; 
}
    

$totalview="SELECT msg_text FROM `tbl_chat_message` where sender_id='$sender_id' AND receiver_id='$uid' AND sendtype='$sendtype' AND rectype='$utype' order by msg_id desc limit 1";
$run_totalview=mysqli_query($con,$totalview);
$row_totalview=mysqli_fetch_array($run_totalview);
$msg_text=$row_totalview['msg_text'];

                        echo "
                    <tr style='border:1px solid black'>";?>
                   
<td style="border:1px solid black">
<h6 style="text-align: center"><a href="#" style="color:black;text-align: center"><?php echo $user_name ?></a></h6>

</td>
<td style="border:1px solid black">
<h6 style="text-align: center"><a href="#" style="color:black;text-align: center"><?php echo $msg_text ?></a></h6>

</td>
<td>
<div >
<center>
<a href="message_chat.php?sendid=<?php echo $uid ?>&sendtype=<?php echo $utype ?>&recid=<?php echo $sender_id ?>&rectype=<?php echo $sendtype ?>" target="_blank" class="action-btn btn-eye"><i class="fas fa-comment-dots"></i></a>
</center>
</div>
</td>
                    </tr>
<?php echo"
                        ";
                    }                    
                                        

                                        ?> 
                                     </table>  
                   </div>
                </div>
            </div>
        </section>

<?php include("footer.php");?>
