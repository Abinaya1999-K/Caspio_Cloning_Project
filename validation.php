
<?php
require "dbconnect.php";


$username=$_POST["username"];


$sql= $conn->query("INSERT INTO `newapp` (`id`,`username`)VALUES(NULL,'$username')");

if($sql){
    echo '<script>alert("successfully")</script>'; 
    header("Location: applicationhome.php");
}else{
   
    echo '<script>alert("something wentrong")</script>'; 

}
?>