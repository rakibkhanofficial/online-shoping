
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="head.css" />

</head>
    <style>
        img {text-align: left}
    </style>
<body>
    <h1>&nbsp;&nbsp;Electronics<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bazar
    <a href="cart.php">
  <img src="cart.png" alt="cart" style="width:42px;height:50px;border:0;"align="right">
</a>
</h1>
<ul class="navbar card-2 light-pink">
  <li class="active">
      <a href="index.php">Home</a></li>

    
  <li class="products-click">
    <a onclick="myFunction()" href="#">Products <i class="fa fa-caret-down"></i></a>
    <div id="demo" class="products-content white card-4">
      <a href="Laptop.php">Laptop</a>
      <a href="camera.php">Camera</a>
      <a href="smartphone.php">Smartphone</a>
        <a href="others.php">Others</a>
    </div>
  </li>
    
      <li><a href="contacts.php">Contacts</a></li>
      <li style="float:right"><a class="active" href="myaccount.php">My Account</a></li>

</ul>
    
<script>
function myFunction() {
    document.getElementById("demo").classList.toggle("show");
}
</script>
    

</body>

</html>