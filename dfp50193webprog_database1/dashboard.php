<?php
//dashboard.php
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
<title>Dashboard - Secured Page</title>
</head>
<body>

<div class="form">
  <h2>This is Dashboard Page</h2>
  <p><a href="index.php">Home</a></p>
  <p><a href="insert.php">Insert New Record</a></p>
  <p><a href="view.php">View Records</a></p>
  <p><a href="logout.php">Logout</a></p>
</div>

</body>
</html>