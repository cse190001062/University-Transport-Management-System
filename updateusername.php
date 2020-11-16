<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php

error_reporting(0);

  session_start();
  	# code...

    $fname=$_POST['fname'];
$lname=$_POST['lname'];
  	
  	$email=$_SESSION['email'];
   
if ( !empty($fname)&&!empty($lname))  {
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="test";
		
		  $conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if (mysqli_connect_error())
		  {
		  	echo "failed to connect";
		  }
		  else
		  {
		  	
		  	 $sql="UPDATE `register` SET `fname`='$fname',`lname`='$lname' WHERE email='$email' ";

   $result=mysqli_query($conn,$sql);
   
   if ($result) {
   	# code...
   	$_SESSION['FNAME']=$fname;
   	 echo "<script> alert('your username has been updated successfully'); window.location='trans.php'</script>";

   	
   }else{
      echo "<script> alert('failed to change your username'); window.location='update.php'</script>";
     }
		  }
   
	}
?>	
</body>
</html>