<?php
    session_start();
?>
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
.set{
	position: absolute;
	top: 40%;
	left: 27%;`
	padding-right: 200px;
	padding-left: 200px;
	padding-top: 120px;
	padding-bottom: 120px;
	background-color: #DED9D9;
	opacity: 80%;	
}
.set:hover{
	transform: scale(1.2);
	background: #ffffff;
	box-shadow: 2px 2px 2px #000;
}
.set2{
	position: absolute;
	top: 40%;
	left: 45%;`
	padding-right: 200px;
	padding-left: 200px;
	padding-top: 120px;
	padding-bottom: 120px;
	background-color: #DED9D9;
	opacity: 80%;	
}
.set2:hover{
	transform: scale(1.2);
	background: #ffffff;
	box-shadow: 3px 3px 3px #000;
}
.set3{
	position: absolute;
	top: 40%;
	left: 63%;`
	padding-right: 200px;
	padding-left: 200px;
	padding-top: 120px;
	padding-bottom: 120px;
	background-color: #DED9D9;
	opacity: 80%;	
}
.set3:hover{
	transform: scale(1.2);
	background: #ffffff;
	box-shadow: 2px 2px 2px #000;
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
.set h3{
	position: absolute;
	top: -8%;
	left: 5%;
	font-size: 25px;
}
.set h1{
	position: absolute;
	top: 60%;
	left: 23%;
}
.set p{
	position: absolute;
	top:80%;
	left: 2%; 
	font-size: 18px;
}
.set2 img{
  position: absolute;
  top: 8%;
  left: 0%;

}
.set2 h3{
	position: absolute;
	top: -7%;
	left: 9%;
	font-size: 28px;
}
.set2 h1{
	position: absolute;
	top: 65%;
	left: 8%;
}
.set1{

	position: absolute;
	top: 0%;
	left:0.5%;
	width:98%;
	height: 4%;
	padding: 10px;
	background:#E6E2E2;
	opacity: 70%;
	display: block;
	box-shadow: 3px 3px 3px #000;
}
.set1img{
	position: absolute;
	top: 19%;
	left: 62%;
}
.set1h3{
	position: absolute;
	top:-22.5%;
	left:64%;
	font-size: 21px;
    font-weight: white;
}
.set1h3:hover{
	transform: scale(1.05);
	
}
.set1h3::after{
	content: '';
	display: block;
	width: 0;
	height: 2px;
	background:black;
	transition: width .5s;
	
}
.set1h3:hover::after{
	width: 100%;
  transform: scaleZ(1.5);
	transition: width .5s;
}
.user{
	position: absolute;
	top:6%;
	left: 89%;
}
.set1user{
	position: absolute;
	top:-34%;
	left:92%;
	font-size: 23px;
    font-weight: white;
}

.set1user:hover{
	transform: scale(1.05);

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
  left: 71%;
  opacity: 65%;

}
.serv{
	position: absolute;
	top: -21%;
	left: 74%;
	font-size: 20px;
}
.serv:hover{
	transform: scale(1.05);
	
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
.set3 img{
  position: absolute;
  top: 20%;
  left: 20%;

}
.set3 h3{
	position: absolute;
	top: -10%;
	left: 24%;
	font-size: 28px;
}
.set3 h1{
	position: absolute;
	top: 66%;
	left: 16%;
}

</style>
</head>
<body>
	<div class="start">
		<div class="set1">
			<a href="managerhome.php" style="color:black">
			<img  class="set1img"  src="homepage.png" width="21px">
			<h3 class="set1h3" >HOME</h3>
			</a>
			
			 <img class="user" src="user.png" width="35px">
			 <h3 class="set1user" ><?php
			 echo $_SESSION['FNAME'];
			 ?></h3>
             
			
			<a href="muniversityservices.php" style="color:black">
			 <img class="service"   src="service.png" width="40px;">
			 <h3 class="serv" >OTHER SERVICES</h3>
			</a>
		</div>
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
 <a href="manager.php">
			 <div class="set" style="color:black">
			 	<img class = "setimg" src="cady.png" width="150px;">
         <h3>Ready to Ride in</h3>

         <h1>CADY</h1>
         <p>Click to see cady avilable</p>

</div>

</a>
<a href="managerbus.php">
<div class="set2" style="color: black">
	<img src="bus2.png" width="200px;">
	<h3>Ready to Go</h3>
	<h1>College Buss</h1>
</div>
</a>
<a href="mcitybus.php">
<div class="set3" style="color: black">
	 <img  src="local5.png" width="125px">
	 <h3>Let's Go</h3>
	<h1>Local Buss</h1>
</div>
 </a>

	</div>
</body>
</html>html