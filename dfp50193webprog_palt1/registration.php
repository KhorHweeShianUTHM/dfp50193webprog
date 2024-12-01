<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<title>YAYASAN JTMK POLIMAS SCHOLARSHIP PROGRAMME</title>

<body>

<h2 style="text-align:center;">YAYASAN JTMK POLIMAS SCHOLARSHIP PROGRAMME</h2>
<h3 style="text-align:center;">- Registration -</h3>

<div class="wrapper">
<?php echo "<h4 style='text-align:right;'>Welcome: ".$_POST['username']."</h4>"; ?>
  <form action="display.php" method="post">
	<h3>A. Personal Particulars</h3>
    <label>Name</label>
    <input type="text" name="name" placeholder="Enter Name" required />

    <label>I/C No</label>
    <input type="text" name="noic" placeholder="Enter I/C No" required />
	
	<label>Cumulative Grade Point Average (CGPA)</label>
    <input type="number" name="sem1" step="0.01" min="0" max="4" placeholder="SEM 1" required />
	<input type="number" name="sem2" step="0.01" min="0" max="4" placeholder="SEM 2" required />
	<input type="number" name="sem3" step="0.01" min="0" max="4" placeholder="SEM 3" required />
	<input type="number" name="sem4" step="0.01" min="0" max="4" placeholder="SEM 4" required />
	<input type="number" name="sem5" step="0.01" min="0" max="4" placeholder="SEM 5" required />
	
	<h3>B. Detail of Father/Guardian</h3>
	<label>Name</label>
    <input type="text" name="fathername" placeholder="Enter Name" required />

    <label>Monthly Income</label>
    <input type="number" name="fatherincome" step="0.01" placeholder="Amount RM" required />
	
	<h3>C. Detail of Mother/Guardian</h3>
	<label>Name</label>
    <input type="text" name="mothername" placeholder="Enter Name" required />

    <label>Monthly Income</label>
    <input type="number" name="motherincome" step="0.01" placeholder="Amount RM" required />
	
	<br><br><input type="checkbox" required>Agree to our <a href="#">Term & Privacy</a><br><br>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>