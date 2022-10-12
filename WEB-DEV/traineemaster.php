<h1> 
<?php
session_start();
$user = 'root';
$password = 'A252119h#';
 
// Database name is geeksforgeeks
$database = 'web';
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
// if ($mysqli){
//     echo "Connection successful!!!";
// }
$rn=$_POST["refno"];
$nm=$_POST["fname"];
$d=$_POST["discipline"];
 $b=$_POST["branch"];
 $mn=$_POST["mobileno"];
 $id=$_POST["mail"];
 $gno=$_POST["gno"];
 $gna=$_POST["gname"];
 $t=$_POST["title"];
 $cn=$_POST["college"];
 
$result = mysqli_query($mysqli,"insert into trainee_master values('$id','$nm','$d','$b','$mn','$id','$gno','$gna','$t','$cn')");
echo "record inserted successfully";
    
?>
