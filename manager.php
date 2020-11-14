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
          $sql="SELECT * FROM route";
        $result1 = $conn->query($sql);
        $rows=$result1->num_rows;

        $sqld="SELECT * FROM driver";
        $resultd = $conn->query($sqld);
        $rowsd=$resultd->num_rows;

        $sql2="SELECT * FROM cady";
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
 <form method="POST" action="managercadybackend.php">

  <table  class="first"> 
    
      
      <tr class="top"> <th> S.No </th><th> CADY </th> <th> DRIVER </th> <th> ROUTE </th></tr>
     
      <tr class="top2"> <td> 1 </td> 

        <td> 1 </td> 
    <td>
       <select name="did1">

    <option value="">---select---</option>
    <?php 
    $h=0;
    $sqld="SELECT * FROM driver";
        $resultd = $conn->query($sqld);
    while($h<$rowsd){
      $row=$resultd->fetch_assoc();
      echo '<option>'.$row["did"].'</option>';
      $h=$h+1;
    }
    
    ?>
       </select> 
     </td> <td> 
      <select name="routeno1">
      <option value="">---select---</option>
      <?php $ite=0;
      $sql="SELECT * FROM route";
        $result1 = $conn->query($sql);
      while($ite<$rows){
      $row=$result1->fetch_assoc();
      echo '<option>' .$row["routeno"]. '</option>';
      $ite=$ite+1;
    }
      ?>
      </select>
       </td> </tr>
       <tr class="top3"> <td> 2 </td> <td> 2 </td> <td>
       <select name="did2">
    <option value="">---select---</option>
    <?php 
    $h=0;
    $sqld="SELECT * FROM driver";
        $resultd = $conn->query($sqld);
    while($h<$rowsd){
      $row=$resultd->fetch_assoc();
      echo '<option>'.$row["did"].'</option>';
      $h=$h+1;
    }
    
    ?>
       </select> 
     </td> <td> 
      <select name="routeno2">
      <option value="">---select---</option>
      <?php $ite=0;
      $sql="SELECT * FROM route";
        $result1 = $conn->query($sql);
      while($ite<$rows){

      $row=$result1->fetch_assoc();
      echo '<option>' .$row["routeno"]. '</option>';
      $ite=$ite+1;
    }
      ?>
      </select>
       </td> </tr>
    <tr class="top2"> <td> 3 </td> <td> 3 </td> <td>
       <select name="did3">
    <option value="">---select---</option>
    <?php 
    $h=0;
    $sqld="SELECT * FROM driver";
        $resultd = $conn->query($sqld);
    while($h<$rowsd){
      $row=$resultd->fetch_assoc();
      echo '<option>'.$row["did"].'</option>';
      $h=$h+1;
    }
    
    ?>
       </select> 
     </td> <td> 
      <select name="routeno3">
      <option value="">---select---</option>
      <?php $ite=0;
      $sql="SELECT * FROM route";
        $result1 = $conn->query($sql);
      while($ite<$rows){
      $row=$result1->fetch_assoc();
      echo '<option>' .$row["routeno"]. '</option>';
      $ite=$ite+1;
    }
      ?>
      </select>
       </td> </tr>
       <tr class="top3"> <td> 4 </td> <td> 4 </td> <td>
       <select name="did4">
    <option value="">---select---</option>
    <?php 
    $h=0;
    $sqld="SELECT * FROM driver";
        $resultd = $conn->query($sqld);
    while($h<$rowsd){
      $row=$resultd->fetch_assoc();
      echo '<option>'.$row["did"].'</option>';
      $h=$h+1;
    }
    
    ?>
       </select> 
     </td> <td> 
      <select name="routeno4">
      <option value="">---select---</option>
      <?php $ite=0;
      $sql="SELECT * FROM route";
        $result1 = $conn->query($sql);
      while($ite<$rows){
      $row=$result1->fetch_assoc();
      echo '<option>' .$row["routeno"]. '</option>';
      $ite=$ite+1;
    }
      ?>
      </select>
       </td> </tr>
       <tr class="top2"> <td> 5 </td> <td> 5 </td> <td>
       <select name="did5">
    <option value="">---select---</option>
    <?php 
    $h=0;
    $sqld="SELECT * FROM driver";
        $resultd = $conn->query($sqld);
    while($h<$rowsd){
      $row=$resultd->fetch_assoc();
      echo '<option>'.$row["did"].'</option>';
      $h=$h+1;
    }
    
    ?>
       </select> 
     </td> <td> 
      <select name="routeno5">
      <option value="">---select---</option>
      <?php $ite=0;
      $sql="SELECT * FROM route";
        $result1 = $conn->query($sql);
      while($ite<$rows){
      $row=$result1->fetch_assoc();
      echo '<option>' .$row["routeno"]. '</option>';
      $ite=$ite+1;
    }
      ?>
      </select>
       </td> </tr>
      <input class="submit" type="submit" name="Submit" value="submit">

  </table>
 </form>
 </div>
</div>
</body>
</html>