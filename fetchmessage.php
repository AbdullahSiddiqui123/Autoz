<?php 
include('function/function.php');
$sendid=$_POST['sendid'];
$recid=$_POST['recid'];
$rectype=$_POST['rectype'];
$sendtype=$_POST['sendtype'];
error_reporting(0);
$fg_message="SELECT * FROM `tbl_chat_message` WHERE (sender_id='$sendid' AND receiver_id='$recid' AND sendtype='$sendtype' AND rectype='$rectype') OR (sender_id='$recid' AND receiver_id='$sendid' AND sendtype='$rectype' AND rectype='$sendtype') order by msg_id asc;";
$output="";
$run_message=mysqli_query($con,$fg_message);
while($row_message=mysqli_fetch_array($run_message))
{
	$sender_id=$row_message['sender_id'];
	$receiver_id=$row_message['receiver_id'];
	$msg_text=$row_message['msg_text'];
	$sendtypes=$row_message['sendtype'];
	$rectypes=$row_message['rectype'];

	if($sender_id == $sendid && $sendtypes == $sendtype)
	{

		$output.="<li class='media d-flex sent' style=''>
		<div class='media-body flex-grow-1' >
<div class='msg-box'>
<div>
<p style='padding:5px;margin-top:5px;color:#FF0000;font-weight:bold;text-align:right;'>$msg_text</p>
</div>
</div>
</div>
</li>";

	}
	else
	{
     $output.="<li class='media d-flex' style='text-align:left;'>


<div class='media-body flex-grow-1' style='background-color:#F9FAFC;padding:5px;margin-top:5px;color:black;width:250px !important'>
<div class='msg-box'>
<div>
<p>$msg_text</p>

</div>
</div>
</div>
</li>";
	}
}
echo $output;
?>