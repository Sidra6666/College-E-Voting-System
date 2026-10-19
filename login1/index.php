<?php
error_reporting(0);
session_start();
session_unset();
session_destroy();
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
		    .container {
        max-width: 1513px;
    }
		
		* {
			padding: 0;
			margin: 0;
		}
		body {
			background: #eee;
		}
		.bg-image {
			width: 1500px;
			height: 650px;
			background: url('images/pos.jpg') no-repeat 50% 20%;
		}
		.header {
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 20px;
			background: #fff;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}
		.header .logo {
			width: 100px;
		}
		.header .logo img {
			max-width: 100%;
		}
		.header nav ul {
			display: flex;
			gap: 20px;
			list-style: none;
		}
		.header nav ul li {
			height: 40px;
			line-height: 40px;
		}
		.header nav ul li a {
			text-decoration: none;
			font-family: "Dosis", sans-serif;
			color: #000;
			font-size: 17px;
			font-weight: bold;
			padding: 0 10px;
		}
		.brand-quote {
			width: 700px;
			font-family: "Dosis", sans-serif;
			color: #FFFFFF;
			font-size: 20px;
			padding: 20px;
			position: absolute;
			top: 250px;
		}
		.para {
			width: 700px;
			font-family: "Dosis", sans-serif;
			color: #000;
			font-size: 20px;
			position: absolute;
			top: 300px;
		}
	</style>
</head>
<body>
<div class="bg-image">
	<div class="container">
		<div class="header">
			<div class="logo">
				<img src="images/logo.png" alt="Logo">
			</div>
			<nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="login.php">ADMIN</a></li>
					<li><a href="login1.php">VOTER</a></li>
				</ul>
			</nav>
		</div>
		<br><br><br><br>
		<h1 class="brand-quote">ONLINE VOTING SYSTEM</h1>
		<p class="brand-quote"><h3>Welcome To Online Voting System</h3></p><br>
		<p class="para"><i>Persons entitled to vote must be free to vote for any candidate for election 
			 and for or against any proposal submitted to referendum or plebiscite, and free to support 
			 or to oppose government, without undue influence or coercion of any kind which may distort 
			 or inhibit the free expression of the elector's will. Voting is not only our right. It is our 
			 power. 
		</i></p>
	</div>
</div>
<?php
include("../connection.php");
$sql2 = "select *  from news ";
$result2 = mysqli_query($con, $sql2) or die("Error in Selecting ". mysqli_error($connection));
while($row2 =mysqli_fetch_array($result2))
	{
		$data=$data." <b>".$row2['title']." : </b> ". $row2['description'];
	}
	 echo "<marquee> $data </marquee>
	 <br>";
?>
<center>HELP DESK NUMBER 9997776665 <br></center>
</div>
</div>
</div>
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
