<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity=
    "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    <title>Applications</title>
    <style>

body{

    font-family: serif;



}






h1
{
  background-color: rgb(157 200 237);
  margin:0px;
  padding:10px;
}
     button{
      float: left;
    margin-top: 25px;
    padding-left: 5px;
    padding-top: 5px;
    padding-right: 5px;
    padding-bottom: 5px;
}

  .modal-body{
    float:left;
  }
      
.mysql_png{

height:50px;
width:50px;


}
.mysql_png1{

height:50px;
width:50px;


}
  
#allset
{

float:right;
padding:5px;
font-family:serif;
margin:12px;
}
#newapp
{


float:right;
padding:5px;
font-family:serif;
margin:12px;


}

table {
  border-collapse: collapse;
  width: 50%;
}

 th ,tr{
  padding: 5px;
  text-align: left;
  border-bottom: 1px solid #DDD;
}

td:hover {background-color: #D6EEEE;}


    </style>
</head>

<body>
<center> <h1> Applications </h1>   <center>



    <form>
  <div class="container">
 
  <!-- Trigger the modal with a button -->
  <button type="button" id="newapp" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">New App</button>
  <button type="button"  id="allset"            class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">All Assets</button>

    </div>
    
    
    

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font:serif">ASSET CREATION</h4>
        </div>
        

     <div class="modal-body"style="float:left" >
        <p style="float:left">connect with Database</p>
        <a href="withsql.php"><img src= "\SEASE\images\mysql.png" class="mysql_png1"></a>
        </div>
        <div class="modal-body"style="float:right" >
        <p style="float:left">create new blank database</p>
        <a href="newsql.php"> <img src= "\SEASE\images\new.png" class="mysql_png"></a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div> 
    </div>
  </div>


  <div id="Report" class="tabcontent">
 

 
 <div class ="a">
 <table class="table">
  
   <tbody>
     
 <?php 
 require('dbconnect.php');
 $s1=0;
 $query =mysqli_query( $conn,"select * from  newapp");
 while
   ($row=mysqli_fetch_array($query))
 {
   $s1++;
 ?>
 <tr>
 
 
 <td> <a href ="$username"></a><?php echo $row['username'] ; ?> </td>
 
 </tr>
 
 <?php } ?>
 
  
   </tbody>
 </table>
 </div>
 </div>
 



</body>
</html>






