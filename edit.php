<?php
    $busno=filter_input(INPUT_POST, 'busno');
    $time=filter_input(INPUT_POST, 'time');
    $rtime=filter_input(INPUT_POST, 'rtime');
    $newbusno=filter_input(INPUT_POST, 'newbusno');
    $newtime=filter_input(INPUT_POST, 'newtime');
    $rnewtime=filter_input(INPUT_POST, 'rnewtime');

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
        if(!empty($busno) && !empty($time) && !empty($newbusno) && !empty($newtime)){
      $result = $conn->query("SELECT * FROM citybus WHERE busno='$busno' AND time='$time'");
      $rows=$result->num_rows;

      $result1 = $conn->query("SELECT * FROM citybus WHERE time='$newtime'");
      $rows1=$result1->num_rows;
  
    
        if($rows==1){
        	
        if($rows1==0){
          $sql="UPDATE citybus SET busno='$newbusno', time='$newtime', rtime='$rnewtime'
                 WHERE busno='$busno' AND time='$time'";
        
          if($conn->query($sql)=='TRUE'){
           echo "<script>alert('Successfully edited');window.location='mcitybus.php' </script>";
          }
          else{
           echo "<script>('Error Connecting');window.location='mcitybus.php'</script>";
          }
      }
      else{
      	echo "<script>alert('Can not be updated with given values');window.location='edit.html' </script>";
      }
      }
         else{
         	echo "<script>alert('There does not exist row you wanted to edit');window.location='edit.html' </script>";
         }
         $conn->close();
    
  }
   else{
      echo"<script>alert('You must enter required details');window.location='edit.html' </script>";
    }
}
?>