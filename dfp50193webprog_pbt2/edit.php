<?php include 'update.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>- UPDATE -</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
<form action="update.php" method="post">
<input name="id" type="hidden" value="<?php echo $row['id'];?>"/>
		    
			<h1 class="text-center p-3">UPDATE</h1>
			<p><a href="home.php">Home</a></p><hr>
			
			<div class="mb-3">
			<label for="username" class="form-label">Vaccine name</label>
		    <input type="text" name="username" id="username" class="form-control" required value="<?php echo $row['username'];?>"><br>
			</div>
			
			<div class="mb-3">
		    <label for="v_appoint" class="form-label">Vaccination appointment</label>
		    <input type="text" name="v_appoint" id="v_appoint" class="form-control" required value="<?php echo $row['v_appoint'];?>"><br>
			</div>
			
			<div class="mb-3">
		    <label for="v_status" class="form-label">Vaccination status</label>
		    <input type="text" name="v_status" id="v_status" class="form-control" required value="<?php echo $row['v_status'];?>"><br>
			</div>
			
			<div class="mb-3">
		    <label for="v_certi" class="form-label">Vaccine certificate</label>
		    <input type="text" name="v_certi" id="v_certi" class="form-control" required value="<?php echo $row['v_certi'];?>"><br>
			</div>
			
			<button type="submit" name="update" class="btn btn-primary">UPDATE</button>
</form>
</div>
</body>
</html>