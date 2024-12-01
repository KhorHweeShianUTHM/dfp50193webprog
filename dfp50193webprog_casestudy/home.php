<?php 
   session_start();
   include "db_conn.php";
   ?>
   
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/carousel.css" rel="stylesheet">

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
			font-family: serif;
			font-style: italic;
			font-size: 70px;
		}
		p {
			font-color: white;
			font-family:serif;
			font-size: 50px;
		}
		a {
			font-style: italic;
		}
</style>
</head>
<body>

<?php if ($_SESSION['usertype'] == 'admin') {?>
<!-- FORE ADMIN -->
<header>
  <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">DFT50114 INTEGRATED PROJECT SYSTEM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ad-view.php">View</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ad-approve.php">Approve</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Hello, ADMIN <?=$_SESSION['username']?></h1>
      <p class="lead text-muted">INTEGRATED PROJECT course will give students the practical and design experience of carrying out an independent application software or technical project from project requirements, implementation, testing to delivery and presentation of the project. </p>
    </div>
  </div>
</section>

<?php }else { ?>

<!-- FORE USERS -->
<header>
  <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">DFT50114 INTEGRATED PROJECT SYSTEM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="us-register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Hello, USER <?=$_SESSION['username']?></h1>
      <p class="lead text-muted">INTEGRATED PROJECT course will give students the practical and design experience of carrying out an independent application software or technical project from project requirements, implementation, testing to delivery and presentation of the project. </p>
    </div>
  </div>

</section>

<?php } ?>

</body>
</html>