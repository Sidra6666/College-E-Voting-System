<?php
#error_reporting(0);

if(isset($_POST['submit']))
{
$target_path = "keyimg/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);

//$dir="uploads";
$myFile = $target_path;
//$myFile = "uploads/splitb/".basename($_FILES['uploadedfile']['name']);
//echo $myFile."<br>";
//echo "<img src='$myFile'>";
$myfile = fopen($myFile, "r") or die("Unable to open file! !!!!! 444");
$theData2=fread($myfile,filesize($myFile));


$myFile = "../voter/uploads/splita/".basename($_FILES['uploadedfile']['name']);
//echo $myFile."<br>";
//echo "<img src='$myFile'>";
$myfile = fopen($myFile, "r") or die("Unable to open file!");
$theData1=fread($myfile,filesize($myFile));



//echo "<a href='dec.php?a=a$hash.$ext&b=b$hash.$ext'>DECRYPTION</a>";

$myFile = "../voter/uploads/split/ccc".basename($_FILES['uploadedfile']['name']);
$fh = fopen($myFile, 'w') or die("can't open file");
$theData3=$theData1.$theData2;
fwrite($fh, $theData3);
fclose($fh);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
<style type="text/css">
	*{
		padding:0;
		margin:0;
		font-family:"Dosis:200,300,400,500,600,700";
	}
	body{
		background:url('images/jip.jpg') no-repeat ;
		background-size:cover;
	}
	.harder{
		width:1500px;
		padding:20px;
	 }
	 nav>ul{
		position:absolute;
		right:150px;
	 }
	 nav>ul>li{
		list-style:none;
		float:left;
		height:40px;
		line-height:40px;
	 }
	 nav>ul>li>a{
		text-decoration:none;
		font-family:"Dosis:200,300,400,500,600,700";
		color:#fff;
		font-size:17px;
		font-Weight:bold;
		padding:0 20px 0 20px;
	 }
	.login-form{
		width:350px;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
        position:absolute;
		color:#000;
    }
	.login-form h1{
		font-size:40px;
		text-align:center;
		text-transforamtion: uppercase;
		margin:40px 0;
	}
	.login-form p{
		font-size:20px;
		margin:15px 0;
    }
	.login-form input{
		font-size:16px;
		width:100%;
		padding: 15px 10px;
		border: 0;
		outline:none;
		border-radius:5px;
	}
	.login100-form-btn{
		font-size:18px;
		font-weight:bold;
		margin:20px 0;
		padding:10px 15px;
		width:50%;
		border-radius: 5px;
		border:0;
	}
</style>
</head>
<body>
<div class="header">
	<nav>
		<ul>
			<li><a href="index.php">HOME</a><li>	
            <li><a href="login.php">ADMIN</a><li>
		</ul>
	</nav>
</div>
<div class="login-form">

		<h1>VOTER LOGIN</h1>
		<form action="redirect1.php" method="post">
		<p>User Name</p>
		<input type="text" name="UserName" placeholder="Enter username" value="<?php echo $_REQUEST['UserName']; ?>" autocomplete="off" readonly>
		<p>Password</p>
		<?php
		echo "<img src='$myFile'>";
		?>
		<input type="password" name="Password" placeholder="Enter password">
		<input  class="login100-form-btn" type="submit" name="admin" value="Login" >
</form>


<?php
}
?>
</div>
</head>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>