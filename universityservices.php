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
        width:20%;
       }
       h1{
        text-align: center;
       }
       button{
        width:120px;
        height: 40px;
        font-size: 25px;
        border-radius: 5px;
       } 
       div{
        text-align: right;
        padding-right: 30px;
        padding-top: 10px;
       } 
       .let{
        background-color:red;
       }
       body{
        background: url(lib.jpg);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
       }

    </style> 
</head>
<body>
    <?php 
    $dbusername="root";
    $dbpassword="";
    $dbname="test";
    $host="localhost";
      $conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
      if (mysqli_connect_error())
      {  
        die("failed to connect");
      }
      $sql="SELECT * FROM universityservices";
      if($result = $conn->query($sql)){
        echo '<h1> UNIVERSITY SERVICES </h1>';
        echo '<table class="let">
                <tr>
                  <td>SERVICE NAME</td>
                  <td>DRIVER ID</td>
                  <td>DRIVER NAME</td>
                  <td>DRIVER PHONE NUMBER</td>
                  <td>OFFICE PHONE NUMBER</td><br>
               
                </tr>
              </table>';
         while($row = $result->fetch_assoc()){
         $field1=$row["servicename"];
         $field2=$row["usdid"];
         $field3=$row["usdname"];
         $field4=$row["usdphoneno"];
         $field5=$row["officephoneno"];

         echo '<table>
                <tr>
                  <td>'.$field1.'</td>
                  <td>'.$field2.'</td>
                  <td>'.$field3.'</td>
                  <td>'.$field4.'</td>
                  <td>'.$field5.'</td><br>
               
                </tr>
              </table>';
       }

      $result->free();
    }

    ?> 

</body>
<footer>
     <div><button><a href="trans.php"> BACK </a></button></div>
</footer> 
</html>