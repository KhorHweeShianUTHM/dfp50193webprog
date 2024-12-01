<?php  
session_start();
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['usertype'])) {
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$usertype = test_input($_POST['usertype']);

	if (empty($username)) {
		header("Location: index.php?error=Username is Required");
	}else if (empty($password)) {
		header("Location: index.php?error=Password is Required");
	}else {
		$password = $password;
        
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] === $password && $row['usertype'] == $usertype) {
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['usertype'] = $row['usertype'];
        		$_SESSION['username'] = $row['username'];

        		header("Location: home.php");

        	}else {
        		header("Location: index.php?error=Incorect Username or password or usertype");
        	}
        }else {
        	header("Location: index.php?error=Incorect Username or password or usertype");
        }
	}
}else {
	header("Location: index.php");
}
?>