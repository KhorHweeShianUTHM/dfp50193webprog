<?php
session_start();
session_destroy();
echo "<script >alert(\"You are logout.\")</script>";
echo "<script>
setTimeout(function(){
    window.location.href='index.php';}, 500);
    </script>";
    exit;
?>