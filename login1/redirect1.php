<?php

include('../db/connectionI.php');
if(isset($_POST['admin']))
{
	// username and password sent from form 
	$myusername=$_POST['UserName']; 
	$mypassword=$_POST['Password']; 
	
	       
         
 	$result = mysqli_query($con,"SELECT * FROM tbl_voter WHERE email='$myusername' and password='$mypassword'");
	

		$cc= mysqli_num_rows($result);
		
	$r=mysqli_fetch_array($result);
	
	if($cc==1)
	{
		session_start();
		$_SESSION['type']="Voter";
		$_SESSION['uid']=$r['id'];
		$_SESSION['email']=$myusername;
		$_SESSION['vvid']=$r['voter_id'];

		header("location:../dashboard/dashboard2.php");


	}
	else
	{
	header("location:login1.php?a=error");
	}
}
?>
 
 



