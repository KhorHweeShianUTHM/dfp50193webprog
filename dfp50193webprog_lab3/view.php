<?php
require("db.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>- VIEW -</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<center><img src="img/webpro.jpg" width="20%" /></center>
<h1>VIEW YOUR FEEDBACK ABOUT SUBJECT DFP50193</h1>
<p><a href="index.php">Home </a>|
<a href="insert.php"> Insert New Comment </a>|
<a href="view.php"> View Comment</a></p>
<hr/>

<table align="center" width="90%" border="1" style= "border-collapse:collapse;">
<thead>
<tr>
	<th><strong>NO</strong></th>
	<th><strong>STUDENT NUMBER</strong></th>
	<th><strong>COMMENT</strong></th>
	<th><strong>DATE</strong></th>
	<th><strong>Edit</strong></th>
	<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>

<?php
$count = 1;
$se1_query = "SELECT * FROM comment ORDER BY id asc;";
$result = mysqli_query($con,$se1_query);
while($row = mysqli_fetch_assoc($result)){
	?>
	<tr>
	<td align="center">
	<?php echo $count; ?></td>
	
	<td align="center">
	<?php echo $row['Student_Number']; ?></td>
	
	<td align="center">
	<?php echo $row['Comment']; ?></td>
	
	<td align="center">
	<?php echo $row['Date']; ?></td>
	
	<td align="center">
	<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</td>
	
	<td align="center">
	<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</td>
	
	</tr>
<?php $count++; } ?>

</tbody>
</table>

</body>
</html>