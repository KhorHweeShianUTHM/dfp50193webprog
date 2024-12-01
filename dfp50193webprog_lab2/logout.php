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

<form method="post" name="login">
<h1 style="text-align:center;">Result</h1>
<p style="text-align:center;"><a href="login.php">Login</a> | 
<a href="index.php">Index</a> | 
<a href="logout.php">Result</a></p>

<div>
<h3>SHOPEE TOPUP</h3>
<h5>Successfully Reloaded</h5>
<label>Amount: </label><?php echo $_POST['amount']; ?>
<h3>THANK YOU.</h3>
<input name="Print" type="submit" onclick="window.print()" value="PRINT" >
<input name="Exit" type="submit" value="EXIT">

</div>

</form>

</body>
</html>

<?php
if(isset($_POST['Exit'])){
	session_destroy();
	header("location: login.php");
	exit;
}
?>