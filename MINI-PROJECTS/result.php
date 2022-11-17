<?php require('header.php');
include "database.php";
?>
<html>
<head>
	<title></title>
<style>
	body{ 
            opacity: 0;
            transition: opacity 6s;
        }
	.fdetail_cont{ width: 100%;background: whitesmoke;text-align: center;display: block;position: relative;border:1px solid #a6a6a6;box-shadow: 2px 2px 5px 5px #b3b1b1;margin-bottom: 20px;}
	.fdetail_cont .fdetail{animation-iteration-count: 1;animation: evenfade ease-in 3s;
		width: 70%; height: 90px; background: white;text-align: center;display: block;position: relative;border:1px solid #a6a6a6;margin-top: 15px;margin-bottom: 15px;margin-left: 15%;box-shadow: 2px 2px 2px #9b9e9c;}.fdetail_cont .fdetail img{width: 70px; float: left; align-items: center; margin-top: 10px; border-radius: 50%;}.fdetail_cont .fdetail .aaaa .tag{ font-size: 15px; }.fdetail_cont .fdetail .aaaa{ float: left; text-align: center; font-family: sans-serif; font-size: 50px; margin-top: 20px; margin-bottom: 20px;  }.fdetail_cont .fdetail .aaaa span:not(.not){ padding-left: 25px;}.fdetail_cont .fdetail .aaaa span:not(.tag){font-size: 25px;}.fdetail_cont .fdetail .aaaa .btn a{text-decoration: none; background: #18a30b; border: 1px solid #0d5906; color: white; border-radius: 10px; outline: none; padding: 5px;" }
	.btn a:hover{color: red;}
	</style>
</head><body style="background: white;" onload="document.body.style.opacity='1'">
<?php
if (isset($_POST['submit']))
{

		$from= $_POST["from"];
		$to= $_POST["to"];
		$date=$_POST["date"];
		$pass=$_POST["pas"];
		$_SESSION['pass'] = $pass;
		$_SESSION['date'] = $date;
		$query=" SELECT * FROM schedule WHERE f_from='$from' && f_to='$to' ORDER BY departure ASC";
		$data = mysqli_query($con,$query);
		?>
		<span style="margin-left: 20%; position: absolute;margin-top: 5px; font-family: sans-serif;font-size: 20px;color: red;"><?php echo "You are here : ". $from ;?></span><span style=" margin-left: 68%; position: relative;font-family: sans-serif;font-size: 20px;color: red;"><?php echo $to ;?></span>
			<span style="margin-left: 60px;"><button onclick="goBack()">Back To Search...</button></h3></span>
			<center><img style="position: relative; width: 50%;height: 80px;margin-top: -25px; margin-bottom: 30px; " src="gif/air_load1.gif" alt="load flight"></center>
			
		<script>
		function goBack() {
		  window.history.back();
		}
		</script>
		<?php
		while ($row = mysqli_fetch_array($data)) 
		{
		?>
		<style type="text/css">@keyframes evenfade{
		0%{opacity: 0;}
		100%{opacity: 1;}
	}</style>
		<div class="fdetail_cont">
			<div class="fdetail">
				<img src="<?php echo $row['f_logo']; ?>">
				<div class="aaaa">
					<table style="color: #eb9b4b; font-family: sans-serif;">
						<tr>
							<tr style="color:#c2670c ;">
								<td></td>
								<td><span class="tag">From</span></td>
								<td><span class="tag">To</span></td>
								<td><span class="tag">Departure</span></td>
								<td><span class="tag">Duration</span></td>
								<td><span class="tag">Arrival</span></td>
								<td><span class="tag">Price</span></td>
							</tr>
							<td><span style="font-size: 15px;" class="not"><?php echo $row['f_name']; ?></span></td>

							<td><span><?php echo $row['f_from']; ?></span></td>

							<td><span><?php echo $row['f_to']; ?></span></td>
				
							<td><span><?php echo $row['departure']; ?></span></td>
							<td><span style="color: green; font-size: 15px;">Non-Stop</span></td>
							<td><span><?php echo $row['arrival']; ?></span></td>
							<td><span style="color: #8c3f08;"><?php echo $row['price']; ?></span></td>

							<td><span class="btn"><a href="conf_book.php<?php echo '?flight_id='.$row['f_id']; ?>&&<?php echo '?passengr='.$pass; ?>">BOOK</a></span></td>
						</tr>
					</table>
				</div><br clear="all">
			</div>
		</div>
		<?php
		}
}else{

		$to= $_GET["flight"];
		$pass=1;
		$_SESSION['pass'] = $pass;
		$query=" SELECT * FROM schedule WHERE f_to='$to' ORDER BY departure ASC";
		$data = mysqli_query($con,$query);
		?>
		<span style=" margin-left: 68%; position: relative;font-family: sans-serif;font-size: 20px;color: red;"><?php echo $to ;?></span>
			<span style="margin-left: 60px;"><button onclick="goBack()">Back To Search...</button></h3></span>
			<center><img style="position: relative; width: 50%;height: 80px;margin-top: -25px; margin-bottom: 30px; " src="gif/air_load1.gif" alt="load flight"></center>
		<script>
		function goBack() {
		  window.history.back();
		}
		</script>
		<?php
		while ($row = mysqli_fetch_array($data)) 
		{
		?>
		<style type="text/css">@keyframes evenfade{
		0%{opacity: 0;}
		100%{opacity: 1;}
	}</style>
		<div class="fdetail_cont">
			<div class="fdetail">
				<img src="<?php echo $row['f_logo']; ?>">
				<div class="aaaa">
					<table style="color: #eb9b4b; font-family: sans-serif;">
						<tr>
							<tr style="color:#c2670c ;">
								<td></td>
								<td><span class="tag">From</span></td>
								<td><span class="tag">To</span></td>
								<td><span class="tag">Departure</span></td>
								<td><span class="tag">Duration</span></td>
								<td><span class="tag">Arrival</span></td>
								<td><span class="tag">Price</span></td>
							</tr>
							<td><span style="font-size: 15px;" class="not"><?php echo $row['f_name']; ?></span></td>
							<td><span><?php echo $row['f_from']; ?></span></td>
							<td><span><?php echo $row['f_to']; ?></span></td>
							<td><span><?php echo $row['departure']; ?></span></td>
							<td><span style="color: green; font-size: 15px;">Non-Stop</span></td>
							<td><span><?php echo $row['arrival']; ?></span></td>
							<td><span style="color: #8c3f08;"><?php echo $row['price']; ?></span></td>
							<td><span class="btn"><a href="conf_book.php<?php echo '?flight_id='.$row['f_id']; ?>">BOOK</a></span></td>
						</tr>
					</table>
				</div><br clear="all">
			</div>
		</div>
		<?php
		}
}
include('footer.php');
?>