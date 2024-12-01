<?php 
   session_start();
   include "db_conn.php";
   ?>

<!DOCTYPE html>
<html>
<head>
<title>- HOME -</title>
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
.container table, #m1 {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
</head>
<body>
<div class="container">
	<?php if ($_SESSION['usertype'] == 'admin') {?>
	<!-- For Admin -->
	<div class="card" style="width: 18rem;">
		<img src="img/admin-default.png" alt="admin image">
		<div class="card-body text-center">
			<h5><?=$_SESSION['username']?></h5>
			<a href="logout.php" class="btn btn-dark">Logout</a>
		</div>
	</div>
	
	<div class="p-3">
	<?php include 'members.php';
	if (mysqli_num_rows($res) > 0) {?>
    
	<h1 id="m1" style="background-color:white">Admin</h1>
	<table class="table" style="width:32rem;background-color:white">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Vaccine name</th>
				<th scope="col">Vaccination appointment</th>
				<th scope="col">Vaccination status</th>
				<th scope="col">Vaccine certificate</th>
				<th scope="col">Edit</th>
				<th scope="col">Delete</th>
			</tr>
		</thead>
	
		<tbody>
		<?php $i =1;
		while ($rows = mysqli_fetch_assoc($res)) {?>
			<tr>
				<th scope="row"><?=$i?></th>
				<td><?=$rows['username']?></td>
				<td><?=$rows['v_appoint']?></td>
				<td><?=$rows['v_status']?></td>
				<td><?=$rows['v_certi']?></td>
				<td><a href="edit.php?id=<?=$rows['id']?>">Edit</a></td>
				<td><a href="delete.php?id=<?=$rows['id']?>">Delete</a></td>
			</tr>
			<?php $i++; }?>
		</tbody>
	</table>
	<?php }?>
	</div>

      	<?php }else { ?>
      		<!-- FORE USERS -->
			<div class="card" style="width: 18rem;">
			  <img src="img/user-default.png" alt="admin image">
			  <div class="card-body text-center">
			    <h5><?=$_SESSION['username']?></h5>
				<h1>User</h1>
				<a href="insert.php" class="btn btn-primary">Registration of vaccination</a><br>
				<a href="logout.php" class="btn btn-dark" style="margin:10px;">Logout</a>
		<?php } ?>
			  </div>
			</div>
</div>
</body>
</html>