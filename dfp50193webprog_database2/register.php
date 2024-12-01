<?php
//register.php
include "db.php";

if(isset($_POST['submit']))
{
	$count=0;
	
	$sql="SELECT username from `users`";
	$res=mysqli_query($con,$sql);
	
	while($row=mysqli_fetch_assoc($res))
	{
		if($row['username']==$_POST['username'])
		{
			$count=$count+1;
		}
    }
	
	if($count==0)
    {
		mysqli_query($con,"INSERT INTO `USERS` VALUES('$_POST[first]', '$_POST[last]', '$_POST[email]', '$_POST[username]', '$_POST[password]');");
		echo "<script>alert(\"Registration Successfully.\")</script>";
		echo "<script>
		setTimeout(function(){
			window.location.href='login.php';}, 500);
			</script>"; 
	} else {
		echo "<script>alert(\"The username already exist.\")</script>";
		echo "<script>
		setTimeout(function(){
			window.location.href='register.php';}, 500);
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

<title>Register</title> 
 
<style>
.section4 {
	height: 700px;
	background-color: #ffa07a;
	background-image: url("image/4.jpg");
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
		  <a href="register.php" class="active"><span class="fa fa-user">&nbsp REGISTER &nbsp </span></a>
		 </li>
	  </ul>
	</nav>
  </header>
  
  <section>
    <div class="section4">
      <br>
      <div class="box4">
        <h1 style="text-align: center; font-size: 25px;">Register</h1>
		<form action="" method="post" name="register">
		<center>
		  <input type="text" name="first" placeholder="First Name" required />
		  <input type="text" name="last" placeholder="Last Name" required />
		  <input type="email" name="email" placeholder="Email" required />
		  <input type="text" name="username" placeholder="Username" required />
		  <input type="password" name="password" placeholder="Password" required /><br><br>
		  <input name="submit" type="submit" value="Sign Up" />
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