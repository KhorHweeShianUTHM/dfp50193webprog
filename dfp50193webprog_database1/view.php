<?php
//view.php
require('db.php');
include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
<title>View Records</title>
</head>
<style>
.center
{
	width: 300px; 
	margin: 0 auto;
}
</style>
<body>

<div class="form">
<h1>View Records</h1>
<p><a href="index.php">Home</a> | 
<a href="insert.php">Insert New Record</a> | 
<a href="logout.php">Logout</a></p>

<table width="100%" border="1" style= "border-collapse:collapse;">
<thead>
<tr>
	<th><strong>BIL</strong></th>
	<th><strong>STUDENT NUMBER</strong></th>
	<th><strong>STUDENT NAME</strong></th>
	<th><strong>PHONE NUMBER</strong></th>
	<th><strong>PROGRAM</strong></th>
	<th><strong>HPNM</strong></th>
	<th><strong>STUDENT PA</strong></th>
	<th><strong>Edit</strong></th>
	<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count = 1;
$se1_query = "SELECT * FROM new_record ORDER BY id asc;";
$result = mysqli_query($con,$se1_query);
while($row = mysqli_fetch_assoc($result)){
	?>
	<tr>
	<td align="center">
	<?php echo $count; ?></td>
	
	<td align="center">
	<?php echo $row['studnum']; ?></td>
	
	<td align="center">
	<?php echo $row['studname']; ?></td>
	
	<td align="center">
	<?php echo $row['phone']; ?></td>
	
	<td align="center">
	<?php echo $row['program']; ?></td>
	
	<td align="center">
	<?php echo $row['hpnm']; ?></td>
	
	<td align="center">
	<?php echo $row['studpa']; ?></td>
	
	<td align="center">
	<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</td>
	
	<td align="center">
	<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</td>
	
	</tr>
<?php $count++; } ?>

</tbody>
</table>

<br/><br/><br/><br/>
</div>
</body>
</html>