<?php 
if (isset($_POST['create'])) {
	include "db_conn.php";
	
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$username = validate($_POST['username']);
	$v_appoint = validate($_POST['v_appoint']);
	$v_status = validate($_POST['v_status']);
	$v_certi = validate($_POST['v_certi']);
	
	if (empty($username)) {
		header("Location: insert.php?id=$id&error=Username is required");
	}else if (empty($v_appoint)) {
		header("Location: insert.php?id=$id&error=v_appoint is required");
	}else if (empty($v_status)) {
		header("Location: insert.php?id=$id&error=v_status is required");
	}else if (empty($v_certi)) {
		header("Location: insert.php?id=$id&error=v_certi is required");
	}else {
       $sql = "INSERT INTO users(username, v_appoint, v_status, v_certi) 
               VALUES('$username', '$v_appoint', '$v_status', '$v_certi')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: home.php?success=successfully updated");
       }else {
          header("Location: insert.php?id=$id&error=unknown error occurred");
       }
	}
}
?>