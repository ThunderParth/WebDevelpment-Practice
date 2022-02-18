<?php
  include "Config.php";
  $prnno=$email=$uname=$Phno="";
  if($_SERVER["REQUEST_METHOD"]=="POST"){
      $uname=$_REQUEST["uname"];
      $email=$_REQUEST["email"];
      $prnno=$_REQUEST["prnno"];
      $Phno=$_REQUEST["Phno"];
      $sql= "INSERT into students(uname,email,prnno,Phno) VALUES('$uname','$email','$prnno','$Phno')";
      if(mysqli_query($conn,$sql)){
          echo 'Connection successful';
      }
      else{
          echo "Error:".$sql."</br>".$conn->error;
      }
    }
    mysqli_close($conn);
?>

