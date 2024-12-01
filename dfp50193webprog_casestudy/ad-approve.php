<?php 
session_start();
include "db_conn.php"; ?>
   
   <!doctype html>
   <html lang="en">
     <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Approve</title>
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
			font-style: italic;
			font-family: Copperplate;
			font-size: 60px;
		}
		th {
			font-style: italic;
			color: white;
			font-size: 20px;
		}
		a {
			font-style: italic;
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
                  <a class="nav-link" href="ad-view.php">View</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="ad-approve.php">Approve</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <section class="py-3 text-center container">
        <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-5 mb-xl-2">
          <h3>View of Student Registration form</h3> </br></br>
        </div>
        <div class="bd-example p-3">
          <table class="table table-sm table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">PROJECT TITLE</th>
                <th scope="col">PROJECT SUPERVISOR</th>
                <th scope="col">ACTION</th>
              </tr>
            </thead>

            <tbody>
            <?php
            $query = "SELECT * FROM tblfyp WHERE status = 'pending' ORDER BY id ASC";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result)){
              ?>
              <tr>
                <td scope="row"><?php echo $row['id'];?></td>
                <td><?php echo $row['pro_name'];?></td>
                <td><?php echo $row['pro_sv'];?></td>
                <td>
                <form action ="ad-approve.php" method ="POST">
                <input type = "hidden" name  ="id" value = "<?php echo $row['id'];?>"/>
                <input type = "submit" name  ="approve" value = "Approve"/>
                <input type = "submit" name  ="deny" value = "Deny"/>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </article>
      <?php } ?>

</body>
</html>

<?php
if(isset($_POST['approve'])){
    $id = $_POST['id'];

    $select = "UPDATE tblfyp SET status = 'approved' WHERE id = '$id'";
    $result = mysqli_query($conn, $select);

    echo '<script>';
    echo 'alert("User Approved!");';
    echo 'window.location.href = "ad-view.php"';
    echo '</script>';
} 
if(isset($_POST['deny'])){
    $id = $_POST['id'];

    $select = "DELETE FROM tblfyp WHERE id = '$id'";
    $result = mysqli_query($conn, $select);

    echo '<script>';
    echo 'alert("User Denied!");';
    echo 'window.location.href = "ad-approvel.php"';
    echo '</script>';
}
?>