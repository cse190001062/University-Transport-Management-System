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
		.start{
	width:100%;
	height:100%;
	position: absolute;
	top:0%;
	left:0%;
	background-image: url(pods.jpg);
	background-size: 100% 100%;
	}
	.type2{
	position: absolute;
	top: 30%;
	left: 5%;
	width: 90%;
	height: 30px;
	box-sizing: border-box;
	padding: 12px 5px;
	background:black;
	outline: none;
	border:none;
	border-bottom: 1px dotted black;
	color:white;
	border-radius: 5px;
	margin:5px;
	font-weight: bold;
}
.type3{
	position: absolute;
	top: 50%;
	left: 5%;
	width: 90%;
	height: 30px;
	box-sizing: border-box;
	padding: 12px 5px;
	background:black;
	outline: none;
	border:none;
	border-bottom: 1px dotted black;
	color:white;
	border-radius: 5px;
	margin:5px;
	font-weight: bold
}
.set{
	position: absolute;
	top: 30%;
	left: 40%;`
	padding-right: 350px;
	padding-left: 350px;
	padding-top: 100px;
	padding-bottom: 100px;
	background-color:white;
	opacity: 70%;	
}
.type1{
position: absolute;
top: 0%;
left: 5%;

}
.sign{
	position: absolute;
	top: 75%;
	left:25%;
	width: 50%;
	height: 40px;
	background-color: black;
	border-radius: 10px;
	font-size: 20px;
	font-family: Arial;

}
.error{

	position: absolute;
	top: 0%;
	left: 15%;
}

</style>
</head>
<body>
	<div class="start">
		 
		<div class="set">
			<form method="POST" action="updateusername.php">
			<h1 class="type1" style="color:black">Change Username</h1>
		<input type="text"  class="type2" name="fname" placeholder="First name" required="fname"><br>
			<input type="text" class="type3" name="lname" placeholder="Last name" required="lname"><br>
			<button class="sign" style="color:white">sumbit</button>
			</form>
	</div>
	</div>
</body>
</html>