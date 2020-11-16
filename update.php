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

    
  	$password=$_POST['password'];
  	$email=$_SESSION['email'];
   echo"hi";
if ( !empty($password))  {
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
		  	$password= password_hash($password, PASSWORD_BCRYPT);
		  	 $sql="UPDATE `register` SET `password`='$password' WHERE email='$email'  ";

   $result=mysqli_query($conn,$sql);
   
   if ($result) {
   	# code...
   	 echo "<script> alert('your password has been updated successfully'); window.location='trans.php'</script>";
   	
   }else{
      echo "<script> alert('failed to update your password'); window.location='update.php'</script>";
     }
		  }
   
	}
?>	
</body>
</html>