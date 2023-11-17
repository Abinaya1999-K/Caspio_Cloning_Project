<?php

require "dbconnect.php";

 //session_start();
$mail=$_REQUEST["mail"];
$mobno=$_REQUEST["mobno"];
$pswd=$_REQUEST["pswd"];
$cpswd=$_REQUEST["cpswd"];



$sql=$conn->query("INSERT INTO `register` (email,mobileno,password,confirmpassword)
VALUES ('$mail','$mobno','$pswd', '$cpswd')");

echo "INSERT INTO `register` (email,mobileno,password,confirmpassword)
VALUES ('$mail','$mobno','$pswd', '$cpswd')";


?>

