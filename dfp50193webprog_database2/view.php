<?php
//view.php
require('db.php');

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>View Records</title>

<style>
.section7 {
	height: 1000px;
	background-color: #ffa07a;
	background-image: url("image/7.jpg");
	background-repeat: no-repeat;
	background-size: 1400px 1000px;
}
</style>

</head>

<body>

<div class="wrapper">
  <header>
    <div class="logo">
      <center><img src="image/logo.png"></center>
	  <h4>ONLINE RECORD STUDENT INFORMATION</h4>
	</div>
	
	<div class="nav">
	  <nav>
	    <ul>
	      <li>
		    <a href="dashboard.php" style="color: black;"><span class="fa fa-home">&nbsp HOME &nbsp </span></a>
		  </li>
		  <li>
		    <a href="insert.php" style="color: black;"><span class="fa fa-pencil-square-o">&nbsp INSERT NEW RECORD &nbsp </span></a>
		  </li>
		  <li>
		    <a href="view.php" class="active"><span class="fa fa-table">&nbsp VIEW RECORD &nbsp </span></a>
		   </li>
		  <li>
		    <a href="logout.php" style="color: black;"><span class="fa fa-sign-out">&nbsp LOGOUT &nbsp </span></a>
		  </li>
	    </ul>
	  </nav>
	</div>
  </header>
  
  
  <section>
    <div class="section7">
      <br>
	  <div class="scroll">
        <div class="box7">
          <h1 style="text-align: center; font-size: 25px;">View Records</h1>
          <table width="100%" border="1">
            <thead>
              <tr>
                <th class="mds">&nbsp BIL &nbsp </th>
		        <th class="mds">&nbsp STUDENT NUMBER &nbsp </th>
		        <th class="mds">&nbsp STUDENT NAME &nbsp </th>
		        <th class="mds">&nbsp PHONE NUMBER &nbsp </th>
		        <th class="mds">&nbsp PROGRAM &nbsp </th>
		        <th class="mds">&nbsp HPNM &nbsp </th>
		        <th class="mds">&nbsp STUDENT PA &nbsp </th>
		        <th class="mds" colspan="2">&nbsp ACTION &nbsp </th>
		      </tr>
	        </thead>
			
	        <tbody>
              <?php
	            $count = 1;
		        $se1_query = "SELECT * FROM new_record ORDER BY id asc;";
		        $result = mysqli_query($con,$se1_query);
		        while($row = mysqli_fetch_assoc($result)){
		      ?>
		
	          <tr>
		        <td class="mds1"><?php echo $count; ?></td>
		        <td><?php echo $row['studnum']; ?></td>
		        <td><?php echo $row['studname']; ?></td>
		        <td><?php echo $row['phone']; ?></td>
		        <td><?php echo $row['program']; ?></td>
		        <td><?php echo $row['hpnm']; ?></td>
		        <td><?php echo $row['studpa']; ?></td>
		        <td>&nbsp <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a> &nbsp </td>
		        <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
		      </tr>
		
		      <?php $count++; } ?>

	        </tbody>
	      </table>
	    </div>
	  </div>
	</div>
  </section>

  <footer>
    <p style="text-align: center;">
      <strong style="font-size: small;">Copyright (C) 2014 Privespa All Rights Reserved.</strong>
    </p>
  </footer>

</div>

</body>
</html>