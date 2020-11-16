<?php
     $did=filter_input(INPUT_POST, 'did');
     $password=filter_input(INPUT_POST, 'password');
     $location=filter_input(INPUT_POST, 'location');
     $availseats=filter_input(INPUT_POST, 'availseats');
      
if (!empty($did)) {
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="test";

      $conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
      if (mysqli_connect_error())
      {  
        echo "failed to connect";
      }
      else
      {
        $sql="SELECT*FROM `driver` WHERE did=$did ";
        $result= mysqli_query($conn,$sql) or die("failed to connect");
        $row= mysqli_fetch_array($result);
        if($password==$row["dpassword"]){
          #code..
          $result1 = $conn->query("SELECT * FROM manages WHERE did=$did ");
      $rows=$result1->num_rows;
      if($rows==1){
          $ro="SELECT*FROM `manages` WHERE did=$did ";
          $result1=mysqli_query($conn,$ro) or die("failed to connect");
          $row1= mysqli_fetch_array($result1);
             
             $cno=$row1["cno"];
          $change="UPDATE info SET currentloc='$location', seatsavail=$availseats
                 WHERE cno=$cno";
                 if($conn->query($change)){
                     echo "<script>alert('Information Is Successfully Updated');window.location='driverfrontend.php' </script>";
                
            }
            else{
                echo "<script>alert('Error Updating.Try again');window.location='driverfrontend.php'</script>";
                
            }
               }
               else{
                echo "<script>alert('You are currently off DUTY');window.location='login1.php'</script>";
                
               }
         }
         else{
              echo "<script>alert('Password Incorrect');window.location='driverfrontend.php'</script>";
         }
         
}

}
  
  

 ?>