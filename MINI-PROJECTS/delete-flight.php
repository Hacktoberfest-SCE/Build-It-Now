<?php 
session_start();
include "database.php";
$p_id=$_GET['p_id'];
$f_id=$_GET['f_id'];
mysqli_query($con,"delete from ticket_detail where p_id = '$p_id' && f_id='$f_id' ")or die(mysqli_error());
?>
<center><h1>Please wait while deleting your Flight.....|</h1></center>
<?php
echo "<script>alert('Successfully Delete');
setTimeout(\"location.href = 'profile.php';\",2000);</script>";
?>