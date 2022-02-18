<?php
  include "config.php";

  $name = $email = $phno = $addr = "";

     if(isset($_GET['ID'])){
         $userId = $_GET['ID'];
         $sql = " DELETE from test WHERE `test`.`ID` = $userId";

        if(mysqli_query($conn, $sql)){
            echo '<h3> deleted successfully, click <a 
            href="./view.php"> 
            here </a>to see table</h3>';
        } 
        else{
            echo "Error: $sql". $conn->error;
        }
    }
    mysqli_close($conn);

?>