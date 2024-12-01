<?
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<title>YAYASAN JTMK POLIMAS SCHOLARSHIP PROGRAMME</title>

<body>

<h2 style="text-align:center;">YAYASAN JTMK POLIMAS SCHOLARSHIP PROGRAMME</h2>
<h3 style="text-align:center;">- Login -</h3>

<div class="wrapper">
  <form action="registration.php" method="post">
    <label>Username</label>
    <input type="text" name="username" placeholder="Enter Username" required />

    <label>Password</label>
    <input type="password" name="password" placeholder="Enter Password" required />

    <input type="submit" value="Submit">
	<input type="reset" value="Reset">
  </form>
</div>

</body>
</html>