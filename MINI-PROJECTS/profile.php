<?php require('header.php');
include "database.php";
if (!isset($_SESSION['mail'])){
 	header('location:login1.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.opt-cont{width: 20%;overflow: hidden;background: white;border: 1px solid gray;border-radius: 10px;outline: none;margin-left: 10%;float: left;}
		.opt-cont .opt-list{width: 70%;overflow: hidden;margin-left: 15%;}
		.opt-cont .opt-list form input{border: none;background: white;color:#3d3d3d;font-family:roboto;font-size:18px;padding-top: 15px;cursor: pointer;}
		.opt-cont .opt-list form input:hover{color: black;border-bottom:2px solid black;}
		.result-cont{width: 55%;overflow: hidden;background: white;border: 1px solid gray;border-radius: 10px;outline: none;float: right;margin-right: 10%;}
		.result-cont .per-det-cont{width: 90%;margin: 3%;}
		.result-cont .per-det-cont table,th,td{border: 1px solid gray;border-collapse: collapse;width:800px;}
		.result-cont .fl-book-det{width: 90%;margin: 3%;}
		.result-cont .fl-book-det table,th,td{border: 1px solid gray;border-collapse: collapse;width:800px;}
	</style>
</head>
<body style="background:whitesmoke;">
	<div class="opt-cont">
		<div class="opt-list">
			<form method="post">
				<input type="submit" name="sub1" value="Personal Detail"><br>
				<input type="submit" name="sub3" value="Cancel Booking"><br>
				<input type="submit" name="sub2" value="Past Bookings">
			</form>
		</div>
	</div>
<div class="result-cont">
	<div class="per-det-cont">
		<?php
			if (isset($_POST['sub1']))
			{
				$mail=$_SESSION['mail'];
				$mobile=$_SESSION['mobile'];
				
				$query=mysqli_query($con," SELECT * FROM passenger_detail WHERE email='$mail' && mobile='$mobile' ");
				$rows=mysqli_fetch_array($query);
				?>
				<table>
					<caption style="font-weight: bold; font-size: 25px;">Personal Data</caption>
					<tr>
						<th>Full Name</th><th>Mobile No.</th><th>Email Id.</th>
						<th>Address</th><th>Dist</th><th>State</th>
						<th>Country</th>
					</tr>
					<tr>
						<td><?php echo $rows['last_name'];echo " ";echo $rows['first_name']; ?></td>
						<td><?php echo $rows['mobile']; ?></td>
						<td><?php echo $rows['email']; ?></td>
						<td><?php echo $rows['address1']; ?></td>
						<td><?php echo $rows['dist']; ?></td>
						<td><?php echo $rows['state']; ?></td>
						<td><?php echo $rows['country']; ?></td>
					</tr>
				</table>
				<center><a style="margin:20px;" href="update-detail.php<?php echo "?p_id=".$rows['p_id'];  ?>"> update </a>
				<a href="delete-account.php<?php echo "?p_id=".$rows['p_id'];  ?>"> delete </a></center>
			<?php } ?>
	</div>
	<div class="cncl-book-det">
		<?php
			if (isset($_POST['sub3']))
			{ ?>
				<p style="color: red; text-align: center;">No Any Active Booking....</p>
		<?php } ?>
	</div>
	<div class="fl-book-det">
		<?php
			if (isset($_POST['sub2']))
			{
				$mail=$_SESSION['mail'];
				$mobile=$_SESSION['mobile'];
				
				$query=mysqli_query($con," SELECT * FROM passenger_detail WHERE email='$mail' && mobile='$mobile' ");
				$rows=mysqli_fetch_array($query);
				$id=$rows['p_id'];
				$id=$id;
				$query=mysqli_query($con," SELECT * FROM ticket_detail WHERE p_id='$id' ");
				?>
				<table>
					<caption style="font-weight: bold; font-size: 25px;">Your Bookings</caption>
						<tr>
							<th>Flight Id</th><th>Seat Number</th><th>Your Name</th>
							<th>Flight Name</th><th>Flight From</th><th>Flight To</th>
							<th>Total Amount</th>
						</tr>
				<?php
				while($rows=mysqli_fetch_array($query))
				{
					?>
						<tr>
							<td><?php echo $rows['f_id']; ?></td>
							<td><?php echo $rows['seat_num']; ?></td>
							<td><?php echo $rows['last_name']; ?></td>
							<td><?php echo $rows['f_name']; ?></td>
							<td><?php echo $rows['f_from']; ?></td>
							<td><?php echo $rows['f_to']; ?></td>
							<td><?php echo $rows['total_amount']; ?></td>
							<td><a href="delete-flight.php<?php echo"?f_id=".$rows['f_id'];echo"&p_id=".$rows['p_id']; ?>">delete</a></td>
						</tr>
				<?php } ?> </table> <?php
			}
		?>
	</div>
</div><br clear="all">
</body>
</html>
<?php include('footer.php'); ?>