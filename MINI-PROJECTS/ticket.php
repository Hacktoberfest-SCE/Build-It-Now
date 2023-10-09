<?php require('header.php');
include "database.php";
$ID=$_GET['flight_id'];
echo $_SESSION['flight_id'];

echo $ID;

if (isset($_SESSION['mail'])){
	echo $_SESSION['total_amount'];
	echo $_SESSION['mobile'];
?>

<html>
<head>
	<title></title>
</head>
<body style="background:#979997;">
		<div style="width: 100%; margin-top: 50px;">
			<div style="background: white; margin-left: 30%; width: 40%; opacity: 1; box-shadow: 2px 2px 5px 5px #9fcc9f; border-radius: 10px; outline: none;">

				<img style=" margin-left: 40%;margin-top: 20px; width: 20%; outline: none; border-radius: 40px;" src="icon/loading.gif">
				<h1 style="font-size: 20px; margin:30px; padding-bottom: 20px;dd">Plaese Wait While Generating Your Payment.........</h1>
	<?php
	$f_id=$_SESSION['flight_id'];
	$p_id=$_SESSION['p_id'];
	$query1 = "SELECT * FROM schedule INNER JOIN passenger_detail ON schedule.f_id='$f_id' && passenger_detail.p_id='$p_id' ";
	$result= mysqli_query($con,$query1);
	while($row = mysqli_fetch_array($result)){

		$f_id=$row['f_id'];
		$p_id=$row['p_id'];
		$last_name=$row['last_name'];
		$first_name=$row['first_name'];
		$f_name=$row['f_name'];
		$f_from=$row['f_from'];
		$f_date=$row['date'];
		$f_time=$row['departure'];
		$f_to=$row['f_to'];
		$price=$_SESSION['total_amount'];
		$seat_num=$f_name.rand(99,999);
		echo $seat_num;



		$form = "INSERT INTO ticket_detail(f_id,p_id,last_name,first_name,f_name,f_from,f_to,total_amount,seat_num) VALUES ('$f_id','$p_id','$last_name','$first_name','$f_name','$f_from','$f_to','$price','$seat_num')";
	mysqli_query($con,$form);
	}
	

$_SESSION['tic_f_id']=$f_id;
$_SESSION['tic_p_id']=$p_id;
$_SESSION['tic_last_name']=$last_name;
$_SESSION['tic_first_name']=$first_name;
$_SESSION['tic_f_name']=$f_name;
$_SESSION['tic_f_from']=$f_from;
$_SESSION['tic_f_to']=$f_to;
$_SESSION['tic_f_date']=$f_date;
$_SESSION['tic_f_time']=$f_time;
$_SESSION['tic_price']=$price;
$_SESSION['tic_seat']=$seat_num;
					header('refresh:3 url=payment.php?flight_id='.$ID);

?>
				
			</div>
		</div>
<?php }else{

		$user="N/A";
		$lname=$_POST['lname'];
		$fname=$_POST['fname'];
		$add2=$_POST['add2'];
		$dis=$_POST['dis'];
		$stt=$_POST['stt'];
		$coun=$_POST['coun'];
		$mobile=$_POST['mobile'];
		$mail=$_POST['mail'];



$check ="SELECT * FROM passenger_detail WHERE mobile = '$mobile' && email='$mail' ";
$result=mysqli_query($con,$check);
$num=mysqli_num_rows($result);

if($num) { ?> <center><p style="font-size: 20px;"> <?php
echo "Email Id and Mobile Number Already Registered....... log in please<br>";
echo "Userrname : <span style='color:red;'>".$mail."</span>";
echo "<br>Password : <span style='color:red;'>Your Mobile Number</span>";
header('refresh:5 url=login.php?flight_id='.$ID); ?></p> </center>
<?php
} else{
$_SESSION['s_mobile']= $mobile;
$_SESSION['s_mail']= $mail;

	$form = "INSERT INTO passenger_detail(user_type,last_name,first_name,address1,dist,state,country,mobile,email) VALUES ('$user','$lname','$fname','$add2','$dis','$stt','$coun','$mobile','$mail')";
	mysqli_query($con,$form); 
	mysqli_close($con);
?>

<html>
<head>
	<title></title>
</head>
<body style="background:#979997;">
		<div style="width: 100%; margin-top: 50px;">
			<div style="background: white; margin-left: 30%; width: 40%; opacity: 1; box-shadow: 2px 2px 5px 5px #9fcc9f; border-radius: 10px; outline: none;">

				<img style=" margin-left: 40%;margin-top: 20px; width: 20%; outline: none; border-radius: 40px;" src="icon/loading.gif">
				<h1 style="font-size: 20px; margin:30px; padding-bottom: 20px;dd">Please Wait While Processing Your Request.........</h1>
				<?php 
				$price=$_SESSION['total_amount'];
echo $price;
					header('refresh:3 url=save.php?flight_id='.$ID);

				?>
				
			</div>
		</div>
</body>
</html>
<?php
}
}

include('footer.php');
?>



