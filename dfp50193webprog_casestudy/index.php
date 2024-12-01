<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<title>Login</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/signin.css" rel="stylesheet">

<style>
body {
	background-position: center;
	background-size: cover;
	background-image:url("img/wallpaper.jpg");
	min-height: 100%;
	font-family: "Inconsolata", sans-serif;
}
h1 {
  color: white;
  font-family: "Inconsolata", sans-serif;
  font-size: 70px;
}
h2 {
	color: white;
  font-family: "Inconsolata", sans-serif;
  font-size: 30px;
}

</style>
</head>

<body>
<form action="" method="post" class="form-signin">
  <center><h1 class="fa fa-envelope">Login</h1></center></br></br>
  <?php if (isset($_GET['error'])) { ?>
    <div class="alert alert-danger" role="alert">
      <?=$_GET['error']?>
    </div>
    <?php } ?>

    <div class="codehim-form">
		<h2><label for="username">Username</label></h2>
      <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
    </div></br>

    <div class="codehim-form">
		<h2><label for="password">Password</label></h2>
      <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
    </div>

    <div class="codehim-form">
	<label for="password">-</label>
      <select name="usertype" id="usertype" class="form-select mb-3">
        <option value="user">User</option>
				<option value="admin">Admin</option>
      </select>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="Login">Login</button>
    <p class="text-center mt-5 mb-3 text-muted">&copy; 2021 DFT50114 INTEGRATED PROJECT SYSTEM</p>
  </form>

</body>
</html>

<?php  
session_start();
include "db_conn.php";

if (isset($_POST['Login'])) {
	function test_input($data) {
		$data = trim($data);
	  	$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$usertype = test_input($_POST['usertype']);

	if (empty($username)) {
		header("Location: index.php?error=Username is Required");
	}else if (empty($password)) {
		header("Location: index.php?error=Password is Required");
	}else {
		$password = $password;
        
        $sql = "SELECT * FROM tblfyp WHERE username='$username' AND password='$password' AND usertype='$usertype'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] == $password && $row['usertype'] == $usertype) {
				$_SESSION['id'] = $row['id'];
        		$_SESSION['usertype'] = $row['usertype'];
        		$_SESSION['username'] = $row['username'];
				echo '<script>';
				echo 'alert("Login Successfully!!");';
				echo 'window.location.href = "home.php"';
				echo '</script>';
        	}
        }else {
			echo '<script>';
			echo 'alert("Sorry, Please try again.");';
			echo 'window.location.href = "index.php"';
			echo '</script>';
        }
	}
}
?>