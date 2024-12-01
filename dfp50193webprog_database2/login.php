<?php
//login.php
require("db.php");
session_start();

if(isset($_POST['submit']))
{
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	
	$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
	$result = mysqli_query($con,$query) or die(mysqli_error());
	$rows = mysqli_num_rows($result);
	if($rows==1)
	{
		$_SESSION['username'] = $username;
		echo "<script>alert(\"Login Successfully.\")</script>";
		echo "<script>
		setTimeout(function(){
			window.location.href='dashboard.php';}, 500);
		</script>"; 
	}else
	{
		echo "<script >alert(\"Username/password is incorrect.\")</script>";
		echo "<script>
		setTimeout(function(){
			window.location.href='login.php';}, 500);
		</script>";
	}
}else{
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Login</title>

<style>
.section2 {
	height: 600px;
	background-color: #ffa07a;
	background-image: url("image/2.jpg");
	background-repeat: no-repeat;
	background-size: 1400px 800px;
}
</style>

</head>

<body>

<div class="wrapper">
  <header>
    <div class="logo">
      <center><img src="image/logo.png"></center>
	  <h4>ONLINE RECORD STUDENT INFORMATION</h4>
	</div>
	
	<nav>
	  <ul>
	    <li>
		  <a href="index.php" style="color: black;"><span class="fa fa-home">&nbsp HOME &nbsp </span></a>
		</li>
		<li>
		  <a href="login.php" class="active"><span class="fa fa-sign-in">&nbsp LOGIN &nbsp </span></a>
		</li>
		<li>
		  <a href="register.php" style="color: black;"><span class="fa fa-user">&nbsp REGISTER &nbsp </span></a>
		 </li>
	  </ul>
	</nav>
  </header>

  <section>
    <div class="section2">
      <br>
      <div class="box2">
	    <h1 style="text-align: center; font-size: 25px;">User Login Form</h1>
		<form action="" method="post" name="login">
		  <center>
		  <input type="text" name="username" placeholder="Username" required />
		  <input type="password" name="password" placeholder="Password" required /><br><br>
		  <input name="submit" type="submit" value="Login" />
		  <p><br><br>
			 <a style="color:#00bfff;" href="chapass.php">Do you Forgot password?</a>
		  </p>
		  </center>
		</form>
	  </div>
	</div>
  </section>

  <footer>
    <p style="text-align: center;">
      <strong style="font-size: small;">Copyright (C) 2014 Privespa All Rights Reserved.</strong>
    </p>
  </footer>

</div>

<?php } ?>

</body>
</html>