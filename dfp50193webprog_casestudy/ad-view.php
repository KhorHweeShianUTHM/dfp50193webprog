<?php 
session_start();
include "db_conn.php"; 
if (isset($_SESSION['username']) && isset($_SESSION['id'])) 
{
  $sql = "SELECT * FROM tblfyp ORDER BY id ASC";
  $res = mysqli_query($conn, $sql);
}
?>
   
   <!doctype html>
   <html lang="en">
     <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>View</title>
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
			font-family: Copperplate;
			font-style: italic;
			font-size: 60px;
		}
		th {
			color: white;
			font-style: italic;
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


<section class="py-3 text-center container">
<?php if (mysqli_num_rows($res) >= 0) {?>
  <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-5 mb-xl-2">
    <h3>Student Registration form</h3>
  </div>
  <div class="bd-example p-3">
    <table class="table table-sm table-bordered">
        <thead>
          <tr>
          <th scope="col">#</th>
          <th scope="col">STUDENT NAME</th></br>
          <th scope="col">STUDENT MATRIC NUMBER</th></br>
          <th scope="col">STUDENT PHONE</th>
          <th scope="col">PROJECT TITLE</th>
          <th scope="col">PROJECT CATEGORY</th>
          <th scope="col">PROJECT SUPERVISOR</th>
          <th id="action" colspan="3" scope="col">ACTION</th>
        </tr>
      </thead>
      <tbody>
        
        <?php $i =1;
        while ($rows = mysqli_fetch_assoc($res)) {?>
        <tr>
          <th scope="row"><?=$i?></th>
          <td><?=$rows['studname']?></td>
          <td><?=$rows['studnum']?></td>
          <td><?=$rows['phone']?></td>
          <td><?=$rows['pro_name']?></td>
          <td><?=$rows['pro_cate']?></td>
          <td><?=$rows['pro_sv']?></td>
          <td><a href="ad-edit.php?id=<?=$rows['id']?>"><button>EDIT</button></a></td>
          <td><a href="ad-delete.php?id=<?=$rows['id']?>"><button>DELETE</button></a></td>
          <td><button onclick="window.print();">PRINT</button></td>

        </tr>
        <?php $i++; }?>
      </tbody>
    </table>
  </div>
</div>
<?php } ?>
</section>

</body>
</html>