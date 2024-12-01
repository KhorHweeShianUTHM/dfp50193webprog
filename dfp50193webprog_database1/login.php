<?php
require("db.php");
session_start();
//if from submitted, insert values into the database.
if(isset($_POST['submit']))
{
	$username = stripslashes($_REQUEST['username']);//removes backlashes
	$username = mysqli_real_escape_string($con,$username);//escapes special characters
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	
	//Checking us user existing in the database or not
	$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
	$result = mysqli_query($con,$query) or die(mysqli_error());
	$rows = mysqli_num_rows($result);
	if($rows==1)
	{
		$_SESSION['username'] = $username;
		echo "<script>alert(\"Login Successfully !\")</script>";
		echo "<script>
		setTimeout(function(){
			window.location.href='index.php';}, 500);
		</script>"; //Redirect user to index.php
	}else
	{
		echo "<script >alert(\"Username/password is incorrect.\")</script>";
		echo "<script>
		setTimeout(function(){
			window.location.href='login.php';}, 500);
		</script>";
	}
}else{
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
<title>Login</title>
</head>
<body>

<div class="form">
	<h1>Log in</h1>
	<form action="" method="post" name="login">
		<div class="txt_field">
			<input type="text" name="username" placeholder="Username" required />
		</div>
		<div class="txt_field">
			<input type="password" name="password" placeholder="Password" required />
		</div>
		<input name="submit" type="submit" value="Login" />
	</form>
</div>

<?php } ?>

</body>
</html>