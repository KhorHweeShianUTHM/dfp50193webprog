<?php
session_start();

if(!isset($_SESSION['username']))
{
	header("location:login.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<title>YAYASAN JTMK POLIMAS SCHOLARSHIP PROGRAMME</title>
</head>

<style>
.number {
  border: none;
  background: none;
  box-shadow: 0px 2px 0px 0px white;
  width: 100%;
  color: white;
  font-size: 1em;
  outline: none;
}

.number::placeholder {
  color: #D3D3D3;
}
</style>

<body>

<section class='login' id='login'>

<h1 style="text-align: center;">YAYASAN JTMK POLIMAS SCHOLARSHIP PROGRAMME</h1>
<p style="text-align: center;">Registration</p>
<p style='text-align:right;'>Welcome: <?php echo $_SESSION['username'] ?> | <a href="logout.php" style="color:yellow;">Logout</a></p>
<hr>



 <div class='form'>
  <form action="confirm.php" method="post">
	<h3>A. Personal Particulars</h3>
    <input type="text" class='text' name="name" placeholder="Enter Name" required /><br><br>
    <input type="text" class='text' name="noic" placeholder="Enter I/C No" required /><br><br>
	
	<p>Cumulative Grade Point Average (CGPA)</p>
    <input type="number" class='number' name="sem1" step="0.01" placeholder="SEM 1" required /><br><br>
	<input type="number" class='number' name="sem2" step="0.01" placeholder="SEM 2" required /><br><br>
	<input type="number" class='number' name="sem3" step="0.01" placeholder="SEM 3" required /><br><br>
	<input type="number" class='number' name="sem4" step="0.01" placeholder="SEM 4" required /><br><br>
	<input type="number" class='number' name="sem5" step="0.01" placeholder="SEM 5" required /><br><br>
	
	<h3>B. Detail of Father/Guardian</h3>
    <input type="text" class='text' name="fathername" placeholder="Enter Name" required /><br><br>
    <input type="number" class='number' name="fatherincome" step="0.01" placeholder="Amount RM" required /><br><br>
	
	<h3>C. Detail of Mother/Guardian</h3>
    <input type="text" class='text' name="mothername" placeholder="Enter Name" required /><br><br>
    <input type="number" class='number' name="motherincome" step="0.01" placeholder="Amount RM" required /><br><br>
	
	<br><input type="checkbox" required>Agree to our <a href="#" style="color:yellow;">Term & Privacy</a><br><br>

    <input type="submit" name="submit" value="Submit" class='btn-login'>
  </form>
</div>
</section>

</body>
</html>