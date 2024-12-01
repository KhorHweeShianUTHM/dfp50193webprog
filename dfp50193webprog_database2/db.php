<?php

$con = mysqli_connect("localhost","root","","databasepelajar");
					  /* server name, username, password, database name */
//Check connection
	if (mysqli_connect_error())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>