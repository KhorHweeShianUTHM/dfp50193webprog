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
	$status = "New Record Inserted Successfully. </br></br><a href='view.php'>View Insert Record</a>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
<title>Insert New Record</title>
</head>
<body>

<div class="form">
	<h1>Insert New Record</h1>
	<p><a href="dashboard.php">Dashboard</a> | 
	<a href="view.php">View Records</a> | 
	<a href="logout.php">Logout</a></p>
	
	<form action="" method="post" name="form">
		<input type="hidden" name="new" value="1"/>
		<div class="txt_field">
			<input type="text" name="studnum" placeholder="Enter Student No" required />
		</div>

		<div class="txt_field">
			<input type="text" name="studname" placeholder="Enter Name" required />
		</div>

		<div class="txt_field">
			<input type="text" name="phone" placeholder="Enter Phone Number" required />
		</div>

		<div class="txt_field">
			<input type="text" name="program" placeholder="Enter Program" required />
		</div>

		<div class="txt_field">
			<input type="text" name="hpnm" placeholder="Enter HPNM" required />
		</div>

		<div class="txt_field">
			<input type="text" name="studpa" placeholder="Enter Student PA name" required />
		</div>
		
		<input type="submit" name="submit" value="Submit" />
	</form>
	<span style="color:#FF0000; "><?php echo $status; ?></span>
</div>

</body>
</html>