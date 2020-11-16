
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<style type="text/css">
body{
	background-color:white;
}	
.start{
	width:100%;
	height:100%;
	position: absolute;
	top:0%;
	left:0%;
	background-image: url(iiti1.jpg);
	background-size: 100% 100%;
	animation:slider 9sec infinite;
}
.start1{
position: absolute;
	top: 10%;
	left: 30%;	
}
.start2{
position: absolute;
	top: 19%;
	left: 40%;	
	font-size: 25px;
}


.error{

	position: absolute;
	top: 0%;
	left: 15%;
}
.setimg{
  position: absolute;
  top: 12%;
  left: 8%;

}



.set1{

	position: absolute;
	top: 1%;
	left:60%;
	width:35%;
	height: 5%;
}
.set1img{
	position: absolute;
	top: 19%;
	left: 12%;
}
.set1h3{
	position: absolute;
	top:-30%;
	left:17%;
	font-size: 20px;
    font-weight: white;
}
.set1h3::after{
	content: '';
	display: block;
	width: 0;
	height: 2px;
	background:#090909;
	transition: width .5s;
	
}
.set1h3:hover::after{
	width: 100%;

	transition: width .5s;
}
.user{
	position: absolute;
	top:0%;
	left: 85%;
}
.set1user{
	position: absolute;
	top:-48%;
	left:92%;
	font-size: 23px;
    font-weight: white;
}
.set1user::after{
	content: '';
	display: block;
	width: 0;
	height: 2px;
	background:#090909;
	transition: width .5s;
	
}
.set1user:hover::after{
	width: 100%;

	transition: width .5s;
}
.service{
  position: absolute;
  top: 3%;
  left: 37%;
  opacity: 65%;

}
.serv{
	position: absolute;
	top: -28%;
	left: 46%;
}
.serv::after{
	content: '';
	display: block;
	width: 0;
	height: 2px;
	background:#090909;
	transition: width .5s;
	
}
.serv:hover::after{
	width: 100%;

	transition: width .5s;
}
.set{
	position: absolute;
	top: 30%;
	left: 43%;`
	padding-right: 350px;
	padding-left: 300px;
	padding-top: 150px;
	padding-bottom: 200px;
	background-color:#fff;
	border-radius: 10px;
		
}
.set11{

	position: absolute;
	top: 14%;
	left: 5%;
}
.set11 input,select{
	width: 270px;
	height: 28px;
	margin-bottom: 5px;
	background: #7B305E;
	opacity: 85%;
	color: white;
	opacity: 70%;
	border:none;
	border-radius: 3px;
} 
.set2{
	position: absolute;
	top:88%;
	left: 27%;
	
    width: 130px;
	height: 35px;
	font-size: 20px;
	border-radius: 5px;
	border:none;
	background-color:#FC59C1;
}
.set2:hover{
	color: #fff;
	background-color: #FC59C1;
	box-shadow: 0 0 10px #FC59C1,0 0 10px #FC59C1,0 0 10px #FC59C1;
}

.set3{
	position: absolute;
	top: 105%;
	left: 23%;
	 width: 130px;
	height: 35px;
	font-size: 20px;
	border-radius: 5px;
	border:none;
	background-color:#FC59C1;
	

}
.set3:hover{
	color: #fff;
	background-color: #FC59C1;
	box-shadow: 0 0 10px #FC59C1,0 0 10px #FC59C1,0 0 10px #FC59C1;
}
.set0{
	position: absolute;
	top: 0%;
	left: 35%;
 font-size: 20px;
}
.cr{
	position: absolute;
	top:-0%;
	left: 0%;
	height: 25px;
	border-radius:9px;
	font-size: 20px;
	padding: 10px;
	background-color:#CC1090;
	width: 94%;
	justify-content: center;
}
.cr1{
	position: absolute;
	top: -9%;
	left: 5%;
	font-size: 20px;
}

</style>
</head>
<?php
      $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname= "test";
        $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            
            die('Connect Error('.mysqli_connect_errno().')' . mysqli_connect_error());
            }

?>
<body>
	<div class="start">
		
		<h1 class="start1">
			Welcome to IIT INDORE Transporataion Portal
			</h1>
			<h3 class="start2">Reach Your Destiny , Without Difficulty</h3>
			 <p class="error" style="color:red">
 	 <?php
        include('login.php'); 
       echo "$username";
        ?>  
 </p>
 
		<div class="set">
			<div class="cr">
   	 <h1 class="cr1" style="color: black"> ENTER DETAILS </h1>
   	 </div>
			
    <form method="POST" action="driverbackend.php"  class="set11">
       Driver Id:<select name="did" required> 
       	  <option value="">---select---</option>
    <?php 
          $h=0;
    $sqld="SELECT * FROM driver";
        $resultd = $conn->query($sqld);
        $rowsd= $resultd->num_rows;
    while($h<$rowsd){
      $row=$resultd->fetch_assoc();
      echo '<option>'.$row["did"].'</option>';
      $h=$h+1;
    }
    
    ?>
       </select>
      <br>
    Password :<input type="password" name="password" required><br>
    Location :<select name="location" required> 
       	  <option value="">---select---</option>
       	<?php 
          $h=0;
    $sqll="SELECT * FROM location";
        $resultl = $conn->query($sqll);
        $rowsl= $resultl->num_rows;
    while($h<$rowsl){
      $row=$resultl->fetch_assoc();
      echo '<option>'.$row["locname"].'</option>';
      $h=$h+1;
    }
    
    ?>  
              </select>
    
    Seats    :<input type="number" name="availseats" required>
        <button class="set3" type="submit" name="Submit">sumbit</button>
    </form>
<a href="login1.php" ><button class="set2">back</button></a>
</div>
</div>
 


</body>
</html>