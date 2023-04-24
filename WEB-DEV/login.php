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
$id=$_POST["pno"];
 $pwd=$_POST["pass"];
  $_SESSION['id']=$id;    
 
$result = mysqli_query($mysqli,"select*from admin_login where personal_number='$id' and password='$pwd'" );
if($result->num_rows>0)
{echo "welcome";
  $result1 = mysqli_query($mysqli,"select*from trainee_master where email='$id'" );
  if($result1->num_rows>0)
  {
    // echo"information filled succesfully";
   
    header("location:http://localhost/dashboard.php");

  }
  else
  {
    header("location:http://localhost/project/TS/web/f1.html");

  }
}
else
{
    echo "envalid id or password";
}
// $_session_is_registered=$id;
?>
