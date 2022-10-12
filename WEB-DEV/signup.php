<h1> 
<?php

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
$id=$_POST["mail"];
 $pwd=$_POST["pass"];
 $nm=$_POST["fname"];
 if (!empty($_POST["option"]))
 {
    $gd=$_POST["option"];
 }
$result = mysqli_query($mysqli,"insert into admin_login values('$id','$pwd','$nm','$gd')");
echo "record inserted successfully";
    
?>
