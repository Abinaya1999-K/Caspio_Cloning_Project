<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity=
   "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>

.form-control{

    margin:22px;
  
}

.form-group{
margin:45px;
 padding:22px 14px ;
 background-color:#D5E9F1;

}


button{


   
    float: right;
    margin-right: 50px;


}
    </style>



</head>

<body>
<form method="post" action ="validation.php">
  <div class="form-group">
    <label for="Name of the Document">New database </label>
    <input type="text" name="username" class="form-control" id="username" placeholder="create a Software Name">
  
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>  
</body>
</html>
