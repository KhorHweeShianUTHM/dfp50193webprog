<?php
require('db.php');
$id = $_REQUEST['id'];
$query = "DELETE FROM new_record WHERE id=$id";
$result = mysqli_query($con,$query) or die(mysqli_error());
	echo "<script >alert(\"Delete Record Successfully.\")</script>";
	echo "<script>
	setTimeout(function(){
		window.location.href='view.php';}, 100);
		</script>";
?>