<?php
include "dbconnect.php";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>

      form{
         
        background-color:#194b87;
 
  align-content:center;
  padding: 11px 50px;
  margin:50px;
  font-size:26px;
  font-family:"serif";
 
  float:right;
  padding:2px 25px;
  margin-top: -13px;
    margin-right: 52px;
    align :
      }

 button{

 border-radius:12px;
 background-color:white;
 padding:5px 14px;
  margin:05px 10px;
  
  
 }

  .mail{

  margin: 12px 14px;
  padding:10px;
  


  }     

 .heading{
     margin: 0px  50px ;
  color:white;
     margin-top:0px;
 }

 #href{
padding:15px 24px; 
margin-right:75px 92px;
color:#e0f3f2d1;

 }

 .login{
 
    width:auto;
    background-color:#a4b0bd;
    box-shadow:8px  8px;
    padding:80px 50px;
    float:right;
    margin:50px;
    border-radius:22px;
  
 }

 #linkidd a:hover{
   color:#e0f3f2d1;

 }

.image {

   margin-right: 55px 165px;

}



   </style>
</head>
<div id="back">
<a href="sease_home.php"><img src="\SEASE\images\back-arrow.png" style="height:40px;width:40px;"></a>
</div>
    <div class="login" style="margin-top:25px"  >
    <form method="post" action="validation.php">
         <div class="heading">
    <center> <h7>LOGIN</h7></center>
</div>
<!-- <div class="image">
    <img src="./images/login.jpg" width="500px" height="500px">
</div> -->
     <div class="email">
        <input type="text" id="mail"  name="mail" class="mail" placeholder="Type Your Email here">
        <br>
        <input type="password" id="pass" name="password"     class="mail" placeholder="Password">
        <br>
        <input type='checkbox' onclick='handleClick(this);'>
        <br>
        <div  id="button">
        <button onclick=login() >Login</button>
        </div>
    </div>
</form>
    <div id="linkidd">
        <a href="register.php">Not yet Register? REGISTER NOW </a>
        <br>
<br>
        <a class="dforgot" href="forgot_password.php">Forgot Password?</a>
</div>
</div>





</body>
</html>



<script>
    function handleClick(cb) {
        
        var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


    
</script>
</html>