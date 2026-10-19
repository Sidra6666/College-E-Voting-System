<?php
set_time_limit(0);
	session_start();
	$theData="Fail";
	$_SESSION['user']=$_REQUEST['id'];
	$_SESSION['election_id']=$_REQUEST['election_id'];
	$_SESSION['vid']=$_REQUEST['vid'];
$_SESSION['email']=$_REQUEST['email'];

//echo $_REQUEST['vid']." --- ".$_SESSION['vvid'];

if($_REQUEST['vid']==$_SESSION['vvid'])
{
	$theData="SUCCESS";
}


if($theData=='SUCCESS')
{
	
	echo"
<script>

 location.replace('../voting/otp.php')

</script>";
}
else{
	
echo"
<script>

 location.replace('../voting/step2.php?election_id=$_REQUEST[election_id]&a=22')

</script>";
}



?>
