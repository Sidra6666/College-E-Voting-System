 <?php
include("../header_inner.php");
include("table.php");
if($_REQUEST['a']=="error")
  {
	   echo "<script>alert('Insert Faild!!!!')</script>";
  }
if($_REQUEST['a']=="1")
  {
	   echo "<script>alert('Insert Sucessfully')</script>";
  }
$k=0;
?>
<!DOCTYPE html>
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
//include("data_validation.php");
include("../connection.php");
$g=0;
$result = mysqli_query($con,"SHOW FIELDS FROM $table");
$i = 0;
echo "<div class='col-sm-12'>";
echo "<h2><center><b>VOTER REGISTRATION</b></center></h2>";
echo "<form action='insert.php' method='post' enctype='multipart/form-data' name='register_form' id='register_form'>";
while ($row = mysqli_fetch_array($result))
  {
     $name=$row['Field'];
     $type=$row['Type'];
     $type = explode("(", $type);
     $type_only=$type[0];
     $i++;
     $g++;
if($i==1 )
 {
	  //echo "ppp";
    //echo "<td>Male <input type='radio' name='$name'> </td>";
 }
elseif($name=="status" )
  {
	   echo "<input type='hidden' name='$name' value='Active'  class='form-control'>";
	}
elseif($name=='voter_id')
  {
     $sql2 = "select MAX(voter_id)+1 as vvid  from tbl_voter  ";
     $result2 = mysqli_query($con, $sql2);
     $row22=mysqli_fetch_array($result2);
     echo "
	   <div class='col-md-4'>
                      <div class='form-group'>
     <label>".str_replace('_', ' ', $name)."<span style='color:red;'>*</span> </label>";
     echo"<input type='text' value='' name='$name' class='form-control' required> </div></div>";
	}
elseif($name=="name")
  {
	  echo "
	  <div class='col-md-4'>
                      <div class='form-group'>
    <label>".str_replace('_', ' ', $name)."<span style='color:red;'>*</span></label>";
    echo"<input type='text' name='$name'class='form-control' required> </div></div>";
	}
elseif($name=="address")
  {
	  echo "
	  <div class='col-md-4'>
                      <div class='form-group'>
    <label>".str_replace('_', ' ', $name)."<span style='color:red;'>*</span></label>";
    echo"<input type='text' name='$name'class='form-control' required> </div></div>";
	}
elseif($name=="father_name")
  {
	  echo "
	  <div class='col-md-4'>
                      <div class='form-group'>
    <label>".str_replace('_', ' ', $name)."<span style='color:red;'>*</span></label>";
    echo"<input type='text' name='$name'class='form-control' required> </div></div>";
	}
elseif($name=="gender")
  {
	  echo "
	  <div class='col-md-4'>
                      <div class='form-group'>
    <label>".str_replace('_', ' ', $name)."<span style='color:red;'>*</span></label>";
	  echo "<select name='$name' class='form-control' required>";
    echo "<option value=''>Select Gender</option>";
		echo "<option>Male</option>";
		echo "<option>Female</option>";
    echo "<option>Others</option>";
	  echo "</select>";
	  echo "</div>
                      </div>";
	}
elseif($name=="locality")
  {
	  echo "
	  <div class='col-md-4'>
                      <div class='form-group'>
    <label>".str_replace('_', ' ', $name)."<span style='color:red;'>*</span></label>";
    echo"<input type='text' name='$name'class='form-control' required> </div></div>";
	}
else if($name=="adhar_no" )
  {
	  echo "
	  <div class='col-md-4'>
                        <div class='form-group'>
    <label>".str_replace('_', ' ', $name)."<span style='color:red;'>*</span></label>";
    echo"<input type='text' name='$name'class='form-control' required	pattern='[0-9]{12}'> </div></div>";
	}
else if($name=="mobile_no" )
  {
	  echo "
	 <div class='col-md-4'>
                       <div class='form-group'>
   <label>".str_replace('_', ' ', $name)."<span style='color:red;'>*</span></label>";
   echo"<input type='text' name='$name'class='form-control' required	pattern='[0-9]{10}'> </div></div>";
	}
else if($name=="email" )
  {
	  echo "
	 <div class='col-md-4'>
                       <div class='form-group'>
   <label>".str_replace('_', ' ', $name)."<span style='color:red;'>*</span></label>";
   echo"<input type='text' name='$name'class='form-control' required > </div></div>";
	}
elseif($name=='password')
  {
    $pp=rand(102000,999999);
    echo "
	  <div class='col-md-4'>
                       <div class='form-group'>
    <label>".str_replace('_', ' ', $name)."</label>";
    echo"<input type='password' value='$pp' name='$name'class='form-control' required	 readonly> </div></div>";
  }
elseif($name=="photo" )
  {
	  echo "
	  <div class='col-md-4'>
                        <div class='form-group'>
    <label>".str_replace('_', ' ', $name)."<span style='color:red;'>*</span></label>";
	  echo"<input type='file' name='$name' class='form-control' required></div></div>";
  }
elseif($name=="local_body")
  {
	  echo "
	  <div class='col-md-4'>
                        <div class='form-group'>
    <label>".str_replace('_', ' ', $name)."<span style='color:red;'>*</span></label>";
	  echo "<select name='$name' class='form-control' required>";
    echo "<option value=''>Select Local Body</option>";
		echo "<option>panchayat</option>";
		echo "<option>municipality</option>";
    echo "<option>corporation</option>";
	  echo "</select>";
	  echo "</div>
                        </div>";
	}
elseif($name=="body_name")
  {
	  echo "
	  <div class='col-md-4'>
                      <div class='form-group'>
    <label>".str_replace('_', ' ', $name)."<span style='color:red;'>*</span></label>";
    echo"<input type='text' name='$name'class='form-control' required> </div></div>";
	}
elseif($name=="ward_circle_division" )
  {
	  echo "
	  <div class='col-md-4'>
                      <div class='form-group'>
    <label>".str_replace('_', '/', $name)."<span style='color:red;'>*</span></label>";
    echo"<input type='text' name='$name'class='form-control' required> </div></div>";
	}
elseif($name=="dob" )
  {
     $date=date("Y-m-d");
	   $t="t".$k;
	   echo "
	  <div class='col-md-4'>
                      <div class='form-group'>
    <label>".str_replace('_', ' ', $name)." <span style='color:red;'>*</span></label>";
	  echo"<input type='date' name='$name'  class='form-control'  min='1950-01-01' max='2006-01-01' required ></div></div>";
	  ?>
	  <script type="text/javascript">
    
function showDate(date)
  {
	  alert('The date chosen is ' + date);
  }
</script>
      <?php
	  $k++;
  }
else
{
  if($type_only=="varchar" || $type_only=="int" || $type_only=="int" || $type_only=="tinyint")
  {
    echo "
    <div class='col-md-4'>
                      <div class='form-group'>
    <label>".str_replace('_', ' ', $name)."<span style='color:red;'>*</span></label>";
    echo"<input type='text' name='$name'class='form-control' required></div></div>";
  }
  }
}

echo "
	  <div class='col-md-4'>
                        <div class='form-group'>
    <label>".str_replace('_', ' ', 'Image')."<span style='color:red;'>*</span></label>";
	  echo"<input type='file' name='uploadedfile' class='form-control' required></div></div>";
echo "



  <div class='col-md-12'>
                 <div class='col-md-3'>              
  <div class='form-group'>
  <input type='submit' value='Add New' name='submit' class='form-control btn-success'>";
  echo "</form>";
echo "
  </div></div><div class='col-md-3'>   <div class='form-group'>
  <form action='select.php' method='post'>
  <input type='submit' name='view' value='View All' class='form-control btn-primary'>
  </form></div></div><div class='clearfix'></div></div>";
mysqli_free_result($result);
echo "</div>
  <div class='clearfix'></div>";
mysqli_close($con);
include("../footer_inner.php");
?>
</body>
</html>
  

  












 
















  
  
 
  


















