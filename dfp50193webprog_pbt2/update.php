<?php 
if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
	
	$id = validate($_GET['id']);

	$sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: home.php");
    }


}else if(isset($_POST['update'])){
    include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
	
	$id = validate($_POST['id']);
	$username = validate($_POST['username']);
	$v_appoint = validate($_POST['v_appoint']);
	$v_status = validate($_POST['v_status']);
	$v_certi = validate($_POST['v_certi']);

	if (empty($username)) {
		header("Location: update.php?id=$id&error=Username is required");
	}else if (empty($v_appoint)) {
		header("Location: update.php?id=$id&error=v_appoint is required");
	}else if (empty($v_status)) {
		header("Location: update.php?id=$id&error=v_status is required");
	}else if (empty($v_certi)) {
		header("Location: update.php?id=$id&error=v_certi is required");
	}else {

       $sql = "UPDATE users
               SET username='$username', v_appoint='$v_appoint' , v_status='$v_status', v_certi='$v_certi'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: home.php?success=successfully updated");
       }else {
          header("Location: update.php?id=$id&error=unknown error occurred");
       }
	}
}
?>