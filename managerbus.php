<?php
  $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname= "test";
        $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            
            die('Connect Error('.mysqli_connect_errno().')' . mysqli_connect_error());
            }
        else{
         

        $sqld="SELECT * FROM bdriver";
        $resultd = $conn->query($sqld);
        $rowsd=$resultd->num_rows;

        $sql2="SELECT * FROM bus";
        $result2= $conn->query($sql2);
        $rows2=$result2->num_rows;
      }

?>


<!DOCTYPE html>
<html>
<head>
     <title>Checking</title>
     <style>
      .hi{
  width:100%;
  height:100%;
  position: absolute;
  top:0%;
  left:0%;
  background-image: url(iiti1.jpg);
  background-size: 100% 100%;

}
    .first{
     position: absolute;
     top: 18%;
     left: 23%;
      border-collapse: collapse;
      margin:25px 0;
      font-size:20px;
      min-width:800px;
    }

  

.top {
        
        background-color:#58D626;
        text-align: left;
        color: white;
        font-weight: bold;
      }
      .first th,.first td{
  
   padding: 13px 13px;
   min-width: 100px;
      }
.top2{
  
  border-bottom: 1px solid #ffffff;
  background-color: #ffffff;
  opacity: 85%;
} 
.top3{
  border-bottom: 1px solid #f3f3f3;
  background-color: #C9F7C1;
  
}
.submit{
  position: absolute;
  top: 65%;
  left:43%;
  width: 150px;
  height: 50px;
  border-radius: 10px;
  background-color:#58F563;
  font-size: 20px;
  font-family: Arial;

}
.welcome{
  position: absolute;
  top: 2%;
  left: 5%;


}
    </style>
</head>
<body >
 
  <div class="hi">
     <h1 class="welcome"> <marquee> Welcome to IIT INDORE Transport Mangement portal </marquee></h1>
    <div class="second">
 <form method="POST" action="managerbusbackend.php">

  <table  class="first"> 
    
      
      <tr class="top"> <th> S.No </th><th> BUS </th> <th> DRIVER </th> <th> START TIME </th><th> RETURN TIME </th></tr>
     
      <tr class="top2"> <td> 1 </td> 

        <td><?php $row2=mysqli_fetch_assoc($result2); echo $row2["bno"]; ?>  </td> 
    <td>
       <select name="did1">

    <option value="">---select---</option>
    <?php 
    $h=0;
    $sqld="SELECT * FROM bdriver";
        $resultd = $conn->query($sqld);
    while($h<$rowsd){
      $row=$resultd->fetch_assoc();
      echo '<option>'.$row["bdid"].'</option>';
      $h=$h+1;
    }
    
    ?>
       </select> 
     </td> <td> <input name="stime1" type="TIME"> </td> <td> <input name="rtime1" type="TIME"></td></tr>
       <tr class="top3"> <td> 2 </td> <td> <?php $row2=mysqli_fetch_assoc($result2); echo $row2["bno"]; ?>  </td> <td>
       <select name="did2">
    <option value="">---select---</option>
    <?php 
    $h=0;
    $sqld="SELECT * FROM bdriver";
        $resultd = $conn->query($sqld);
    while($h<$rowsd){
      $row=$resultd->fetch_assoc();
      echo '<option>'.$row["bdid"].'</option>';
      $h=$h+1;
    }
    
    ?>
       </select> 
     </td>  <td> <input name="stime2" type="TIME"> </td> <td> <input name="rtime2" type="TIME"></td></tr>
    <tr class="top2"> <td> 3 </td> <td> <?php $row2=mysqli_fetch_assoc($result2); echo $row2["bno"]; ?>  </td> <td>
       <select name="did3">
    <option value="">---select---</option>
    <?php 
    $h=0;
    $sqld="SELECT * FROM bdriver";
        $resultd = $conn->query($sqld);
    while($h<$rowsd){
      $row=$resultd->fetch_assoc();
      echo '<option>'.$row["bdid"].'</option>';
      $h=$h+1;
    }
    
    ?>
       </select> 
     </td> <td> <input name="stime3" type="TIME"> </td> <td> <input name="rtime3" type="TIME"></td> </tr>
       <tr class="top3"> <td> 4 </td> <td> <?php $row2=mysqli_fetch_assoc($result2); echo $row2["bno"]; ?>  </td> <td>
       <select name="did4">
    <option value="">---select---</option>
    <?php 
    $h=0;
    $sqld="SELECT * FROM bdriver";
        $resultd = $conn->query($sqld);
    while($h<$rowsd){
      $row=$resultd->fetch_assoc();
      echo '<option>'.$row["bdid"].'</option>';
      $h=$h+1;
    }
    
    ?>
       </select> 
     </td> <td> <input name="stime4" type="TIME"> </td> <td> <input name="rtime4" type="TIME"></td></tr>
       
      <input class="submit" type="submit" name="Submit" value="submit">

  </table>
 </form>
 </div>
</div>
</body>
</html>