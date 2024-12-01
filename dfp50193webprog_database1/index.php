<?php
include("auth.php"); // include auth.php file on all secure pages ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
<title>Welcome Home</title>
</head>
<body>

<div class="form">
    <h2>Welcome to my website, <?php echo $_SESSION['username']; ?>.</h2>
    <h3>This is secure area.</h3>
    <p><a href="dashboard.php">Dashboard</a></p>
    <p><a href="logout.php">Logout</a></p>
</div>

</body>
</html>