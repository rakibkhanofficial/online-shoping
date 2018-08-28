<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="head.css" />
    <link rel="stylesheet" href="gallery.css" />
    <link rel="stylesheet" href="view.css" />



</head>
    <style>
    p {text-align: center;color: coral}
    </style>
<body>
    <h1>&nbsp;&nbsp;Electronics<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bazar</h1>

<ul class="navbar card-2 light-pink">
  <li>
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
    <p><b><u>Laptops</u></b><p>
    
    
<script>
function myFunction() {
    document.getElementById("demo").classList.toggle("show");
}
</script>

    
    
  <div class="gallery">
  <a target="_blank" href="predator.jpg">
    <img src="predator.jpg" alt="Acer Preditor 21x" width="300" height="200">
  </a>
  <div class="desc">Acer Predator 21 X Core i7 7th Gen<br><button onclick="document.getElementById('id01').style.display='block'">View Details</button></div>
</div>

<div class="gallery">
  <a target="_blank" href="s46c.jpg">
    <img src="s46c.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">ASUS S46C Series Ultrabook i7<br><button onclick="document.getElementById('id02').style.display='block'">View Details</button> </div>
</div>

<div class="gallery">
  <a target="_blank" href="hpx360.jpg">
    <img src="hpx360.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc"> HP Pavilion <br> x360<br><button onclick="document.getElementById('id03').style.display='block'">View Details</button></div>
</div>

<div class="gallery">
  <a target="_blank" href="dell5521.jpg">
    <img src="dell5521.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Dell Inspiron 15R 5521 <br> <button onclick="document.getElementById('id04').style.display='block'">View Details</button></div>
</div>
					
    

    
    <!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">Close</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
<p>Acer Predator 21 X Gaming Laptop Information</p>
Brand	Acer
Series	NH.Q1RAA.001
Colour	Black
Item Height	8.3 Centimeters
Item Width	31.4 Centimeters
Screen Size	21 Inches
Maximum Display Resolution	2560 x 1080 Pixels
Item Weight	8.5 Kg
Product Dimensions	56.8 x 31.4 x 8.3 cm
Batteries:	1 Lithium ion batteries required. (included)
Item model number	NH.Q1RAA.001
Processor Brand	Intel
Processor Type	Core i7
Processor Speed	2.9 GHz
Processor Count	4
RAM Size	64 GB
Maximum Memory Supported	64 GB
Hard Drive Size	1000 GB
Hard Disk Technology	Hybrid Drive, SATA
Hard Drive Interface	Serial ATA
Graphics Coprocessor	GTX 1080
Graphics Chipset Brand	NVIDIA
Graphics Card Description	Dedicated
Graphics Card Ram Size	16 GB
Number of HDMI Ports	1
Optical Drive Type	None
Operating System	Windows 10 Home
Average Battery Life (in hours)	3 Hours
Lithium Battery Energy Content	60 Watt Hours
Lithium battery Weight	1 Grams
Number of Lithium Ion Cells	8
Included Components	Laptop, 2 AC Adapter, Power Cord, Case

      </div>
    </div>
  </form>
</div>
    
    

<!-- The Modal (contains the Sign Up form) -->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">Close</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <p>ASUS S46C Series Ultrabook i7 Information</p>
Intel Core i7-3517U (1.9GHz), 6G DDR3, 1TB 5400 RPM + 24G SSD, Windows 8 (64 bit), Nvidia 635M 2G
Black, 14.1-Inch HD (1366x768), DL DVD±RW/CD-RW, 802.11BGN, HD Camera, Bluetooth 4.0, 4 Cell 2950 (5.4 Hours)
Instant On, VGA port, LAN, 2x USB 2.0, 1x USB 3.0, 1x HDMI, SD only
4.64 lb, dimension 13.7-Inch x 9.6-Inch x 1.2-Inch
2YR Global/1YR Accidental Damage/30-Day Zero Bright Dot/2-way FREE shipping/24-7 tech support
Intel Core i7-3517U (1.9GHz), 6G DDR3, 1TB 5400 RPM + 24G SSD, Windows 8 (64 bit), Nvidia 635M 2G
Black, 14.1-Inch HD (1366x768), DL DVD±RW/CD-RW, 802.11BGN, HD Camera, Bluetooth 4.0, 4 Cell 2950 (5.4 Hours)
Instant On, VGA port, LAN, 2x USB 2.0, 1x USB 3.0, 1x HDMI, 1x DisplayPort, SD only
4.64 lb, dimension 13.7-Inch x 9.6-Inch x 1.2-Inch
2YR Global/1YR Accidental Damage/30-Day Zero Bright Dot/2-way FREE shipping/24-7 tech support

      </div>
    </div>
  </form>
</div>


<!-- The Modal (contains the Sign Up form) -->
<div id="id03" class="modal">
  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">Close</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <p>HP Pavilion x360 Laptop Information</p>
Brand	HP
Series	Pavilion x360
Colour	Natural Silver
Item Height	20 Millimeters
Item Width	22.7 Centimeters
Screen Size	14 Inches
Notebook Display Technology	LED
Screen Resolution	1920 x 1080 Full HD (1080p) Touchscreen
Maximum Display Resolution	1080p Full HD
Item Weight	1.72 Kg
Product Dimensions	33.5 x 22.7 x 2 cm
Batteries:	1 Lithium ion batteries required. (included)
Item model number	HP Pavilion x360 - 14-BA077TU
Processor Brand	Intel
Processor Type	Core i3
Processor Speed	2.7 GHz
Processor Count	4
RAM Size	4 GB
Memory Technology	DDR4
Computer Memory Type	DDR4 SDRAM
Maximum Memory Supported	12 GB
Hard Drive Size	1 TB
Hard Disk Technology	Serial ATA
Hard Drive Interface	Solid State
Audio Details	Headphones
Speaker Description	B&O PLAY, dual speakers, HP Audio Boost
Graphics Coprocessor	IntelUHD Graphics 620
Wireless Type	801.11 AC
Number of USB 3.0 Ports	2
Number of HDMI Ports	1
Wattage	41 Watts
Hardware Platform	PC
Operating System	Windows
Lithium Battery Energy Content	41 Watt Hours
Lithium battery Voltage	11.55 Volts
Lithium battery Weight	0.85 Grams
Number of Lithium Ion Cells	4
Number of Lithium Metal Cells	1
Included Components	Laptop, HP Active Inking Pen, Battery, AC Adapter, User Guide and Manuals

      </div>
    </div>
  </form>
</div>


<!-- The Modal (contains the Sign Up form) -->
<div id="id04" class="modal">
  <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">Close</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <p>Dell Inspiron 15R 5521 laptop Information</p>
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
