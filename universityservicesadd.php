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
      $result = $conn->query("SELECT * FROM universityservices WHERE servicename='$servicename' AND usdid='$usdid' ");
      $rows=$result->num_rows;
  
        if($rows==0){
          $sql="INSERT INTO `universityservices` (`servicename`,`usdid`,`usdname`,`usdphoneno`,`officephoneno`) VALUES('$servicename','$usdid','$usdname','$usdphoneno','$officephoneno')";
        
          if($conn->query($sql)=='TRUE'){
           echo "<script>alert('Successfully added');window.location='muniversityservices.php' </script>";
          }
          else{
           echo "<script>('Error Connecting');window.location='muniversityservices.php'</script>";
          }
      }
      else{
      	echo "<script>alert('given values can not be added');window.location='universityservicesadd.html' </script>";
      }
      $conn->close();
      
       
  }else{
      echo"<script>alert('You must enter required details');window.location='universityservicesadd.html' </script>";
    }
         
    }
   

?>