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
	top: 35%;
	left: 40%;`
	padding-right: 330px;
	padding-left: 330px;
	padding-top: 160px;
	padding-bottom: 130px;
	background-color:#fff;
	opacity: 80%;	
	box-shadow: 5px 5px 5px #000;
	border-radius: 10px;
}
.cr{
	position: absolute;
	top:-0%;
	left: 0%;
	height: 40px;
	border-radius:9px;
	font-size: 25px;
	padding: 10px;
	background-color: #2855E6;
	width: 94%;
	justify-content: center;

}
.error{

	position: absolute;
	top: 0%;
	left: 15%;
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
	left: 65%;
}
.set1h3{
	position: absolute;
	top:-22.5%;
	left:67%;
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
	top:2%;
	left: 0%;
}
.set1user{
	position: absolute;
	top:-17%;
	left:80%;
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
  left: 73%;
  opacity: 65%;

}
.serv{
	position: absolute;
	top: -21%;
	left: 76%;
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


.userhi{
	position: absolute;
	top: 0%;
	left: 91%;
	
	width: 50px;
	height: 100px

}
.cr1{
	position: absolute;
	top: -9%;
	left: 5%;
	font-size: 30px;
}
.pass{
	
	width:90%;
	height: 40px;
	margin-bottom: 15px;
	font-size: 20px;
	border-radius: 5px;
	border:none;
	background-color:  #282A57;
	color:#fff;
	border-bottom: 1px;
}
.pass:hover{
	color: #000;
	background-color:  #533DF9;
	box-shadow: 0 0 10px #533DF9,0 0 10px #533DF9,0 0 10px #533DF9;
}
.type1{
	position: absolute;
	top: 30%;
	left: 5%;
}
</style>
</head>
<body>
	<div class="start">
		<div class="set1">
			<a href="trans.php" style="color:black">
			<img  class="set1img"  src="homepage.png" width="21px">
			<h3 class="set1h3" >HOME</h3>
			</a>
			<div class="userhi">
			<a href="profile.php" style="color:black">
			 <img class="user" src="user.png" width="35px">
			 <h3 class="set1user" >
			 	
			 	 <?php
 	 
       
       	echo $_SESSION['FNAME'];
       
       
        ?>  
			 </h3>

			</a>
			</div>
			<a href="universityservices.php" style="color:black">
			 <img class="service"   src="service.png" width="40px;">
			 <h3 class="serv" >OTHER SERVICES</h3>
			</a>
		</div>
		<h1 class="start1">
			Welcome to IIT INDORE Transporataion Portal
			</h1>
			<h3 class="start2">Reach Your Destiny , Without Difficulty</h3>
			
 </p>
 <div class="set">
 		<div class="cr">
   	 <h1 class="cr1" style="color: black">Edit your profile </h1>

   	 </div>
<div class="type1">
<a href="username.php">
   	 <button class="pass">Change Username</button>
   	 </a>
   	 <a href="fogpass.php">
   	 <button class="pass">Change  Password</button>
   	 </a>
   	 <a href="login1.php">
   	 <button class="pass">Logout</button>
   	 </a>
   	 </div>
 </div>

	</div>
</body>
</html>