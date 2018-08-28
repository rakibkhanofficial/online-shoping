
      
      
      
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="head.css" />
    <link rel="stylesheet" href="view.css" />

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
    
<button onclick="document.getElementById('id01').style.display='block'">View Details</button>

<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">Close</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <p>Dell Inspiron 15R 5521 15.6-inch Laptop Information</p>
Technical Details
Brand	Dell
Series	Inspiron
Colour	Black
Screen Size	15.6 Inches
Maximum Display Resolution	1366x768
Item Weight	3.2 Kg
Package Dimensions	49.4 x 33.2 x 9 cm
Item model number	15R 5521
Processor Brand	Intel
Processor Type	Core i5 3317U
Processor Speed	2.6 GHz
RAM Size	4 GB
Hard Drive Size	500 GB
Hard Disk Technology	Mechanical Hard Drive
Graphics Coprocessor	ATI Radeon
Graphics Card Ram Size	2
Optical Drive Type	DVD+/-RW
Hardware Platform	PC
Operating System	Windows 8
Average Battery Life (in hours)	4

      </div>
    </div>
  </form>
</div>
</body>

</html>