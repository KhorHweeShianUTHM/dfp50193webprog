<?php
//dashboard.php
require('db.php');
include("auth.php"); 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Dashboard - Secured Page</title>

<style>
.section5 {
	height: 500px;
	background-color: #ffa07a;
	background-image: url("image/5.jpg");
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
	
	<div class="nav">
	  <nav>
	    <ul>
	      <li>
		    <a href="dashboard.php" class="active"><span class="fa fa-home">&nbsp HOME &nbsp </span></a>
		  </li>
		  <li>
		    <a href="insert.php" style="color: black;"><span class="fa fa-pencil-square-o">&nbsp INSERT NEW RECORD &nbsp </span></a>
		  </li>
		  <li>
		    <a href="view.php" style="color: black;"><span class="fa fa-table">&nbsp VIEW RECORD &nbsp </span></a>
		   </li>
		  <li>
		    <a href="logout.php" style="color: black;"><span class="fa fa-sign-out">&nbsp LOGOUT &nbsp </span></a>
		  </li>
	    </ul>
	  </nav>
	</div>
  </header>

  <section>
    <div class="section5">
      <br>
      <div class="box5">
	    <br><br><h1>This is Dashboard Page</h1><br><br>
		<br><br><h2>Welcome to my website, <?php echo $_SESSION['username']; ?>.</h2><br><br>
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