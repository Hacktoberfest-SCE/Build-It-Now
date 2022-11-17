<?php 
session_start();
include "database.php";
$ID=$_SESSION['flight_id'];
$mob=$_SESSION['s_mobile'];
$mail=$_SESSION['s_mail'];

	$f_id=$_SESSION['flight_id'];
			$query1 = "SELECT * FROM schedule INNER JOIN passenger_detail ON schedule.f_id='$f_id' && passenger_detail.mobile='$mob' && email='$mail' ";
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
<html>
<head>
	<title></title>
</head>
<body style="background:#979997;">
		<div style="width: 100%; margin-top: 50px;">
			<div style="background: white; margin-left: 30%; width: 40%; opacity: 1; box-shadow: 2px 2px 5px 5px #9fcc9f; border-radius: 10px; outline: none;">

				<img style=" margin-left: 40%;margin-top: 20px; width: 20%; outline: none; border-radius: 40px;" src="icon/loading.gif">
				<h1 style="font-size: 20px; margin:30px; padding-bottom: 20px;">Plaese Wait While generating Your Payment.........</h1>
			</div>
</html>