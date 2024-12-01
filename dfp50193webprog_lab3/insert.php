<?php
require('db.php');

$status = "";
if(isset($_POST['comment']) && $_POST['comment']==1)
{
	$Date = date("Y-m-d H:i:s");
	$Student_Number = $_REQUEST['Student_Number'];
	$Comment = $_REQUEST["Comment"];
	$ins_query = "insert into comment
	(`Date`, `Student_Number`, `Comment`) 
	values ('$Date', '$Student_Number', '$Comment')";
	mysqli_query($con,$ins_query) or die(mysqli_error());
	$status = "Your Comment has been recorded.";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>- INSERT -</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<center><img src="img/webpro.jpg" width="20%" /></center>
<h1>PLEASE ENTER YOUR FEEDBACK ABOUT SUBJECT DFP50193</h1>
<p><a href="index.php">Home </a>|
<a href="insert.php"> Insert New Comment </a>|
<a href="view.php"> View Comment </a></p>
<hr/>

<form name="form" method="post" action="">
<input type="hidden" name="comment" value="1"/>

<p><input type="text" name="Student_Number" 
placeholder="Enter Student No" required /></p>

<p><textarea type="text" rows="10" cols="100" name="Comment" 
placeholder="Enter Comment" required /></textarea></p>

<p><input type="submit" name="submit" value="Submit" /></p>

</form>

<p style="color:#FF0000;"><?php echo $status; ?></p>

</body>
</html>