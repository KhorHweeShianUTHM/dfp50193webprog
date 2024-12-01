<?php
session_start();
?>

<html>
<body>

<style>
body {
	width: 30%; 
	margin: 0 auto;
	margin-top:50px;
	background-color: #ffdab9;
}

input[type=text], input[type=password], input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<form action="index.php" method="post" name="login">
<h1 style="text-align:center;">LOGIN</h1>
<p style="text-align:center;"><a href="login.php">Login</a> | 
<a href="index.php">Index</a> | 
<a href="logout.php">Logout</a></p>

<div>

<label>USER ID:</label>
<input type="text" name="username" placeholder="Enter User ID" required />
	
<label>Password</label>
<input type="password" name="password" placeholder="Enter Password" required />
	
<input type="submit" value="Submit">

</div>

</form>

</body>
</html>