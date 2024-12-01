<?php
session_start();

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username == "khor" && $password == "f1118")
	{
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header("location:register.php");
		exit;
	}
	else
	{
		$msg="Invalid Login Details";
	}
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
  <p style="text-align: center;">Login</p>
  <hr><br>
  
  <div class='form'>
    <form action="" method="post">
	  <center>
	    
	      <?php 
		  if(isset($msg))
	      {
		    echo "<span style='color: white;border-radius: 3px;padding: 5px 2em;transition: 0.5s;width: 200px;background-color: red;box-shadow: 0px 0px 0px 2px white;'>$msg</span>";
	      }
	      ?>
	    
	  </center><br>
      <input type="text" class='text' placeholder='Username' name='username' required><br><br>
      <input type="password" class='password' name='password' placeholder='Password' required><br><br>
      <input type="submit" value="Submit" name="submit" class='btn-login'>
    </form>
	
  </div>
  
</section>

</body>
</html>
