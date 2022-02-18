<?php
$SERVERNAME="localhost";
$username="root";
$PASSWORD="root";
$DBNAME="login";
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}
$conn= new mysqli($SERVERNAME,$username,$PASSWORD,$DBNAME);
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}
echo "Connection succesful";
$uname=$prnno=$email=$Phno="";
?>