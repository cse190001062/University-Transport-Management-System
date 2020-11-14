<?php
     $bdid=filter_input(INPUT_POST, 'bdid');
     $password=filter_input(INPUT_POST, 'password');
     $currentlocation=filter_input(INPUT_POST, 'currentlocation');
     $status=filter_input(INPUT_POST, 'status');
     $nextlocation=filter_input(INPUT_POST, 'nextlocation');
     
if (!empty($bdid)) {
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="test";
        
       $conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
      if (mysqli_connect_error())
      {  
        echo "failed to connect";
      }
      else{
         $sql="SELECT*FROM `bdriver` WHERE bdid=$bdid ";
        $result= mysqli_query($conn,$sql) or die("failed to connect");
        $row= mysqli_fetch_array($result);
        if($password==$row["bdpassword"]){
          #code..
          $result1 = $conn->query("SELECT * FROM bmanage WHERE bdid=$bdid ");
         $rows=$result1->num_rows;
         if($rows==1){
         $ro="SELECT*FROM `bmanage` WHERE bdid=$bdid ";
          $result1=mysqli_query($conn,$ro) or die("failed to connect");
          $row1= mysqli_fetch_array($result1);
             
             $bno=$row1["bno"];
             $change="UPDATE `binfo` SET currentlocation='$currentlocation', status='$status', nextlocation='$nextlocation'
                 WHERE bno='$bno'";
                 if($conn->query($change)){
                     echo "<script>alert('Information Is Successfully Updated');window.location='busdriverfrontend.php' </script>";
            }
            else{
                echo "<script>alert('Error Updating.Try again');window.location='busdriverfrontend.php'</script>";
                
            }
         }else{
                echo "<script>alert('You are currently off DUTY');window.location='login1.php'</script>";
                
               }
          }
          else{
              echo "<script>alert('Password Incorrect');window.location='busdriverfrontend.php'</script>";
         }
      }

    }
?>