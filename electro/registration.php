

<!DOCTYPE html>
<html>
<head>
<title>Registration - Electronics Bazar</title>
<link rel="stylesheet" href="head.css" />

</head>
<style>
p {font-size: 60px;text-align: center;color: coral}
label {font-size:30px;color}    
    input {font-size: 25px;text-align: center} 
    
    div {
    width: 1000px;
    padding: 10px;
    border: 10px solid pink;
    margin: auto; 
}
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
    
<script>
function myFunction() {
    document.getElementById("demo").classList.toggle("show");
}
</script>
<p><b>Create Account</b></p>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
        $fullname = stripslashes($_REQUEST['fullname']);
		$fullname = mysqli_real_escape_string($con,$fullname);
        $mobilenumber = stripslashes($_REQUEST['mobilenumber']);
		$mobilenumber = mysqli_real_escape_string($con,$mobilenumber);
        $address = stripslashes($_REQUEST['address']);
		$address = mysqli_real_escape_string($con,$address);
        $username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (fullname,mobilenumber,address,username, password, email, trn_date) VALUES ('$fullname', '$mobilenumber', '$address', '$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<pre>
<form name="registration" action="" method="post">
<label for="fullname"><b>Full Name     </b></label>&nbsp;&nbsp;&nbsp;<input type="text" name="fullname" placeholder="Enter Full Name" required />

<label for="mobilenumber"><b>Mobile Number </b></label>&nbsp;&nbsp;&nbsp;<input type="text" name="mobilenumber" placeholder="Enter Mobile Number" required />

<label for="address"><b>Address       </b></label>&nbsp;&nbsp;&nbsp;<input type="text" name="address" placeholder="Enter Address" required />

<label for="username"><b>User Name      </b></label><input type="text" name="username" placeholder="Enter User Name" required />

<label for="email"><b>Email          </b></label><input type="email" name="email" placeholder="Enter Email" required />

<label for="password"><b>Password       </b></label><input type="password" name="password" placeholder="Enter Password" required />

                <input type="submit" name="submit" value="Register" />


</pre>
</form>

</div>
<?php } ?>
</body>
</html>
