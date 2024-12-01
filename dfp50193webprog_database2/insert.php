<?php
//insert.php
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
	$trn_date = date("Y-m-d H:i:s");
	$studnum = $_REQUEST['studnum'];
	$studname = $_REQUEST['studname'];
	$phone = $_REQUEST['phone'];
	$program = $_REQUEST['program'];
	$hpnm = $_REQUEST['hpnm'];
	$studpa = $_REQUEST['studpa'];
	$submittedby = $_SESSION["username"];
	$ins_query = "insert into new_record
	(`trn_date`, `studnum`, `studname`, `phone`, `program`, `hpnm`, `studpa`, 
	`submittedby`) values ('$trn_date', '$studnum', '$studname', '$phone', '$program',
	'$hpnm', '$studpa', '$submittedby')";
	mysqli_query($con,$ins_query) or die(mysqli_error());
	echo "<script >alert(\"Insert Record Successfully.\")</script>";
	echo "<script>
	setTimeout(function(){
		window.location.href='view.php';}, 100);
		</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Insert New Record</title>

<style>
.section6 {
	height: 750px;
	background-color: #ffa07a;
	background-image: url("image/6.jpg");
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
		    <a href="dashboard.php" style="color: black;"><span class="fa fa-home">&nbsp HOME &nbsp </span></a>
		  </li>
		  <li>
		    <a href="insert.php" class="active"><span class="fa fa-pencil-square-o">&nbsp INSERT NEW RECORD &nbsp </span></a>
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
    <div class="section6">
      <br>
      <div class="box6">
        <h1 style="text-align: center; font-size: 25px;">Insert New Record</h1>
		<form action="" method="post" name="insert">
		<center>
		  <input type="hidden" name="new" value="1"/>
		  <input type="text" name="studnum" placeholder="Enter Student No" required />
		  <input type="text" name="studname" placeholder="Enter Name" required />
		  <input type="text" name="phone" placeholder="Enter Phone Number" required />
		  <input type="text" name="program" placeholder="Enter Program" required />
		  <input type="text" name="hpnm" placeholder="Enter HPNM" required />
		  <input type="text" name="studpa" placeholder="Enter Student PA name" required /><br><br>
		  <input type="submit" name="submit" value="Submit" />
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