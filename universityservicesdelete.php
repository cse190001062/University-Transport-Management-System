<?php
    $servicename=filter_input(INPUT_POST, 'servicename');
    $usdid=filter_input(INPUT_POST, 'usdid');
    $usdname=filter_input(INPUT_POST, 'usdname');
    $usdphoneno=filter_input(INPUT_POST, 'usdphoneno');
    $officephoneno=filter_input(INPUT_POST, 'officephoneno');

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
        if(!empty($servicename) && !empty($usdid) && !empty($usdname) && !empty($usdphoneno) && !empty($officephoneno) ){
      $result = $conn->query("SELECT * FROM universityservices WHERE servicename='$servicename' AND usdid='$usdid'");
      $rows=$result->num_rows;
  
    
    
        if($rows==1){
          $sql="DELETE FROM universityservices WHERE servicename='$servicename' AND usdid='$usdid' ";
        
          if($conn->query($sql)=='TRUE'){
           echo "<script>alert('Successfully deleted');window.location='muniversityservices.php' </script>";
          }
          else{
           echo "<script>('Error Connecting');window.location='muniversityservices.php'</script>";
          }
      }
      else{
      	echo "<script>alert('given values does not exist ');window.location='universityservicesdelete.html' </script>";
      }
      $conn->close();
      
      
  }
   else{
      echo"<script>alert('You must enter required details');window.location='universityservicesdelete.html' </script>";
    }
         
    }
   

?>