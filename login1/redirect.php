<?php

include('../db/connectionI.php');
if(isset($_POST['admin']))
{
	// username and password sent from form 
	$myusername=$_POST['UserName']; 
	$mypassword=$_POST['Password']; 

	session_start();
	if($myusername=="admin" && $mypassword=="admin")
	{
		$_SESSION['type']="admin";
		$_SESSION['uname']="admin";
		header("location:../dashboard/dashboard.php");
	
	}
	else{
		
	
	       
         
 	$result = mysqli_query($con,"SELECT * FROM user WHERE mail_id='$myusername' and password='$mypassword'");
	

		$cc= mysqli_num_rows($result);
		
		$r= mysqli_fetch_array($result);
		
		if($cc==1)
		{	
			session_start();
			
			$_SESSION['email']=$r['mail_id'];
			$_SESSION['type']="admin";
			$_SESSION['uname']="aa";
			$_SESSION['uid']=$r['id'];
			header("location:../dashboard/dashboard.php");
		}
		else
		{
		header("location:login.php?a=error");
		}
	}
}
?>
 
 



