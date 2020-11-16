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
  left:40%;`
  padding-right: 330px;
  padding-left: 330px;
  padding-top: 160px;
  padding-bottom: 120px;
  background-color:#fff;
  opacity: 80%; 
  box-shadow: 5px 5px 5px #000;
  border-radius: 10px;
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
  top:6%;
  left: 91%;
}
.set1user{
  position: absolute;
  top:-34%;
  left:94%;
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
.unknow{
  position: absolute;
  top: 25%;
  left: 5%;
}
.type{
  width:300px;
  height: 40px;
  border:none;
  font-size: 16px;
  display: inline-block;
  background-color:#796759;
  color:#fff;
  border-radius: 5px;
  border-bottom: 1px dotted #fff;
}

.type2{
  position: absolute;
  top: 105%;
  left: 28%;
  width: 130px;
  height: 35px;
  font-size: 20px;
  border-radius: 5px;
  border:none;
  background-color:  #F87425;
}
.type2:hover{
  color: #fff;
  background-color:  #F87425;
  box-shadow: 0 0 10px #F87425,0 0 10px #F87425,0 0 10px #F87425;
}
.cr{
  position: absolute;
  top:-0%;
  left: 0%;
  height: 40px;
  border-radius:9px;
  font-size: 25px;
  padding: 10px;
  background-color: #F87425;
  width: 94%;
  justify-content: center;
}
.cr1{
  position: absolute;
  top: -9%;
  left: 5%;
  font-size: 30px;
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
      <a href="profile.php" style="color:black">
       <img class="user" src="user.png" width="35px">
       <h3 class="set1user" ><?php
         
       echo $_SESSION['FNAME'];
        ?>  </h3>

      </a>
      <a href="universityservices.php" style="color:black">
       <img class="service"   src="service.png" width="40px;">
       <h3 class="serv" >OTHER SERVICES</h3>
      </a>
    </div>
    <h1 class="start1">
      Welcome to IIT INDORE Transporataion Portal
      </h1>
      <h3 class="start2">Reach Your Destiny , Without Difficulty</h3>
       <p class="error" style="color:red">
   
 </p>
   <div class="set">
    <div class="cr">
     <h1 class="cr1" style="color: black">Choose your Route </h1>
     </div>
    <form method="POST" action="bususerbackend.php" class="unknow" >
    
     <br>
     <select name="currentlocation" class="type" required>
    <option value="">starting location</option>
     <option>INSTITUTE</option>
    <option>BHAWARKUA</option>
    <option>C21MALL</option>
   
       </select> 
       <br><br>
  
    <select name="destination" class="type" required>
    <option value="">Ending location</option>
    <option>INSTITUTE</option>
    <option>BHAWARKUA</option>
    <option>C21MALL</option>
   
       </select> 
     <br>
     
     <br>
     <input class="type2"  type="submit" value="Search">

     </form>
   </div>
  </div>
</body>
</html>html