<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
   <style>

*{
   

    
    font-family:serif;

}

form{
 background-color:#eff7ff;


}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

button {
  background-color: blue;
  color: white;
  padding: 14px 45px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
justify-content:center;  
}

input[type=submit]:hover {
  background-color: #fff;
  color:black;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}



a {
margin:auto;
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="mobile no">Mobile no</label>
    <input type="text" id="fname" name="firstname" placeholder="MOBILE NO">


    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="india">india</option>
    </select>
 
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <button class="button" id="button" >SUBMIT</button>

  </form>
  <a href="#" class="BACK">BACK </a>
</div>
 
</div>
</body>
</html>
