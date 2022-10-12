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
$ref=$_POST["refno"];
 
  $t =$_SESSION['id']
  if(!empty($_POST["opt1"]))
  {
    $o1=$_POST["opt1"];
  }    
  if(!empty($_POST["opt2"]))
  {
    $o2=$_POST["opt2"];
  }    
  if(!empty($_POST["opt3"]))
  {
    $o3=$_POST["opt3"];
  }    
  if(!empty($_POST["opt4"]))
  {
    $o4=$_POST["opt4"];
  }    
  $re=$_POST["re"];
 
$result = mysqli_query($mysqli,"insert into feedback values('$ref','$o1','$o2','$o3','$o4','$re')");
header("location:http://localhost/project/TS/web/PROFILE.HTML");
$_session = null;
?>

