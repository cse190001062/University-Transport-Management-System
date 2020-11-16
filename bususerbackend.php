<html>
<head>
  <title></title>
  <style>  
       table{
          border: 1px solid black;
          border-radius: 15px;
          padding: 20px;
          width:100%;
          background-color: grey;
          color:white; 
        }
       tr{
        text-align: center;
       }
       td, th{
        width:17%;
       }
       h1{
        text-align: center;
       }
       html{
        background: url(download1.jpg);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        
       }
       div{
        text-align: right;
        padding-right: 30px;
       }
       button{
        width:100px;
        height: 40px;
        font-size: 25px;
        border-radius: 5px;
        
        position: absolute; left: 90%;  bottom: 3%;
       }
       a{
        color:black;
       }
     </style> 
</head>
<?php
     $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="test";
    $conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);

     $userlocation=filter_input(INPUT_POST, 'currentlocation');
     $userdestination=filter_input(INPUT_POST, 'destination');

      if (mysqli_connect_error())
      {  
        echo "failed to connect";
      }
      else{

      $result1 = $conn->query("SELECT * FROM bus");
      $count=$result1->num_rows;
      $savecount=$count;
      echo '<table> <tr><th> BUS </th> <th> LOCATION </th> <th> TIME </th> <th> STATUS </th> </tr></table><br>';
    while($count>0){
    	
      $row=$result1->fetch_assoc();
      $bus=$row["bno"];
      $sql="SELECT*FROM bmanage WHERE bno='$bus'";
             $result=mysqli_query($conn,$sql) or die("failed to connect2");
             $row=mysqli_fetch_array($result);
             if(!empty($row["bdid"]) && !empty($row["mexpectedmovetime"]) && !empty($row["eexpectedmovetime"])){
             	
             $mexpectedtime= $row["mexpectedmovetime"];
             $eexpectedtime= $row["eexpectedmovetime"];
             $bdid= $row["bdid"];
             $drive1="SELECT * FROM binfo WHERE bno='$bus'";
             $resultd1 = mysqli_query($conn,$drive1);
             $row1=mysqli_fetch_array($resultd1) or die("filed to connec");
             $busclocation=$row1["currentlocation"];
             $busnlocation=$row1["nextlocation"];
             $busstatus=$row1["status"];
          

         if($userlocation=="INSTITUTE"){ 
         	
         	if($busclocation=="INSTITUTE" && $busstatus=="WAITING"){
             
             echo '<table><tr><td>'.$bus.'</td>'.'<td>'.$busclocation.'</td> '.'<td>'.$mexpectedtime.'</td>'.'<td>'. $busstatus .'</td></tr></table><br>';
         }

         }
         else if($userlocation=="C21MALL"){
          if($busclocation=="C21MALL" && $busstatus=="WAITING"){
             echo '<table><tr><td>'.$bus.'</td>'.'<td>'.$busclocation.'</td>' .'<td>'.$eexpectedtime.'</td>'.'<td>'. $busstatus .'</td></tr></table><br>';
         }
         else if(($busclocation=="INSTITUTE" && $busstatus=="STARTED") || ($busnlocation=="C21MALL") ){
              echo '<table><tr><td>'.$bus.'</td>'.'<td>'.$busclocation.'</td>' .'<td>'.$eexpectedtime.'</td>'.'<td>'." ON THE WAY " .'</td></tr></table><br>';
         }
         }
         else if($userlocation=="BHAWARKUA" && $userdestination=="INSTITUTE"){
          if($busclocation=="BHAWARKUA" && $busstatus=="WAITING" ){
             echo '<table><tr><td>'.$bus.'</td>';
              echo '<td>'.$busclocation.'</td>';
              $var = strtotime('00:30:00');
          	
               echo '<td>'.date('s:i:H',$eexpectedtime+$var).'</td>';
                echo '<td>'."WAITING" .'</td></tr></table><br>';
          }
          else if($busclocation=="C21MALL"){
          	$var = strtotime('00:30:00');
          	$time=$eexpectedtime+$var;
             echo '<table><tr><td>'.$bus.'</td>'.'<td>'.$busclocation.'</td>' .'<td>'.date('s:i:H',$time).'</td>'.'<td>'." ON THE WAY " .'</td></tr></table><br>';
          }
         }    
         else if($userlocation=="BHAWARKUA" && $userdestination=="C21MALL"){
          if($busclocation=="BHAWARKUA" && $busstatus=="WAITING" ){
          	
          	$time=$mexpectedtime;
             echo '<table><tr><td>'.$bus.'</td>'.'<td>'.$busclocation.'</td>' .'<td>'.date('s:i:H',$time).'</td>'.'<td>'." WAITING " .'</td></tr></table><br>';
          }
          else if($busclocation=="INSTITUTE"&& $busstatus=="STARTED" ){
          	$var = strtotime('00:30:00');
          	$time=$mexpectedtime+$var;
             echo '<table><tr><td>'.$bus.'</td>'.'<td>'.$busclocation.'</td>' .'<td>'.date('s:i:H', $time).'</td>'.'<td>'." ON THE WAY " .'</td></tr></table><br>';
          }
         }   
        
             }


       $count=$count-1;
             }
              
      }


?>
<body>

</body>
<footer>
  <div><button><a href="bususer.php"> BACK </a></button></div>
</footer>
</html>  