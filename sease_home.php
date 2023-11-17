<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    

    <title>SEASE</title>
<style>
*{
margin:0;
padding:0;
list-style:none;
text-decoration:none;


}

nav{

height:80px;
background-color:white;
top:23px;


}
    

.logo{

    left:16px;
    font-size:32px;
    font-family:'serif';
  width: 150px;
  position:absolute;
  top:17px;
}


nav  ul li{
float:right;
margin-right:25px;
display:inline-block;
margin:0px 15px;
line-height:80px;
position:relative;
text-transform:uppercase;

}


nav li{
    
}

#login{

padding:8px 22px;
color:white;
font-weight:18px;
background-color:#002db3;
cursor:pointer;
size:24px;

border-radius:18px;

}

section{
    float:left;
    margin:88px  63px;

}

#startfree {

    margin-top:20px;
    margin:15px 56px ;
    border-radius: 33px;
    padding: 8px 85px;
    background-color:blue;
    color:white;
    cursor:pointer;
    position:absolute;
    top:400px;
  left:39px;
    
}


.product-demo{
  justify-content:left;

}
h1{
    display:flex;
 flex-direction:row;
 font-size:43px;
 float:left;
 margin:13px;
 line-height:44px;
}


.p{
    position:absolute;
    line-height:54px;
    margin:87px;
    direction:flex;
  margin-left:20px;
  padding:18px 1px;

    
}

.main{
  border-radius: 2px;
 margin-left:222px;
}

.title-pic{
    display:flex;
    direction:row;

}


.information{

    row-gap:20px;
}


    


nav  ul li:hover {
  color: orange;
}


#login a:hover{

  background-color:#457b9d;
}



</style>




</head>

<body>
  <nav>
    <div class=logo > SEASE </div>
<ul>
<li><a href="./contact.php">Contact</a></li>
<li><a href="#">Pricing</a></li>
<li><a href="#">Career</a></li>
<li><a href="#">Platform</a></li>


<li><button  id="login" onclick=login() >LOGIN</button></li>
</ul>
</nav>

<section>

    <div class="information">
        <div class="title-pic">
               <h1> Create Custom Cloud<br>
                 Applications Fast</h1>
            
        <div class="p" >

        <p > Build multi-user apps, workflows and dashboards with little to no code.</p>
        
</div>


          <div class="main">
          <img src="./loginpage/images/main.jpg"  style="border-radius: 22px"; width="350" height="345">
          </div>

</div>
           <div class="startfree">
            <button id="startfree" onclick=free()   >Try Free</button>
            <a href="" style="margin-right:200px" class="product-demo">get a product demo</a>
</div>

</div>

</div>
</section>

 <script>

 function login()
 {


window.location.href="login.php";


 }







    </script>

</body>

</html>
