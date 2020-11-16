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
.set{
	position: absolute;
	top: 6%;
	left: 37%;
	padding-right: 200px;
	padding-left: 170px;
	padding-top: 100px;
	padding-bottom: 370px;
	background-color: black;
	opacity: 70%;	
}
.type1{
	position: absolute;
	top: 15%;
	left: 5%;
	width:90%;
	box-sizing: border-box;
	padding: 12px 5px;
	background:black;
	outline: none;
	border:none;
	border-bottom: 1px dotted #fff;
	color: #fff;
	border-radius: 5px;
	margin:5px;
	font-weight: bold;
}
.type2{
	position: absolute;
	top: 25%;
	left: 5%;
	width: 90%;
	height: 30px;
	box-sizing: border-box;
	padding: 12px 5px;
	background:black;
	outline: none;
	border:none;
	border-bottom: 1px dotted #fff;
	color: #fff;
	border-radius: 5px;
	margin:5px;
	font-weight: bold;
}
.type3{
	position: absolute;
	top: 35%;
	left: 5%;
	width: 90%;
	height: 30px;
	box-sizing: border-box;
	padding: 12px 5px;
	background:black;
	outline: none;
	border:none;
	border-bottom: 1px dotted #fff;
	color: #fff;
	border-radius: 5px;
	margin:5px;
	font-weight: bold;
}
.type4{
	position: absolute;
	top: 45%;
	left: 5%;
	width: 90%;
	height: 30px;
	box-sizing: border-box;
	padding: 12px 5px;
	background:black;
	outline: none;
	border:none;
	border-bottom: 1px dotted #fff;
	color: #fff;
	border-radius: 5px;
	margin:5px;
	font-weight: bold;
}
.type5{
	position: absolute;
	top: 55%;
	left: 5%;
	width: 90%;
	height: 30px;
	box-sizing: border-box;
	padding: 12px 5px;
	background:black;
	outline: none;
	border:none;
	border-bottom: 1px dotted #fff;
	color: #fff;
	border-radius: 5px;
	margin:5px;
	font-weight: bold;
}
.type6{
	position: absolute;
	top: 65%;
	left: 5%;
	width: 90%;
	height: 30px;
	box-sizing: border-box;
	padding: 12px 5px;
	background:black;
	outline: none;
	border:none;
	border-bottom: 1px dotted #fff;
	color: #fff;
	border-radius: 5px;
	margin:5px;
	font-weight: bold
}
.sign{
	position: absolute;
	top: 78%;
	left:20%;
	width: 60%;
	height: 50px;
	border-radius: 10px;
	font-size: 20px;
	font-family: Arial;

}
.al{
	position: absolute;
	top: 85.5%;
	left: 15%;
	font-size:18px;
}
.log{
	position: absolute;
	top: 88%;
	left:65%;
	font-size: 20px;
}
.sig{
	position: absolute;
	top: 2%;
	left: 7%;
	font-family:Bodoni MT Black;
}
.img{
	position: absolute;
	top: -1%;
	left: 60%;
	width: 115px;
}
.hi{
	position: absolute;
	top: 70%;
	left: 10%;
}




</style>
</head>
<body>
	<div class="start">
		
		<div class="set">
			<h1 class="sig" style="color: white">Sign up</h1>
			<img  class="img" src="user.png">
			<form action=""; method="POST">
			<input type="text"  class="type1" name="First_Name" placeholder="fname" required="fname"><br>
			<input type="text" class="type2" name="last_Name" placeholder="Lname" required="lname"><br>
			<input type="email" name="email" class="type3"    placeholder="Email id" required="email"><br>
			<input type="number" name="phoneno" class="type4"   placeholder="phone.no" required="phoneno"><br>
			<input type="password"  class="type5" name="password" placeholder="password" required="password"><br>
			<input type="password" name="confirm password" class="type6" placeholder="confirm password"/><br>
			<button class="sign" name="submit"> sign in</button>
			</form>
			<p class="hi" style="color:red">
				<?php
				include('sp.php');
				echo"$error";
				?>
			</p>
			
             <p class="al" style="color: white">Already Account exists?</p>
             <a  class="log"  href="login1.php" style="color:#3170F1"> Log in</a>
		</div>
	</div>
</body>
</html>