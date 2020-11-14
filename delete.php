<?php
    $busno=filter_input(INPUT_POST, 'busno');
    $time=filter_input(INPUT_POST, 'time');

    $dbusername="root";
    $dbpassword="";
    $dbname="test";
    $host="localhost";
      $conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
      if (mysqli_connect_error())
      {  
        die("failed to connect");
      }
      else{
        if(!empty($busno) && !empty($time) ){
      $result = $conn->query("SELECT * FROM citybus WHERE time='$time'");
      $rows=$result->num_rows;
  
    
    
        if($rows==1){
          $sql="DELETE FROM citybus WHERE busno='$busno' AND time='$time'";
        
          if($conn->query($sql)=='TRUE'){
           echo "<script>alert('Successfully deleted');window.location='mcitybus.php' </script>";
          }
          else{
           echo "<script>('Error Connecting');window.location='mcitybus.php'</script>";
          }
      }
      else{
      	echo "<script>alert('given values does not exist ');window.location='delete.html' </script>";
      }
      $conn->close();
      
      
  }
   else{
      echo"<script>alert('You must enter required details');window.location='delete.html' </script>";
    }
         
    }
   

?>