<?php
include("table.php");
include("../header_inner.php");
include("data_validation.php");
include("../connection.php");
$k=0;
?>


<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>



<?php
$id=$_REQUEST['id'];
$result = mysqli_query($con,"SELECT * FROM `tbl_voter` WHERE `id`='$_SESSION[uid]'");
$cc=mysqli_fetch_array($result);

$i = 0;
echo "<form method='post' enctype='multipart/form-data'>";


	  
	  
	  echo "
	  
	  <div class='col-md-10'>
         <div class='form-group'>
         <label>Current Password</label>
         <input type='text' name='$name' value='$cc[password]' class='form-control' readonly > 
         </div>
         </div>";
	  
	  
	  
         echo "
	  
         <div class='col-md-10'>
          <div class='form-group'>
          <label>New Password</label>
          <input type='text' name='newpassword' class='form-control'  > </div>
           </div>";
    
           echo "
        
           <div class='col-md-10'>
            <div class='form-group'>
            <label>Re-enter New Password</label>
            <input type='text' name='renewpassword' class='form-control'  > </div>
             </div>";
                                        
                                        
  


echo "
<div class='col-md-12'>
                              <div class='col-md-3'>              <div class='form-group'>
											<input type='submit' value='Update' name='submit' class='form-control btn-success'>";



echo "</form>";



echo "
</div></div>
<div class='clearfix'></div>

</div>
";


if(isset($_POST['submit']))
{
  $newpassword=$_POST['newpassword'];
  $renewpassword=$_POST['renewpassword'];

  if($newpassword==$renewpassword)
  {
    $up=mysqli_query($con,"UPDATE `tbl_voter` SET password ='$newpassword' WHERE `id`='$_SESSION[uid]'");
    include('mail1.php');
	
	$key=$_POST['newpassword'];
	
    $imgpasss=create_image($key);
	
function create_image($pass)
{
    //Let's generate a totally random string using md5
   // $md5 = $pass;
//$md5 = md5(rand(0,999));    
    //We don't need a 32 character long string so we trim it down to 5 
  //  $pass = substr($md5, 10, 5); 

    //Set the image width and height
    $width = 200;
    $height = 100; 

    //Create the image resource 
    $image = ImageCreate($width, $height);  

    //We are making three colors, white, black and gray
    $white = ImageColorAllocate($image, 255, 255, 255);
    $black = ImageColorAllocate($image, 0, 0, 0);
    $grey = ImageColorAllocate($image, 204, 204, 204);

    //Make the background black 
    ImageFill($image, 0, 0, $black); 

    //Add randomly generated string in white to the image
    ImageString($image, 5, 50, 50, $pass, $white); 

    //Throw in some lines to make it a little bit harder for any bots to break 
   // ImageRectangle($image,0,0,$width-1,$height-1,$grey); 
   // imageline($image, 0, $height/2, $width, $height/2, $grey); 
   // imageline($image, $width/2, 0, $width/2, $height, $grey); 
 
    //Tell the browser what kind of file is come in 
    //header("Content-Type: image/jpeg"); 

    //Output the newly created image in jpeg format 
   // $a=ImageJpeg($image);
	
  $save = "aa.png";
  imagepng($image, $save);

  return $save; 
  
}
	
	
  echo '<script>
    alert("updated successfully");
    window.location="change_password.php";
    </script>'; 
  }
  else{
    echo '<script>
    alert("password doesnot match");
    window.location="change_password.php";
    </script>';
  }
 
}


mysqli_free_result($result);






echo "<div class='clearfix'></div>
";





mysqli_close($con);
?>
<div id="sample">
  <script type="text/javascript" src="nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>