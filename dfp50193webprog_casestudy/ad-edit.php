<?php 
if (isset($_GET['id'])) {
    include "db_conn.php";

	$id = $_GET['id'];

	$sql = "SELECT * FROM tblfyp WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['update'])){
      include "db_conn.php";
      function validate($data){
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
    }
    
    $id = validate($_POST['id']);
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
      $sql = "UPDATE tblfyp SET studname='$studname', studnum='$studnum' , phone='$phone', 
      pro_name='$pro_name', pro_cate='$pro_cate', pro_sv='$pro_sv' WHERE id=$id ";
      $result = mysqli_query($conn, $sql);
      if ($result) {
      echo '<script>';
      echo 'alert("Update Successfully!!");';
      echo 'window.location.href = "ad-view.php"';
      echo '</script>';
         }else {
      echo '<script>';
      echo 'alert("Sorry, Please try again.");';
      echo 'window.location.href = "ad-edit.php"';
      echo '</script>';
         }
    }
  }
?>

<!doctype html>
   <html lang="en">
     <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Edit</title>
       <!-- Bootstrap core CSS -->
       <link href="css/bootstrap.min.css" rel="stylesheet">
       <!-- Custom styles for this template -->
       <link href="css/carousel.css" rel="stylesheet">
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
                  <a class="nav-link active" aria-current="page" href="ad-view.php">View</a>
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
      
      <form action="" method="post" class="form-signin">
          <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-5 mb-xl-2">
              <h3>Update</h3>
            </div>
            <input name="id" type="hidden" value="<?php echo $row['id'];?>"/>
            
            <div class="form-floating">
                <input type="text" class="form-control" name="studname" id="studname" placeholder="Enter Student Name" required 
                value="<?php echo $row['studname'];?>">
                <label for="studname">STUDENT NAME</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" name="studnum" id="studnum" placeholder="Enter Student Matric Number" required 
                value="<?php echo $row['studnum'];?>">
                <label for="studnum">STUDENT MATRIC NUMBER</label>
            </div>
            
            <div class="form-floating">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Student Phone" required 
                value="<?php echo $row['phone'];?>">
                <label for="phone">STUDENT PHONE</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" name="pro_name" id="pro_name" placeholder="Enter Project Title" required 
                value="<?php echo $row['pro_name'];?>">
                <label for="pro_name">PROJECT TITLE</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" name="pro_cate" id="pro_cate" placeholder="Enter Project Category" required 
                value="<?php echo $row['pro_cate'];?>">
                <label for="pro_cate">PROJECT CATEGORY</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" name="pro_sv" id="pro_sv" placeholder="Enter Project Supervisor" required 
                value="<?php echo $row['pro_sv'];?>">
                <label for="pro_sv">PROJECT SUPERVISOR</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="update">UPDATE</button>
        </form>
        <?php } ?>
    </body>
</html>