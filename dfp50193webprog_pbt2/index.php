<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
<title>COVID 19 VACCINATION SYSTEM (CVS)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<style>
body {
	margin: 0;
	padding: 0;
	text-align: center;
	background: url(img/image.jpg);
	background-size: cover;
	background-position: c;
	font-family: sans-serif;
}
.container {
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

.container form {
	width: 500px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
</head>
<body>
<div class="container">
      	<form action="check-login.php" method="post">
      	      <h1 class="text-center p-3">LOGIN</h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
			  
			<div class="mb-3">
		    <label for="username" class="form-label">Username</label>
		    <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username"><br>
			</div>
			
			<div class="mb-3">
		    <label for="password" class="form-label">Password</label>
		    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password"><br>
			</div>
			
			<div class="mb-1">
		    <label class="form-label">Usertype</label>
			<select name="usertype" class="form-select mb-3">
				<option value="user">User</option>
				<option value="admin">Admin</option>
			</select>
			</div>
			
		  <button type="submit" class="btn btn-primary">LOGIN</button>
		</form>
</div>
</body>
</html>
<?php }else{
	header("Location: home.php");
} ?>