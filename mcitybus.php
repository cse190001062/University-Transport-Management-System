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
      button{
        width:120px;
        height: 40px;
        font-size: 25px;
        border-radius: 5px;
       }  
      div{
        text-align: center;
        padding-right: 30px;
        padding-top: 10px;
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
      $sql="SELECT * FROM citybus";
      if($result = $conn->query($sql)){
        echo '<h1> MANAGE CITY BUS SERVICE  </h1>';
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
          
         echo '<table>
                <tr>
                  <td>'.$field1.'</td>
                  <td>'.$field2.'</td>
                  <td>'.$field3.'</td><br>
               
                </tr>
               </table>';
       }

      $result->free();
    }

    ?> 

</body>

<footer>
   <div> <button><a href=./edit.html> EDIT </a></button>
    <button><a href=./add.html> ADD </a></button>
    <button><a href=./delete.html>DELETE</a></button>
   </div> 
</footer>
</html>