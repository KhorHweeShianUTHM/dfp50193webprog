<?php
session_start();

if (isset($_POST["Username"]) && !isset($_SESSION["Username"])) {
	$users = [
	"khor" => "f1118",
    "saffiya" => "f1107",
	];
	
	if (isset($users[$_POST["Username"]])) {
		if ($users[$_POST["Username"]] == $_POST["Password"]) {
			$_SESSION["Username"] = $_POST["Username"];
			}
			}
			
			if (!isset($_SESSION["Username"])) { 
			$failed = true; 
			$msg = "<span style='color:red'>Invalid Login Details</span>";
			}
			}
			
			if (isset($_SESSION["Username"])) {
				header("Location: index.php"); 
				exit();
}
?>

<html>
<body>
<form action="" method="post" name="Login_Form">
	<table width="400" border="2" align="center" cellpadding="5" cellspacing="1" class="Table">
		<?php
		if(isset($msg))
		{
			?>
			<tr>
				<td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
			</tr>
		<?php } ?>
			<tr>
				<td colspan="2" align="left" valign="top"><h3>Login</h3></td>
			</tr>
			<tr>
				<td align="left" valign="top">Username: </td>
				<td><input name="Username" type="text" class="Input" align="center"></td>				
			</tr>
			<tr>
				<td align="left" valign="top">Password: </td>
				<td><input name="Password" type="password" class="Input" align="center"></td>				
			</tr>
			<tr>
				<td colspan="2" align="center" valign="top"><input name="Enter" type="submit" value="Enter" class="Button" style="background-color:#7FFF00"></td>				
			</tr>
	</table>
</form>

</body>
</html>