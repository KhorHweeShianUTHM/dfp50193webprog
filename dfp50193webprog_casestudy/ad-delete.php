<?php  
include "db_conn.php";
if(isset($_GET['id']))
{
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);
    
    $sql = "DELETE FROM tblfyp WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("Successfully deleted!")</script>';
        header("Location: ad-view.php?id=$id&success=successfully deleted");
    }else {
        header("Location: ad-view.php?id=$id&error=unknown error occurred");
   }
}
?>