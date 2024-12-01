<?php 
$sem1 = $_POST['sem1'];
$sem2 = $_POST['sem2'];
$sem3 = $_POST['sem3'];
$sem4 = $_POST['sem4'];
$sem5 = $_POST['sem5'];

$fatherincome = $_POST['fatherincome'];
$motherincome = $_POST['motherincome'];

$cgpa = ($sem1+$sem2+$sem3+$sem4+$sem5)/6;

$amount = ($fatherincome+$motherincome)/2;

if($cgpa >= 3 AND $amount <= 5000)
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

<body>

<h2 style="text-align:center;">YAYASAN JTMK POLIMAS SCHOLARSHIP PROGRAMME</h2>
<h3 style="text-align:center;">- Display -</h3>

<div class="wrapper">
  <form action="end.php" method="post">
	<h3>A. Personal Particulars</h3>
    <label>Name : <?php echo $_POST['name']; ?></label><br>
    <label>I/C No : <?php echo $_POST['noic']; ?></label><br>
	<label>Cumulative Grade Point Average (CGPA) : <?php echo number_format($cgpa,2); ?></label><br>

	<h3>B. Detail of Father/Guardian</h3>
	<label>Name : <?php echo $_POST['fathername']; ?></label><br>
    <label>Monthly Income : RM <?php echo number_format($_POST['fatherincome'],2); ?></label><br>
	
	<h3>C. Detail of Mother/Guardian</h3>
	<label>Name : <?php echo $_POST['mothername']; ?></label><br>
    <label>Monthly Income : RM <?php echo number_format($_POST['motherincome'],2); ?></label><br>
	
	<h3>D. Result</h3>
	<label>Status : <?php echo $status; ?></label><br><br>

    <input type="submit" value="Proceed">
  </form>
</div>

</body>
</html>