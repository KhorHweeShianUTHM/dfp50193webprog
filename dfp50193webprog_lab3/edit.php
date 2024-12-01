<?php
require("db.php");

$id = $_REQUEST['id'];
$query = "SELECT * FROM comment WHERE id='".$id."'";
$result = mysqli_query($con,$query) or die (mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>- EDIT -</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<center><img src="img/webpro.jpg" width="20%" /></center>
<h1>EDIT YOUR FEEDBACK ABOUT SUBJECT DFP50193</h1>
<p><a href="index.php">Home </a>|
<a href="insert.php"> Insert New Comment </a>|
<a href="view.php"> View Comment </a></p>
<hr/>

<?php
$status = "";
if(isset($_POST['comment']) && $_POST['comment']==1)
{
	$id = $_REQUEST['id'];
	$Date = date("Y-m-d H:i:s");
	$Student_Number = $_REQUEST['Student_Number'];
	$Comment = $_REQUEST['Comment'];

	$update = "UPDATE comment SET 
	Date='".$Date."', 
	Student_Number='".$Student_Number."',
	Comment='".$Comment."'WHERE id='".$id."'";
	mysqli_query($con,$update) or die(mysqli_error());
	$status = "Record Updated Successfully.</br></br>
	<a href='view.php'>View Updated Record</a>";
	echo '<p style="color:#FF0000;">'.$status.'</p>';
} else {
?>

<form name="form" method="post" action="">
<input type="hidden" name="comment" value="1"/>

<input name="id" type="hidden" value="<?php echo $row['id'];?>"/>

<p><input type="text" name="Student_Number" 
placeholder="Enter Student Number" required value="<?php echo $row['Student_Number'];?>"/></p>

<p><textarea type="text" rows="10" cols="100" name="Comment" 
placeholder="Edit Comment" required value="<?php echo $row['Comment'];?>"/></textarea></p>

<p><input type="submit" name="submit" value="Upload" /></p>
</form>
<?php } ?>

</body>
</html>