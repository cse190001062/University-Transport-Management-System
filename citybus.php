<!DOCTYPE html>
<html>
<head>
     <title>Checking</title>
      <style> 
       table{
          border: 1px solid black;
          border-radius: 15px;
          padding: 20px;
          width:100%;
          background-color: green;
          color:white; 
        }
       tr{
        text-align: center;
       }
       td, th{
        width:33%;
       }
      h1{
        text-align: center;
       }
      body{
        background-color: skyblue;
       } 
      div{
        text-align: right;
        padding-right: 30px;
        padding-top: 10px;
       }
       button{
        width:100px;
        height: 40px;
        font-size: 25px;
        border-radius: 5px;
       } 
      </style> 
</head>
<body>
    <?php 
    $dbusername="root";
    $dbpassword="";
    $dbname="test";
    $host="localhost";
    date_default_timezone_set('Asia/Calcutta');
    $current_time=date('h:i:s a');
      $conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
      if (mysqli_connect_error())
      {  
        die("failed to connect");
      }
      $sql="SELECT * FROM citybus";
      if($result = $conn->query($sql)){
        echo '<h1> CITY BUS SERVICE  </h1>';
        echo '<table>
                <tr>
                  <td>'."BUSNO".'</td>
                  <td>'."TIME AT ISTITUTE".'</td>
                  <td>'."TIME AT BHAWARKUA".'</td><br>
               
                </tr>
               </table>';
         while($row = $result->fetch_assoc()){
         $field1=$row["busno"];
         $field2=$row["time"];
         $field3=$row["rtime"];
         if($field2>$current_time){
         echo '<table>
                <tr>
                  <td>'.$field1.'</td>
                  <td>'.$field2.'</td>
                  <td>'.$field3.'</td><br>
               
                </tr>
               </table>';
             }
       }

      $result->free();
    }

    ?> 
</body>
<footer>
     <div><button><a href="trans.php"> BACK </a></button></div>
</footer>  

</html>