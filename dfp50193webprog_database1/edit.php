<?php
require('db.php');
include("auth.php");

$id = $_REQUEST['id'];
$query = "SELECT * from new_record where id = '" . $id . "'";
$result = mysqli_query($con, $query) or die (mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
<title>Update Record</title>
</head>
<body>

<div class="form">
<h1>Update Record</h1>
<p><a href="dashboard.php">Dashboard</a> | 
<a href="insert.php">Insert New Record</a> | 
<a href="login.php">Logout</a></p>

<?php
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
	$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
	echo '<p style="color: #FF0000;">' . $status . '</p>';
}else{

?>
<div>
<form name="form" method="post" action="">
<input type="hidden" name="new" value="1"/>
<input name="id" type="hidden" value="<?php echo $row['id'];?>"/>

<p><input type="text" name="studnum" placeholder="Enter Matric Number" required value="<?php echo $row['studnum'];?>"></p>

<p><input type="text" name="studname" placeholder="Enter Name" required value="<?php echo $row['studname'];?>"></p>

<p><input type="text" name="phone" placeholder="Enter Phone Number" required value="<?php echo $row['phone'];?>"></p>

<p><input type="text" name="program" placeholder="Enter Program" required value="<?php echo $row['program'];?>"></p>

<p><input type="text" name="hpnm" placeholder="Enter HPNM" required value="<?php echo $row['hpnm'];?>"></p>

<p><input type="text" name="studpa" placeholder="Enter Student PA name's" required value="<?php echo $row['studpa'];?>"></p>

<p><input name="submit" type="submit" value="Update"/></p>
</form>
<?php }?>

<br/><br/><br/><br/>
</body>
</html>