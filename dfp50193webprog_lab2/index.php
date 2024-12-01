<html>
<body>

<style>
body {
	width: 30%; 
	margin: 0 auto;
	margin-top:50px;
	background-color: #ffdab9;
}

select {
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

input[type=reset] {
  width: 100%;
  background-color: #0067ab; 
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

input[type='reset']:hover {
	background-color: #024978;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<form action="logout.php" method="post" name="Login_Form">
<h1 style="text-align:center;">SHOPEE TOPUP</h1>
<p style="text-align:center;"><a href="login.php">Login</a> | 
<a href="index.php">Index</a> | 
<a href="logout.php">Result</a></p>

<div>
<h3 style="text-align:center;">ONE TIME TOPUP</h3>
<hr>

<?php echo "<h4>Welcome: ".$_POST['username']."</h4>"; ?>


<label>AMOUNT: </label>
<select name="amount">
<option value="RM10">RM10</option>
<option value="RM50">RM50</option>
<option value="RM100">RM100</option>
<option value="RM200">RM200</option>
<option value="RM500">RM500</option>
</select>

<input name="submit" type="submit" onclick="getConfirmation();" value="PAY NOW">

</div>			

</form>

</body>
</html>

<script>
function getConfirmation(){
	var x = confirm("Comfirm?");
	if( x == true ){
		window.location.href='logout.php';
		}
	else{
		window.stop();
		}
}

</script>