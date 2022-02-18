<?php
$SERVERNAME="localhost";
$username="root";
$PASSWORD="root";
$DBNAME="login";
$conn= new mysqli($SERVERNAME,$username,$PASSWORD,$DBNAME);
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}
echo "Connection succesful";
$uname=$prnno=$email=$Phno="";
?>