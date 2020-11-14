<?php
    $servicename=filter_input(INPUT_POST, 'servicename');
    $usdid=filter_input(INPUT_POST, 'usdid');
    $usdname=filter_input(INPUT_POST, 'usdname');
    $usdphoneno=filter_input(INPUT_POST, 'usdphoneno');
    $officephoneno=filter_input(INPUT_POST, 'officephoneno');
    $newservicename=filter_input(INPUT_POST, 'newservicename');
    $newusdid=filter_input(INPUT_POST, 'newusdid');
    $newusdname=filter_input(INPUT_POST, 'newusdname');
    $newusdphoneno=filter_input(INPUT_POST, 'newusdphoneno');
    $newofficephoneno=filter_input(INPUT_POST, 'newofficephoneno'); 

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
        if(!empty($servicename) && !empty($usdid) && !empty($usdname) && !empty($usdphoneno) && !empty($officephoneno) && !empty($newservicename) && !empty($newusdid) && !empty($newusdname) && !empty($newusdphoneno) && !empty($newofficephoneno) ){
      $result = $conn->query("SELECT * FROM universityservices WHERE servicename='$servicename' AND usdid='$usdid' AND usdname='$usdname' AND usdphoneno='$usdphoneno' AND officephoneno='$officephoneno'");
      $rows=$result->num_rows;

      $result1 = $conn->query("SELECT * FROM universityservices WHERE servicename='$newservicename' AND usdid='$newusdid' ");
      $rows1=$result1->num_rows;
  
    
        if($rows==1){
        	
        if($rows1==0){
          $sql="UPDATE universityservices SET servicename='$newservicename', usdid='$newusdid', usdname='$newusdname', usdphoneno='$newusdphoneno', officephoneno='$newofficephoneno'
                 WHERE servicename='$servicename', usdid='$usdid', usdname='$usdname',usdphoneno='$usdphoneno', officephoneno='$officephoneno'";
        
          if($conn->query($sql)=='TRUE'){
           echo "<script>alert('Successfully edited');window.location='muniversityservices.php' </script>";
          }
          else{
           echo "<script>('Error Connecting');window.location='muniversityservices.php'</script>";
          }
      }
      else{
      	echo "<script>alert('Can not be updated with given values');window.location='universityservicesedit.html' </script>";
      }
      }
         else{
         	echo "<script>alert('There does not exist row you wanted to edit');window.location='universityservicesedit.html' </script>";
         }
         $conn->close();
    
  }
   else{
      echo"<script>alert('You must enter required details');window.location='universityservicesedit.html' </script>";
    }
}
?>