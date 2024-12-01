<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="Login_Form">
	<table width="400" border="2" align="center" cellpadding="5" cellspacing="1" class="Table">
			<tr>
				<td colspan="2" align="center" valign="top"><h3>STUDENT BMI CALCULATION</h3></td>
			</tr>
			<tr>
				<td align="center" valign="top">Name: </td>
				<td><input name="Name" class="Name" type="text" align="center"></td>
			</tr>
			<tr>
				<td align="center" valign="top">Student Number: </td>
				<td><input name="StudentNo" class="StudentNo" type="text" align="center"></td>
			</tr>
			<tr>
				<td align="center" valign="top">Weight: </td>
				<td><input name="Weight" class="Weight" type="text" align="center"> kg</td>
			</tr>
			<tr>
				<td align="center" valign="top">Height: </td>
				<td><input name="Height" class="Height" type="text" align="center"> cm</td>
			</tr>
			<tr>
				<td colspan="2" align="center" valign="top">
				<input name="calc" type="submit" value="Calculate" class="Button" style="background-color:#7FFF00; margin-right:5px;">
				<input name="exit" type="submit" value="Exit" class="Button" style="background-color:#7FFF00">
				</td>	
						
			</tr>
	</table>
</form>

</body>
</html>

<?php
if(isset($_POST['exit']))
{
session_start();
session_destroy();
header("location: login.php");
exit;
}

if(isset($_POST['calc']))
{

$w = $_POST['Weight'];
$h = $_POST['Height'];

$mh = $h/100;
$bmi = ($w/($mh*$mh));

	 
if($bmi <= 18.5)
{
	echo "<br>===== RESULT =====<br>";
	echo "<b>Your BMI : </b><br>" . number_format($bmi,1) . "<br><br>";
	echo "<b>Status : </b><br>";
	echo "Your BMI is " . number_format($bmi,1) . " is in classication <u>Underweight</u>.";
	echo "<br><br>";
	echo "<b>Nutrition suggestion (Healthy Eating Plan) : </b><br>";
	echo "Fats, oils, sugar and salt.<br>";
	echo "- cause will be able to recognize high and low percentanges.<br>";
	echo "- to gain weight and metabolism.<br>";
	echo "==================";
}

elseif($bmi >= 18.5 AND $bmi <= 24.9)
{
	echo "<br>===== RESULT =====<br>";
	echo "<b>Your BMI : </b><br>" . number_format($bmi,1) . "<br><br>";
	echo "<b>Status : </b><br>";
	echo "Your BMI is " . number_format($bmi,1) . " is in classication <u>Normal weight</u>.";
	echo "<br><br>";
	echo "<b>Nutrition suggestion (Healthy Eating Plan) : </b><br>";
	echo "Meat and Alternatives<br>";
	echo "- cause to help your body produce thyroid hormone.<br>";
	echo "- iron to carry oxygen around your body.<br>";
	echo "- zinc to keep your immune system strong, your skin healthy, and for growth, development and reproductive health.<br>";
	echo "- balance weight and nutritional diet.<br>";
	echo "==================";
	
}
elseif($bmi >= 25 AND $bmi <= 29.9)
{
	echo "<br>===== RESULT =====<br>";
	echo "<b>Your BMI : </b><br>" . number_format($bmi,1) . "<br><br>";
	echo "<b>Status : </b><br>";
	echo "Your BMI is " . number_format($bmi,1) . " is in classication <u>Overweight</u>.";
	echo "<br><br>";
	echo "<b>Nutrition suggestion (Healthy Eating Plan) : </b><br>";
	echo "Rice and Alternatives<br>";
	echo "- Carbs Control Blood Sugar Levels & Diabetes.<br>";
	echo "- Carbs Rev Your Metabolism and Blast Belly Fat.<br>";
	echo "==================";

}
elseif($bmi >= 30)
{
	echo "<br>===== RESULT =====<br>";
	echo "<b>Your BMI : </b><br>" . number_format($bmi,1) . "<br><br>";
	echo "<b>Status : </b><br>";
	echo "Your BMI is " . number_format($bmi,1) . " is in classication <u>Obesity</u>.";
	echo "<br><br>";
	echo "<b>Nutrition suggestion (Healthy Eating Plan) : </b><br>";
	echo "Fruit and Vegetables<br>";
	echo "- Lots and lots of fiber.<br>";
	echo "- Low in sodium and cholesterol.<br>";
	echo "==================";
}
}

?>