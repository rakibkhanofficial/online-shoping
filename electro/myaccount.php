<?php

include("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>

<title>Welcome Home</title>
<link rel="stylesheet" href="head.css" />



    <title>E-Electronics</title>

    
    </head>
    <style>
      p{text-align: center}
    </style>
<body>




    <h1>&nbsp;&nbsp;Electronics<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bazar</h1>

<ul class="navbar card-2 light-pink">
  <li class="active">
      <a href="index.php">Home</a></li>

    
  <li class="products-click">
    <a onclick="myFunction()" href="#">Products <i class="fa fa-caret-down"></i></a>
    <div id="demo" class="products-content white card-4">
      <a href="#">Laptop</a>
      <a href="#">Camera</a>
      <a href="addproducts.php">Smartphone</a>
        <a href="index.php">Others</a>
    </div>
  </li>
    
      <li><a href="#">Contacts</a></li>
      <li style="float:right"><a class="active" href="myaccount.php">My Account</a></li>
      <li style="float:right"><a class="active" href="logout.php">Logout</a></li>

</ul>
    
<script>
function myFunction() {
    document.getElementById("demo").classList.toggle("show");
}
</script>


 <p>Welcome to <?php echo $_SESSION['username']; ?>!</p>   
</body>
</html>
