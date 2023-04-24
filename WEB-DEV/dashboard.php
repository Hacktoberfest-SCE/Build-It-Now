<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/project/TS/web/style.css">
</head>

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
$ei=$_SESSION['id'];
?>

<?php
// sql query to fetch all the data
$result = mysqli_query($mysqli,"SELECT * FROM trainee_master where  email='$ei'" );

$i=0;
while($DB_ROW = mysqli_fetch_array($result)) {
?>
<body>
    
<div class="full-page">
<a href="http://localhost/project/TS/web/PROFILE.HTML"><button class="btn" id="b4" >HOME PAGE</button></a>
<div class="display">
<p id="h1" ><h1>Personal details </h1></p>
<table border=1>
    <thead class="thead-dark"> 
        <tr>
            <th>Admin</th>
            <th>Info</th>
        </tr>
    </thead>
        <tbody>
<tr>
    <td>User Name</td>
    <td><?php echo $DB_ROW["name"]; ?></td>
</tr>
<tr>
        <td>User Id</td>
        <td><?php echo $DB_ROW["email"]; ?></td>
</tr>

<tr>
        <td>branch</td>
        <td><?php echo $DB_ROW["branch"]; ?></td>
</tr>
<tr>
        <td>Discipline</td>
        <td><?php echo $DB_ROW["Discipline"]; ?></td>
</tr>
<tr>
        <td>Mobile_no.</td>
        <td><?php echo $DB_ROW["mobile_no"]; ?></td>
</tr>
<tr>
        <td>Guide phone no.</td>
        <td><?php echo $DB_ROW["guide_pno"]; ?></td>
</tr>
<tr>
        <td>Guide name</td>
        <td><?php echo $DB_ROW["guide_name"]; ?></td>
</tr>
<tr>
        <td>Project</td>
        <td><?php echo $DB_ROW["project_title"]; ?></td>
</tr>
</tbody>
    </table>
    <a href="http://localhost/project/TS/web/Feedback.HTML"><button id="b3" class="btn" style="text-align:center;"><b>Feedback form</b></button></a>
    </div>

    </div>
    
</body>
 <?php
$i++;
}
?>
</html>