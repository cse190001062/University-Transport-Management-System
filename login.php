<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
error_reporting(0);
  	# code...
  	$email=$_POST['email'];
  	$password=$_POST['password'];
if (!empty($email) &&!empty($password))  {
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
		  	$sql="SELECT * FROM `register` WHERE email='$email'";
   $result=mysqli_query($conn,$sql) or die("failed to connect");
   $row=mysqli_fetch_array($result);
   $sqlm="SELECT * FROM `manager` WHERE memail='$email'";
   $resultm=mysqli_query($conn,$sql) or die("failed to connect");
   $num=$resultm->num_rows;
   //if($num==0){
   if ($email=="manager1000@gmail.com"){
        if (password_verify($password, $row["password"])) {
   	# code...
   	header('Location:managerhome.php');
   	$username=$row["fname"];
   }else{
      $error=" *invalid username or password";
     header('Location:login1.php');
		  }
   }
   else if($email=="ram1001@gmail.com" || $email=="shyam1002@gmail.com" || $email=="sunil1003@gmail.com" || $email=="anuj1004@gmail.com"  || $email=="desai1005@gmail.com" || $email=="rakesh1006@gmail.com"){
             if (password_verify($password, $row["password"])) {
   	# code...
              $sql="SELECT * FROM `driver` WHERE demail='$email'";
            $result = mysqli_query($conn,$sql);
             $row=mysqli_fetch_array($result) or die("failed to connec1");
            
            $did=$row["did"];
            $sql2="SELECT * FROM manages WHERE did=$did";
            $result2 = mysqli_query($conn,$sql2);
            $count=$result2->num_rows;
            
             if($count!=0){ 
              $row2=mysqli_fetch_array($result2) or die("filed to connec"); 
              $cno=$row2["cno"];
            $route=$row2["routeno"];
               echo "<script>alert('You should drive the cady $cno in the route $route ');window.location='driverfrontend.php'</script>";
             }
             else if($count==0){
            echo "<script>alert('You are currently OFF DUTY ');window.location='login1.php'</script>";
           }
   	
   	$username=$row["fname"];
   }else{
      $error=" *invalid username or password";
     header('Location:login1.php');
		  }
   }
   else if($email=="bdriver2001@gmail.com" || $email=="bdriver2002@gmail.com" || $email=="bdriver2003@gmail.com" || $email=="bdriver2004@gmail.com"  || $email=="bdriver2005@gmail.com" ){
             if (password_verify($password, $row["password"])) {
    # code...
    header('Location:busdriverfrontend.php');
    $username=$row["fname"];
   }else{
      $error=" *invalid username or password";
     header('Location:login1.php');
      }
   }

   else {
   if (password_verify($password, $row["password"])) {
   	# code...
   	header('Location:trans.php');
   	$username=$row["fname"];
   }else{
      $error=" *invalid username or password";
     header('Location:login1.php');
		  }
		}
	//}
	//else{
           //$sql="SELECT * FROM `register` WHERE email='$email'";
		  //$result=mysqli_query($conn,$sql) or die("failed to connect");
		  //$row=mysqli_fetch_array($result);
		  //if($password==$row["password"]){
                //header('Location:managerhome.php');

		  //}else{
               //header('Location:login1.php');
		  //}
	//	}	  
   }
	}


?>
</body>
</html>
