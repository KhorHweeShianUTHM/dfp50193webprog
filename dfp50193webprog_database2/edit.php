<?php
require('db.php');
include("auth.php");

$id = $_REQUEST['id'];
$query = "SELECT * from new_record where id = '" . $id . "'";
$result = mysqli_query($con, $query) or die (mysqli_error());
$row = mysqli_fetch_assoc($result);

$status = "";
if(isset($_POST['new']) && ($_POST['new'])==1)
{
	$trn_date = date("Y-m-d H:i:s");
	$studnum = $_REQUEST['studnum'];
	$studname = $_REQUEST['studname'];
	$phone = $_REQUEST['phone'];
	$program = $_REQUEST['program'];
	$hpnm = $_REQUEST['hpnm'];
	$studpa = $_REQUEST['studpa'];
	$submittedby = $_SESSION["username"];
	
	$update = "update new_record set trn_date = '" . $trn_date . "', studnum = '" . $studnum . "', studname = '" . $studname . "',
	phone = '" . $phone . "', program = '" . $program . "', hpnm = '" . $hpnm . "', studpa = '" . $studpa . "', submittedby = '" . $submittedby . "'
	where id = '" . $id . "'";
	mysqli_query($con, $update) or die(mysqli_error());
	echo "<script >alert(\"Update Record Successfully.\")</script>";
	echo "<script>
	setTimeout(function(){
		window.location.href='view.php';}, 100);
		</script>";
}else{
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Update Record</title>

<style>
.section8 {
	height: 750px;
	background-color: #ffa07a;
	background-image: url("image/8.jpg");
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
    <div class="section8">
      <br>
      <div class="box8">
        <h1 style="text-align: center; font-size: 25px;">Update Record</h1>
		<form action="" method="post" name="edit">
		<center>
		  <input type="hidden" name="new" value="1"/>
		  <input name="id" type="hidden" value="<?php echo $row['id'];?>"/>
		  <input type="text" name="studnum" placeholder="Enter Matric Number" required value="<?php echo $row['studnum'];?>">
		  <input type="text" name="studname" placeholder="Enter Name" required value="<?php echo $row['studname'];?>">
		  <input type="text" name="phone" placeholder="Enter Phone Number" required value="<?php echo $row['phone'];?>">
		  <input type="text" name="program" placeholder="Enter Program" required value="<?php echo $row['program'];?>">
		  <input type="text" name="hpnm" placeholder="Enter HPNM" required value="<?php echo $row['hpnm'];?>">
		  <input type="text" name="studpa" placeholder="Enter Student PA name's" required value="<?php echo $row['studpa'];?>"><br><br>
		  <input name="submit" type="submit" value="Update"/>
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

<?php }?>

</body>
</html>