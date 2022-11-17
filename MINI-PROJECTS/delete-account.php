<?php 
session_start();
include "database.php";
$p_id=$_GET['p_id'];

mysqli_query($con,"delete from passenger_detail where p_id = '$p_id' ")or die(mysqli_error());
mysqli_query($con,"delete from ticket_detail where p_id = '$p_id' ")or die(mysqli_error());
echo "<script>alert('Successfully Delete');
setTimeout(\"location.href = 'logout.php';\",2000);</script>";
?>
<script>alert('Please wait while deleting your data.....|'); </script>