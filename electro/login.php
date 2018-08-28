

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="head.css" />
<link rel="stylesheet" href="login.css" />
    
</head>

<body>


<h1>&nbsp;&nbsp;Electronics<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bazar</h1>

<ul class="navbar card-2 light-pink">
  <li class="active">
      <a href="index.php">Home</a></li>

    
  <li class="products-click">
    <a onclick="myFunction()" href="#">Products <i class="fa fa-caret-down"></i></a>
    <div id="demo" class="products-content white card-4">
      <a href="Laptop.php">Laptop</a>
      <a href="#">Camera</a>
      <a href="addprodcuts">Smartphone</a>
        <a href="#">Others</a>
    </div>
  </li>
    
      <li><a href="#">Contacts</a></li>
      <li style="float:right"><a class="active" href="myaccount.php">My Account</a></li>

</ul>
    
<script>
function myFunction() {
    document.getElementById("demo").classList.toggle("show");
}
</script>

<h2> Log In</h2>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: myaccount.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username or password is incorrect !</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<div class="form">
<pre>
<form action="" method="post" name="login">
<label for="text"><b>Username</b></label>
<input type="text" name="username" placeholder="" required />
<label for="password"><b>Password</b></label>
<input type="password" name="password" placeholder="" required />

  <input name="submit" type="submit" value="Login" />

</pre>
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>


<?php } ?>


</body>
</html>
