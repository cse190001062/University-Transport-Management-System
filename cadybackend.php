<!DOCTYPE html>
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

     </style> 
</head>
<?php
error_reporting(0);
$currentloc=$_POST['flocation'];
$save=$currentloc;
$destination=$_POST['tlocation'];
$sort=$_POST['filter'];
$host="localhost";

    $dbusername="root";
    $dbpassword="";
    $dbname="test";
      $conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
      if (mysqli_connect_error())
      {  
        die("failed to connect");
      }
      $var=0;
             if($sort=="ARRIVE HERE FIRST"){
              $var=1;
             }
             else if($sort=="REACH DESTINATION FIRST"){
              $var=3;
             }
             else if($sort=="MORE EMPTY SEATS"){
              $var=4;
             }
             else{
              $var=0;
             }
      $details=array(
                  array(0,0,0,0,0),
                  array(0,0,0,0,0),
                  array(0,0,0,0,0),
                  array(0,0,0,0,0),
                  array(0,0,0,0,0)
                 );
             $ite=0;
             $j=0;
       $result1 = $conn->query("SELECT * FROM cady");
      $count=$result1->num_rows;
      $savecount=$count;
      $cady=1;
      while($count>0){
      $sql="SELECT*FROM manages WHERE cno=$cady";
             $result=mysqli_query($conn,$sql) or die("failed to connect");
             $row=mysqli_fetch_array($result);
             if(!empty($row["routeno"] && !empty($row["did"]))){
             $routeno= $row["routeno"];
             $did= $row["did"];
             $drive1="SELECT * FROM info WHERE cno=$cady";
             $resultd1 = mysqli_query($conn,$drive1);
             $row1=mysqli_fetch_array($resultd1) or die("filed to connec");
             if(!empty($row1["currentloc"]) && !empty($row1["seatsavail"])){
             $cady1loc=$row1["currentloc"];
             $cady1seats=$row1["seatsavail"];
            $result1 = $conn->query("SELECT * FROM expectedtime WHERE routeno='$routeno' AND loc1='$currentloc'");
      $rows=$result1->num_rows;
      
            $result2 = $conn->query("SELECT * FROM expectedtime WHERE routeno='$routeno' AND loc1='$cady1loc'");
      $rows2=$result2->num_rows;
      if($rows!=0 && $rows2!=0){
         $time1 =0;
         $currentloc=$save;
    while($cady1loc!=$currentloc ){
    $ro="SELECT * FROM `expectedtime` WHERE (loc1='$cady1loc' && routeno=$routeno) ";
      $result=mysqli_query($conn,$ro);
      $row=mysqli_fetch_array($result) or die("faild1 to connec");
      $cady1loc=$row["loc2"] ;
        $time1=$time1+$row["time"];
          }

          $time1com =0;
             $currentloc=$save;
    while($currentloc!=$destination ){
    $rocom="SELECT * FROM `expectedtime` WHERE (loc1='$currentloc' && routeno=$routeno) ";
      $result=mysqli_query($conn,$rocom);
      $rowcom=mysqli_fetch_array($result) or die("faild to 1connec");
      $currentloc=$rowcom["loc2"] ;
        $time1com=$time1com+$rowcom["time"];
          }
          $details[$ite][0]=$cady;
          $details[$ite][1]=$time1;
          $details[$ite][2]=$time1com;
          $details[$ite][3]=$time1+$time1com;
          $details[$ite][4]=$cady1seats;
          
          $site=$ite;
          while($ite>0){
          if($var!=4){
              if($details[$ite][$var]<$details[$ite-1][$var]){
                $temp0=$details[$ite][0];
                $details[$ite][0]=$details[$ite-1][0];
                $details[$ite-1][0]=$temp0;
                $temp1=$details[$ite][1];
                $details[$ite][1]=$details[$ite-1][1];
                $details[$ite-1][1]=$temp1;
                $temp2=$details[$ite][2];
                $details[$ite][2]=$details[$ite-1][2];
                $details[$ite-1][2]=$temp2;
                $temp3=$details[$ite][3];
                $details[$ite][3]=$details[$ite-1][3];
                $details[$ite-1][3]=$temp3;
                $temp4=$details[$ite][4];
                $details[$ite][4]=$details[$ite-1][4];
                $details[$ite-1][4]=$temp4;
              }
            }else {
              if($details[$ite][$var]>$details[$ite-1][$var]){
                $temp0=$details[$ite][0];
                $details[$ite][0]=$details[$ite-1][0];
                $details[$ite-1][0]=$temp0;
                $temp1=$details[$ite][1];
                $details[$ite][1]=$details[$ite-1][1];
                $details[$ite-1][1]=$temp1;
                $temp2=$details[$ite][2];
                $details[$ite][2]=$details[$ite-1][2];
                $details[$ite-1][2]=$temp2;
                $temp3=$details[$ite][3];
                $details[$ite][3]=$details[$ite-1][3];
                $details[$ite-1][3]=$temp3;
                $temp4=$details[$ite][4];
                $details[$ite][4]=$details[$ite-1][4];
                $details[$ite-1][4]=$temp4;
              }

            }
              $ite=$ite-1;
            
      }
      $ite=$site+1;
        }
      } else{
          $rows=0; 
          $rows2=0;
        }
        }
        else{
          $rows=0; 
          $rows2=0;
        }
        $count=$count-1;
        $cady=$cady+1;
  }
?>
<body>
       <h1><?php echo $save." to ".$destination ?></h1>
  <table>     
  	 <?php if($ite!=0){echo '<tr> <th>'."CADY".'</th> <th>'."LOCATION".'</th><th>'."ARRIVAL TIME".'</th> <th> '."JOURNEY TIME".'</th> <th>'."TOTAL TIME".'</th> <th> '."AVAIL SEATS".'</th></tr>';} ?> 
  </table><br>
    <?php 
    while($j<$ite){   
      $cno=$details[$j][0];
         $sql="SELECT * FROM `info` WHERE cno=$cno";
         $result=mysqli_query($conn,$sql) or die("faild to 1connec");
      $row=mysqli_fetch_array($result) ;
      $location=$row["currentloc"] ;   
          echo '<table> <tr> <td>'.$details[$j][0].
           '</td><td>'.$location.'</td> <td>'. $details[$j][1]." min ".'</td>  <td>'.$details[$j][2]." min".'</td> <td>'.$details[$j][3]." min".'</td> <td>'. $details[$j][4].'</td> </tr> </table><br>';
          $j=$j+1;
         } 
          ?>
  <h1>
    <?php if($ite==0){
          echo "Cady service is currently unavailable from ".$currentloc." to ".$destination ;
        } ?>
  </h1>
</body>
<footer>
  <div><button><a href="cady.php"> BACK </a></button></div>
</footer>
</html>