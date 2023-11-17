
<?php

require "dbconnect.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

      /* .form{
         
        background-color:aqua;
 
  align-content:center;
  padding: 11px 50px;
  margin:  48px 70px;
  font-size:26px;
  font-family:"serif";
  border-radius:25px;
  float:right;
  padding:2px 25px;
  
      } */

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
 .register{
    margin:2px 15px; 
    width: auto;
    background-color:blue;
    box-shadow:8px  8px;
    padding:80px 50px;
    float:left;
    margin-left :37px;
 }

 #linkidd a:hover{
   color:#e0f3f2d1;

 }

.registerpic {
display:flex;
margin: 17px 77px;
 float:right;
 margin-left:12px;
 height:500px;
 width:700px;

}







   </style>
</head>
<div class="register" style="margin-top:25px"  >
    <form method="post" action="registerinsert.php">
         <div class="heading">
    <center> <h7>REGISTER FORM</h7></center>
   </div>

     <div class="register_form">
        <input type="text" id="mail" name="mail" class="mail" placeholder="Type Your Email here">
        <br>
        <input type="text" id="mobno"  name="mobno" class="mail" placeholder="Mobile no">
        <br>
        <input type="text" id="pswd" name="pswd"  class="mail" placeholder=" create Password">
        <br>
        <input type="text" id="cpswd"  name="cpswd"  class="mail" placeholder="confirm Password">
        <br>
        <div  id="button">
        <button>Register</button>
        </div>
    </div>
   
    </div> 
  
    <div id="linkidd">
        <a href="login.php">already Register? login now</a>
   </div>


   </form>

<div class="registerpic">
    <img src="/SEASE/images/login.jpg" width="1000px" height="500px">
</div> 



</body>
</html>



<script>
function register()
{
     
}
</script>
</html>
