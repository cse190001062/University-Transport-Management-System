<?php 
      $did1 = filter_input(INPUT_POST, 'did1');
      $routeno1 = filter_input(INPUT_POST, 'routeno1');
      $did2 = filter_input(INPUT_POST, 'did2');
      $routeno2 = filter_input(INPUT_POST, 'routeno2');
      $did3 = filter_input(INPUT_POST, 'did3');
      $routeno3 = filter_input(INPUT_POST, 'routeno3');
      $did4 = filter_input(INPUT_POST, 'did4');
      $routeno4 = filter_input(INPUT_POST, 'routeno4');
      $did5 = filter_input(INPUT_POST, 'did5');
      $routeno5 = filter_input(INPUT_POST, 'routeno5');

            $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname= "test";
        $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            
            die('Connect Error('.mysqli_connect_errno().')' . mysqli_connect_error());
            }
        else{
            if( (empty($did1) || empty($did2) || $did1 != $did2) && (empty($did1) || empty($did3) || $did1 != $did3) && (empty($did1) || empty($did4) || $did1 != $did4) && (empty($did1) || empty($did5) || $did1 != $did5) &&(empty($did2) || empty($did3) || $did2 != $did3) &&(empty($did2) || empty($did4) || $did2 != $did4) &&(empty($did2) || empty($did5) || $did2 != $did5) &&(empty($did3) || empty($did4) || $did3 != $did4) &&(empty($did3) || empty($did5) || $did3 != $did5) &&(empty($did4) || empty($did5) || $did4 != $did5) ){

            $sql="UPDATE `manages` SET did = NULL, routeno = NULL WHERE cno=1 OR cno=2 OR cno=3 OR cno=4 OR cno=5";
                 $conn->query($sql);
            
              if(!empty($did1) && !empty($routeno1)){
            $sql1="UPDATE `manages` SET did='$did1', routeno=$routeno1
                 WHERE cno=1";
                 
               }
               else{
                 $sql1="UPDATE `manages` SET did=NULL, routeno=NULL
                 WHERE cno=1";
               }
             if(!empty($did2) && !empty($routeno2)){
            $sql2="UPDATE `manages` SET did=$did2, routeno=$routeno2
                 WHERE cno=2";
                 
               }
               else{
                $sql2="UPDATE `manages` SET did=NULL, routeno=NULL
                 WHERE cno=2";
               }
             
             if(!empty($did3) && !empty($routeno3)){
            $sql3="UPDATE `manages` SET did=$did3, routeno=$routeno3
                 WHERE cno=3";
                 
               }
               else{
                $sql3="UPDATE `manages` SET did=NULL, routeno=NULL
                 WHERE cno=3";
               }
             
             if(!empty($did4) && !empty($routeno4)){
            $sql4="UPDATE `manages` SET did=$did4, routeno=$routeno4
                 WHERE cno=4";
                 
               }
               else{
                $sql4="UPDATE `manages` SET did=NULL, routeno=NULL
                 WHERE cno=4";
               }
             
             if(!empty($did5) && !empty($routeno5)){
            $sql5="UPDATE `manages` SET did=$did5, routeno=$routeno5
                 WHERE cno=5";
                 
               }
             else{
              $sql5="UPDATE `manages` SET did=NULL, routeno=NULL
                 WHERE cno=5";
             }
             
             if($conn->query($sql1) && $conn->query($sql2) && $conn->query($sql3) && $conn->query($sql4) && $conn->query($sql5)){
                
                    echo "<script>alert('Information Is Successfully Updated');window.location='managerhome.php' </script>";
             }
             else{
                echo "<script>alert('Error Updating.Try again');window.location='manager.php'</script>";
             }

            $conn->close();
        }
        else{
           echo "<script>alert('Single driver can not be assigned to more than one cadys ');window.location='manager.php'</script>";
        }
    }
        
      
 ?>