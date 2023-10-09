<?php include('header.php');
include "database.php";
$user_type=$_SESSION['user'];
if (!isset($_SESSION['user'])){
 	header('location:login1.php');
}
if ($user_type!="Admin"){
 	header('location:profile.php');
}
?>
	<style type="text/css">
		.opt-cont{width: 20%;overflow: hidden;background: gray;border: 1px solid gray;border-radius: 10px;outline: none;margin-left: 10%;float: left;}
		.opt-cont .opt-list{width: 70%;overflow: hidden;margin-left: 15%;}
		.opt-cont .opt-list form input{border: none;color:white;background: none;font-family:roboto;font-size:18px;padding-top: 7px;cursor: pointer;}
		.opt-cont .opt-list input:hover{background: whitesmoke;color: black;}
		.result-cont{width: 58%;overflow: hidden;background: white;border: 1px solid gray;border-radius: 10px;outline: none;float: right;margin-right: 10%;}
		.result-cont .per-det-cont{width: 90%;margin: 3%;}
		.result-cont .per-det-cont table,th,td{border-collapse: collapse;border-bottom: 1px solid #ddd;width:850px;padding: 5px;}
		.result-cont .per-det-cont tr:hover{background-color: #f5f5f5;}
		.result-cont .per-det-cont tr:nth-child(even) {background-color: #f2f2f2;}
	</style>
	<div class="opt-cont">
		<div class="opt-list">
			<form method="post">
				<div class="inp"><input type="submit" name="sub1" value="User List"></div>
				<div class="inp"><input type="submit" name="sub2" value="All Bookings"></div>
				<div class="inp"><input type="submit" name="sub3" value="Manage Schedule"></div>
				<div class="inp"><input type="submit" name="add-admin" value="Add Admin"></div>
			</form>
		</div>
	</div>
	<div class="result-cont">
		<div class="per-det-cont">
			<?php
			if (isset($_POST['sub1']))
			{
						$query=mysqli_query($con," SELECT * FROM passenger_detail order by p_id asc ");
				?>
				<table>
					<caption style="font-weight: bold; font-size: 25px;">User Data</caption>
					<tr>
						<th>id</th>
						<th>Full Name</th>
						<th>Mobile No.</th>
						<th>Email Id.</th>
						<th>Address</th>
						<th>Dist</th>
						<th>State</th>
						<th>Country</th>	
					</tr>
					<?php 
						while($rows=mysqli_fetch_array($query))
						{
							$user_type=$rows['user_type'];
					?>
					<tr>
						<td><?php echo $rows['p_id']; ?></td>
						<td><?php echo $rows['last_name'];echo " ";echo $rows['first_name']; ?></td>
						<td><?php echo $rows['mobile']; ?></td>
						<td><?php echo $rows['email']; ?></td>
						<td><?php echo $rows['address1']; ?></td>
						<td><?php echo $rows['dist']; ?></td>
						<td><?php echo $rows['state']; ?></td>
						<td><?php echo $rows['country']; ?></td>
					<?php	if ($user_type!="Admin"){ ?>
 							<td><a href="admin-delete-user.php<?php echo "?p_id=".$rows['p_id'];  ?>"> delete </a></td>
				<?php
						}else{ echo "<td>Admin</td></tr>";}
						
			} ?> </table>
		<?php	}
		?>
		</div>
		<div class="per-det-cont">
			<?php
			if (isset($_POST['sub2']))
			{
						$query=mysqli_query($con," SELECT * FROM ticket_detail ORDER BY t_id asc ");
				?>
				<table>
					<caption style="font-weight: bold; font-size: 25px;">List Of Flight Bookings</caption>
					<tr>
						<th>f-id</th>
						<th>p-id</th>
						<th>Full Name</th>
						<th>Flight Name</th>
						<th>Flight From</th>
						<th>Flight To</th>
						<th>Seat Number</th>
						<th>Amount</th>
					</tr>

					<?php 
						while($rows=mysqli_fetch_array($query))
						{
					?>
					<tr>
						<td><?php echo $rows['f_id']; ?></td>
						<td><?php echo $rows['p_id']; ?></td>
						<td><?php echo $rows['last_name'];echo " ";echo $rows['first_name']; ?></td>
						<td><?php echo $rows['f_name']; ?></td>
						<td><?php echo $rows['f_from']; ?></td>
						<td><?php echo $rows['f_to']; ?></td>
						<td><?php echo $rows['seat_num']; ?></td>
						<td><?php echo $rows['total_amount']; ?></td>
						<td><a href="admin-delete-flight.php<?php echo "?p_id=".$rows['p_id'];echo "&f_id=".$rows['f_id'];  ?>"> delete </a></td>
				</tr>
				<?php

			} foreach($con->query('SELECT SUM(total_amount) FROM ticket_detail') as $row)
				{
			?><td colspan="8" style="text-transform: uppercase;text-align:right;padding-right: 30px; color: red;">Total Amount =  <?php echo $row['SUM(total_amount)']; ?></td><?php
		} ?></table>
		<?php }
		?>
		</div>
		<div class="">
			<?php if (isset($_POST['add-admin']))
			{
				include('registration.php');
			} ?>
			
		</div>

	</div><br clear="all">
<?php include('footer.php'); ?>

<?php

if (isset($_POST['submit']))
{

	$user=$_POST['usertype_opt'];
	$lname=$_POST['l_Name'];
	$fname=$_POST['F_Name'];
	$add2=$_POST['addrs'];
	$dis=$_POST['dist'];
	$stt=$_POST['state'];
	$coun=$_POST['country'];
	$mobile=$_POST['M_Number'];
	$mail=$_POST['Email'];

	$check ="SELECT * FROM passenger_detail WHERE mobile = '$mobile' && email='$mail' ";
	$result=mysqli_query($con,$check);
	$num=mysqli_num_rows($result);

	if($num) { ?> <center><p style="font-size: 20px;"> <?php
		echo "<script>alert('Email Id and Mobile Number Already Registered')</script>";
		header('refresh:5 url=login1.php'); ?> </p> </center>
	<?php
	} else{
		if ($user=="Admin") {
			$form = "INSERT INTO passenger_detail(user_type,last_name,first_name,address1,dist,state,country,mobile,email) VALUES ('$user','$lname','$fname','$add2','$dis','$stt','$coun','$mobile','$mail')";
			mysqli_query($con,$form); 
			mysqli_close($con);
			echo "<script>alert('You Are Now Admin....')</script>";
		}else{
			$form = "INSERT INTO passenger_detail(user_type,last_name,first_name,address1,dist,state,country,mobile,email) VALUES ('$user','$lname','$fname','$add2','$dis','$stt','$coun','$mobile','$mail')";
			mysqli_query($con,$form); 
			mysqli_close($con);
			echo "<script>alert('You Are Now User....')</script>";
		}
	}
}
?>