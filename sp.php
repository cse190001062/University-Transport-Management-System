 <!DOCTYPE html>
<html>
<body>

<?php
error_reporting(0);
  	# code...
$error=NULL;
if (isset($_POST['submit'])) {
	# code...

$fname=$_POST['First_Name'];
$lname=$_POST['last_Name'];
  	$email=$_POST['email'];
  	$phoneno=$_POST['phoneno'];
$password=$_POST['password'];

$confpass=$_POST['confirm password'];
 
 	# code...
 	
	
			  		  				  	
if(!empty($email)){
	if (!empty($password)) {
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="test";

		 $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if (mysqli_connect_error())
		  {
		  	echo "failed to connect";
		  }
		  else
		  {
		 $password= password_hash($password, PASSWORD_BCRYPT);
  $sql= "INSERT INTO `register` (`fname`, `lname`, `email`, `phoneno`, `password`) VALUES('$fname','$lname','$email','$phoneno','$password')";
     if ($conn->query($sql)) {
     	# code...

    header('Location:login1.php');
         }
        else{
     	echo"Error:".$sql ."<br>" .$conn->Error;
             }
       $conn->close();
		  }
	
}
	else{
	echo"password needed";
	die();
      }

}


 
		  	}
?> 

</body>
</html>
