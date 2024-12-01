<?php
//index.php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Welcome Home</title>

<style>
.section1 {
	height: 500px;
	background-color: #ffa07a;
	background-image: url("image/1.jpg");
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
		  <a href="index.php" class="active"><span class="fa fa-home">&nbsp HOME &nbsp </span></a>
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
    <div class="section1">
      <br>
      <div class="box1">
	    <br><br><h1>This is index page.</h1><br><br>
		<br><br><h2>Welcome to my website.</h2><br><br>
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