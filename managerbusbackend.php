<?php 
      $did1 = filter_input(INPUT_POST, 'did1');
      $did2 = filter_input(INPUT_POST, 'did2');
      $did3 = filter_input(INPUT_POST, 'did3');
      $did4 = filter_input(INPUT_POST, 'did4');
      $stime1 = filter_input(INPUT_POST, 'stime1');
      $stime2 = filter_input(INPUT_POST, 'stime2');
      $stime3 = filter_input(INPUT_POST, 'stime3');
      $stime4 = filter_input(INPUT_POST, 'stime4');
      $rtime1 = filter_input(INPUT_POST, 'rtime1');
      $rtime2 = filter_input(INPUT_POST, 'rtime2');
      $rtime3 = filter_input(INPUT_POST, 'rtime3');
      $rtime4 = filter_input(INPUT_POST, 'rtime4');
            $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname= "test";
        $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            
            die('Connect Error('.mysqli_connect_errno().')' . mysqli_connect_error());
            }
        else{
            if( (empty($did1) || empty($did2) || $did1 != $did2) && (empty($did1) || empty($did3) || $did1 != $did3) && (empty($did1) || empty($did4) || $did1 != $did4) && (empty($did2) || empty($did3) || $did2 != $did3) &&(empty($did2) || empty($did4) || $did2 != $did4) &&(empty($did3) || empty($did4) || $did3 != $did4) ){
              $sqlb="SELECT * FROM bus";
        $resultb= $conn->query($sqlb);
             if(!empty($did1) ){
              $rowb=mysqli_fetch_assoc($resultb);
              $bno=$rowb["bno"];
            
            $sql="UPDATE bmanage SET bdid=$did1, mexpectedmovetime='$stime1', eexpectedmovetime='$rtime1'
                 WHERE bno='$bno'";
                 
               }
              else{
                $rowb=mysqli_fetch_assoc($resultb);
              $bno=$rowb["bno"];
            $sql="UPDATE bmanage SET bdid=NULL, mexpectedmovetime=NULL, eexpectedmovetime=NULL
                 WHERE bno='$bno'";
                 
              }
             if(!empty($did2)){
              $rowb=mysqli_fetch_assoc($resultb);
              $bno=$rowb["bno"];
            $sql2="UPDATE bmanage SET bdid=$did2,  mexpectedmovetime='$stime2', eexpectedmovetime='$rtime2'
                 WHERE bno='$bno'";
                 
               }
             else{
              $rowb=mysqli_fetch_assoc($resultb);
              $bno=$rowb["bno"];
            $sql2="UPDATE bmanage SET bdid=NULL, mexpectedmovetime=NULL, eexpectedmovetime=NULL
                 WHERE bno='$bno'";
                 
             }
             if(!empty($did3)){
              $rowb=mysqli_fetch_assoc($resultb);
              $bno=$rowb["bno"];
            $sql3="UPDATE bmanage SET bdid=$did3,  mexpectedmovetime='$stime3', eexpectedmovetime='$rtime3'
                 WHERE bno='$bno'";
                 
               }
             else{
              $rowb=mysqli_fetch_assoc($resultb);
              $bno=$rowb["bno"];
            $sql3="UPDATE bmanage SET bdid=NULL, mexpectedmovetime=NULL, eexpectedmovetime=NULL
                 WHERE bno='$bno'";
                 
             }
             if(!empty($did4)){
              $rowb=mysqli_fetch_assoc($resultb);
              $bno=$rowb["bno"];
            $sql4="UPDATE bmanage SET bdid=$did4,  mexpectedmovetime='$stime4', eexpectedmovetime='$rtime4'
                 WHERE bno='$bno'";
                 
               }
             else{
              $rowb=mysqli_fetch_assoc($resultb);
              $bno=$rowb["bno"];
            $sql4="UPDATE bmanage SET bdid=NULL, mexpectedmovetime=NULL, eexpectedmovetime=NULL
                 WHERE bno='$bno'";
                 
             }
            
             if($conn->query($sql) && $conn->query($sql2) && $conn->query($sql3) && $conn->query($sql4) ){
                
                    echo "<script>alert('Information Is Successfully Updated');window.location='managerbus.php' </script>";
             }
             else{
                echo "<script>alert('Error Updating.Try again');window.location='managerbus.php'</script>";
             }

            $conn->close();
        }
        else{
           echo "<script>alert('Single driver can not be assigned to more than one cadys ');window.location='managerbus.php'</script>";
        }
    }
        
      
 ?>