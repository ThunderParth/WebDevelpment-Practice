<?php
  include "Config.php";
  $prnno=$email=$uname=$Phno="";
  if($_SERVER["REQUEST_METHOD"]=="POST"){
      $uname=$_REQUEST["Username"];
      $email=$_REQUEST["email"];
      $prnno=$_REQUEST["prnno"];
      $Phno=$_REQUEST["Phno"];
      $sql= "INSERT into student(Username,email,prnno,Phnno) VALUES('$Username','$email','$prnno','$Phno')";
      if(mysqli_query($conn,$sql)){
          echo 'Connection successful';
      }
      else{
          echo "Error:".$sql."</br>".$conn->error;
      }
    }
    mysqli_close($conn);
?>

