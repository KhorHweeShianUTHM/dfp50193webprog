<?php 
session_start();

if(!isset($_SESSION['username']))
{
	header("location:login.php");
	exit;
}

$name = $_POST['name'];
$noic = $_POST['noic'];

$sem1 = $_POST['sem1'];
$sem2 = $_POST['sem2'];
$sem3 = $_POST['sem3'];
$sem4 = $_POST['sem4'];
$sem5 = $_POST['sem5'];

$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];

$fatherincome = $_POST['fatherincome'];
$motherincome = $_POST['motherincome'];

$cgpa = ( $sem1 + $sem2 + $sem3 + $sem4 + $sem5 ) / 6;

$amount = ( $fatherincome + $motherincome ) / 2;

if($cgpa >= 3.00 AND $amount <= 5000.00)
{
	$status = "You are qualified"; 
}
else
{
	$status = "You are not qualified"; 
}


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<title>YAYASAN JTMK POLIMAS SCHOLARSHIP PROGRAMME</title>
</head>

<body>

<section class='login' id='login'>

<h1 style="text-align: center;">YAYASAN JTMK POLIMAS SCHOLARSHIP PROGRAMME</h1>
<p style="text-align: center;">Display</p>
<p style='text-align:right;'>Welcome: <?php echo $_SESSION['username'] ?> | <a href="logout.php" style="color:yellow;">Logout</a></p>
<hr>

<div class='form'>
  <form action="" method="post">
	<h3>A. Personal Particulars</h3>
    <p>Name : <b><?php echo $name; ?></b></p>
    <p>I/C No : <b><?php echo $noic; ?></b></p>
	<p>Cumulative Grade Point Average (CGPA) : <b><?php echo number_format($cgpa,2,'-',''); ?></b></p><br>

	<h3>B. Detail of Father/Guardian</h3>
	<p>Name : <b><?php echo $fathername; ?></b></p>
    <p>Monthly Income : RM <b><?php echo number_format($fatherincome); ?></b></p><br>
	
	<h3>C. Detail of Mother/Guardian</h3>
	<p>Name : <b><?php echo $mothername; ?></b></p>
    <p>Monthly Income : RM <b><?php echo number_format($motherincome); ?></b></p><br>
	
	<h3>D. Result</h3>
	<p>Status : <b><?php echo $status; ?></b></p><br>

    <input type="submit" class='btn-login' value="Proceed">
  </form>
</div>

</section>

</body>
</html>