<?php
$conn = mysqli_connect("localhost","root","","fyp_project");
if (mysqli_connect_error())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>