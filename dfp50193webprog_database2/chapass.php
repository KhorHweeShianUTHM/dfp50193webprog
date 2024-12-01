<?php
//chapass.php
require("db.php");

if(isset($_POST['submit']))
{
	if(mysqli_query($con,"UPDATE users SET password='$_POST[password]' WHERE username='$_POST[username]'
	AND email='$_POST[email]' ;"))
	{
		echo "<script>alert(\"The Password Updated Successfully.\")</script>";
		echo "<script>
		setTimeout(function(){
			window.location.href='login.php';}, 500);
			</script>"; 
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Change Password</title>

<style>
.section3 {
	height: 600px;
	background-color: #ffa07a;
	background-image: url("image/3.jpg");
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
		  <a href="login.php" style="color: black;"><span class="fa fa-sign-in">&nbsp LOGIN &nbsp </span></a>
		</li>
		<li>
		  <a href="register.php" style="color: black;"><span class="fa fa-user">&nbsp REGISTER &nbsp </span></a>
		 </li>
	  </ul>
	</nav>
  </header>
  
  <section>
    <div class="section3">
      <br>
      <div class="box3">
        <h1 style="text-align: center; font-size: 25px;">Change Password</h1>
		<form action="" method="post" name="cpass">
		<center>
		  <input type="text" name="username" placeholder="Username" required />
		  <input type="email" name="email" placeholder="Email" required />
		  <input type="password" name="password" placeholder="New Password" required /><br><br>
		  <input name="submit" type="submit" value="Update" />
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

</body>
</html>