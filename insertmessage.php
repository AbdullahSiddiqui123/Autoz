<?php include('function/function.php');
$txtmsg=$_POST['txtmsg'];
$sendid=$_POST['sendid'];
$recid=$_POST['recid'];
$rectype=$_POST['rectype'];
$sendtype=$_POST['sendtype'];

$ins_message="INSERT INTO `tbl_chat_message`(msg_date,sender_id,receiver_id,msg_text,sendtype,rectype) VALUES (NOW(),'$sendid','$recid','$txtmsg','$sendtype','$rectype')";
$run_message=mysqli_query($con,$ins_message);
if($run_message)
{
	echo "send";
}
else{
	echo "notsend";
}

?>

