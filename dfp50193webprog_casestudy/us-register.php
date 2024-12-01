<?php 
session_start();
include "db_conn.php"; ?>
   
   <!doctype html>
   <html lang="en">
     <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Register</title>
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
		h3 {
			color: white;
			font-family: serif;
			font-style: italic;
			font-size: 80px;
		}
		a {
			font-style: italic;
		}
		label {
			font-style: italic;
			font-size: 25px;
		}
		</style>
      </head>
      <body>

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
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="us-register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<form action="" method="post" class="form-signin">
    <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-5 mb-xl-2">
        <center><h3>Register</h3></center>
    </div>
    
	<label for="studname">STUDENT NAME</label> </br>
    <div class="form-floating">
        <input type="text" class="form-control" name="studname" id="studname" placeholder="Enter Student Name" required 
        value="<?php if(isset($_GET['studname']))echo($_GET['studname']); ?>">
        
    </div></br>
			
	<label for="studnum">STUDENT MATRIC NUMBER</label> </br>		
    <div class="form-floating">
        <input type="text" class="form-control" name="studnum" id="studnum" placeholder="Enter Student Matric Number" required 
        value="<?php if(isset($_GET['studnum']))echo($_GET['studnum']); ?>">
    </div></br>
    
	<label for="phone">STUDENT PHONE</label> </br>
    <div class="form-floating">
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Student Phone" required 
        value="<?php if(isset($_GET['phone']))echo($_GET['phone']); ?>">
        
    </div></br>
    
	<label for="pro_name">PROJECT TITLE</label> </br>
    <div class="form-floating">
        <input type="text" class="form-control" name="pro_name" id="pro_name" placeholder="Enter Project Title" required 
        value="<?php if(isset($_GET['pro_name']))echo($_GET['pro_name']); ?>">
        
    </div></br>
    
	<label for="pro_cate">PROJECT CATEGORY</label> </br>
    <div class="form-floating">
        <input type="text" class="form-control" name="pro_cate" id="pro_cate" placeholder="Enter Project Category" required 
        value="<?php if(isset($_GET['pro_cate']))echo($_GET['pro_cate']); ?>">
        
    </div></br>
    
	<label for="pro_sv">PROJECT SUPERVISOR</label> </br>
    <div class="form-floating">
        <input type="text" class="form-control" name="pro_sv" id="pro_sv" placeholder="Enter Project Supervisor" required 
        value="<?php if(isset($_GET['pro_sv']))echo($_GET['pro_sv']); ?>">
        
    </div></br>
            
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="register">REGISTER</button> 
</form>
</body>
</html>

<?php 
if (isset($_POST['register'])) {
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $studname= validate($_POST['studname']);
    $studnum = validate($_POST['studnum']);
    $phone = validate($_POST['phone']);
    $pro_name = validate($_POST['pro_name']);
    $pro_cate = validate($_POST['pro_cate']);
    $pro_sv = validate($_POST['pro_sv']);
	
    if (empty($studname)) {
        header("Location: ad-update.php?id=$id&error=studname is required");
      }else if (empty($studnum)) {
        header("Location: ad-update.php?id=$id&error=studnum is required");
      }else if (empty($phone)) {
        header("Location: ad-update.php?id=$id&error=phone is required");
      }else if (empty($pro_name)) {
        header("Location: ad-update.php?id=$id&error=pro_name is required");
        }else if (empty($pro_cate)) {
        header("Location: ad-update.php?id=$id&error=pro_cate is required");
        }else if (empty($pro_sv)) {
        header("Location: ad-update.php?id=$id&error=pro_sv is required");
      }else {
       $sql = "INSERT INTO tblfyp(studname, studnum, phone, pro_name, pro_cate, pro_sv, status) 
               VALUES('$studname', '$studnum', '$phone', '$pro_name', '$pro_cate', '$pro_sv', 'pending')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
      echo '<script>';
      echo 'alert("Your register is now pending for approval!");';
      echo 'window.location.href = "home.php"';
      echo '</script>';
         }else {
      echo '<script>';
      echo 'alert("Sorry, Please try again.");';
      echo 'window.location.href = "ad-register.php"';
      echo '</script>';
         }
	}
}
?>