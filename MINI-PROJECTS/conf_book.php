<?php require('header.php');
include "database.php";
	$passenger=$_SESSION['pass'];

if(isset($_POST['Promo']))
{
	$code=$_POST['code'];
	if (empty($code)) {
		$msg="Please Enter Promo Code";
	}
	elseif ($code=="NEW25")
	{
		$total=$_SESSION['total_amount'];
		$dis=($total/25);
		$msg2=$total-$dis;
		$msg1=$dis;
	}else{
		$msg="You enter Wrong Code";
	}
}



 ?>
<html>
<head>
	<title></title>
<style type="text/css">
body{background: whitesmoke;
font-family: sans-serif;}
.container{ width: 100%; background: #e0dede;text-align: center; }
.container .container1{
	width: 80%; background: whitesmoke; display: block;  margin-left: 10%; margin-top: 50px; margin-bottom: 20px; 
}
.container .container1 .flght-dt-cont{float: left; background: white; margin-top: -15px; width: 40%; height: 150px; text-align: left;  border: 1.5px solid gray; outline: none; border-radius: 15px; }
.container .container1 .flght-dt-cont img{ width: 40%; border-radius: 20px;}
.container .container1 .flght-dt-cont .td:not(.ntd){ padding-left: 30px;padding-top: 20px; width: 80px; font-weight: bold; }
.container .container1 .flght-dt-cont .td1:not(.td11){ padding-left: 30px; width: 80px; font-style: italic; }
.container .container1 .tot-pay-dt{ background: white; margin-top: -15px; width: 30%;  text-align: left;  border: 1.5px solid gray; outline: none; border-radius: 15px; float: left; margin-left: -140px; }
.container .container1 .user-dt-cont{ width: 100%; text-align: center; margin-top: 35px; border:1px solid gray; border-radius: 10px;}
.container .container1 .user-dt-cont .user-dt{ width: 95%; background: white; padding: 10px; margin-top: -20px; outline: none; border-radius: 15px;}
.container .container1 .user-dt-cont .user-dt table td input{cursor: pointer; width: 90%; height: 35px; border:1px solid gray; outline: none; border-radius: 10px; text-indent: 8px; font-size: 15px; }
.container .container1 .user-dt-cont .user-dt table th{ font-size: 20px; }
.container .container1 .user-dt-cont .user-dt table td input:focus{border-color: skyblue; box-shadow: 1px 1px 1px 1px skyblue;}
.container .container1 .final-sub-c{ width: 100%; text-align: center; margin-top: 35px; border:1px solid gray; border-radius: 10px; }
.container .container1 .final-sub-c .rule{text-align: left; width: 95%; background: white; padding: 10px; margin-top: -20px; outline: none; border-radius: 15px;}
.container .container1 .final-sub-c .rule input{cursor: pointer; font-size: 20px; }
.container .container1 .final-sub-c .rule input:hover{text-transform: uppercase;}
.container .container1 .user-dt-cont .user-dt .err-msg{ padding-left: 5px; color: red; font-size: 13px; }

.tot-pay-dt-promo{background: white; margin-top: -15px; width: 20%; height: 150px; text-align: left;  border: 1.5px solid gray; outline: none; border-radius: 15px; float: left; margin-left: 40px; text-align: center;}
.tot-pay-dt-promo input{width: 95%; font-size: 20px;padding: 5px; margin: 10px;}
</style>
</head>
<body>
	<div class="container">
		<div class="container1">				
				<?php  
				$ID=$_GET['flight_id'];
				$_SESSION['flight_id'] = $ID;
				$query= " SELECT * FROM schedule WHERE f_id='$ID' ";
				$result=mysqli_query($con,$query);
				while ($row = mysqli_fetch_array($result))
				{
?>
					<p style=" float: left; font-weight: bold; font-size: 20px;padding-left: 10px; text-align: left;">Flight Summary</p><br clear="all">
					<div class="flght-dt-cont">
						<div style="font-size: 20px; font-weight: bold; padding: 5px; word-spacing: 5px;">
							<span><?php echo $row['f_from']; echo "-"; echo$row['f_to']; ?></span><br>
							<span style="font-size: 15px;"><?php echo "Departure "; echo $row['date']; ?></span>
						</div><div style="border-bottom: 2px solid gray;"></div>
						<div>
							<table >
							<tr>
								<td class="td ntd"><span><img src="<?php echo $row['f_logo'];?>"><?php echo $row['f_name']; ?></span></td>
								<td class="td"><span><?php echo $row['departure'];?></span></td>
								<td class="td"><span style="color: green; font-size: 13px;">5 h 30 m</span></td>
								<td class="td"><span><?php echo $row['arrival'];?></span></td>
						</tr>
						<tr>
								<td class="td11"><span></span></td>
								<td class="td1"><span><?php echo $row['f_from'];?></span></td>
								<td class="td1"><span style="border-top: 3px solid gray; font-size: 13px; color: green;">Non-Stop</span></td>
								<td class="td1"><span><?php echo $row['f_to'];?></span></td>
							</tr>
						</table>
						</div>
					</div>
					<p style="float: left; font-weight: bold; font-size: 20px;padding-left: 50px; text-align: left; margin-top: -39px;">Fare Summary</p>
					<div class="tot-pay-dt">
						<h4 style="margin-left: 15px; margin-top:-3px; padding-top: 10px;"><span>Base Fare</span></h4>
						<?php $sum= $passenger*$row['price'];
								$total = $sum+757; $_SESSION['total_amount']=$total;?>
						<div>
							<table style=" font-size: 15px; margin-left: 30px; margin-top: -20px; width: 90%;">
								<td>Adult(s)<?php echo $passenger; echo " X "; echo "₹ ".$row['price'];?></td>
								<td style="text-align: right;"><?php echo "₹ "; echo $sum;?></td>
							</table>
						</div><hr>
						<div>
							<table style=" font-size: 15px; margin-left: 30px;width: 90%;">
								<td>tax & Servise charge</td>
								<td style="text-align: right;"><?php echo "₹ "; echo "757";?></td>
							</table>
						</div><hr>
						<div>
							<table style=" font-size: 15px; margin-left: 30px; width: 90%;">
								<tr><td>Total Amount</td>
								<td style="text-align: right; font-weight: bold;"><?php echo "₹ "; echo $total;?></td></tr>
								<?php if (isset($msg1)) { ?>
								<tr><td>Total Discount</td>
								<td style="text-align: right; font-weight: bold;"><?php echo "₹ "; echo $msg1; ?></td></tr>
								<tr><td>Total Amount</td>
								<td style="text-align: right; font-weight: bold;"><?php echo "₹ "; echo $msg2; ?></td></tr> <?php }?>

							</table>
						</div>
					</div>

					<p style="float: left; font-weight: bold; font-size: 20px;padding-left: 50px; text-align: left; margin-top: -39px;">Promo Code /discount </p>
					<div class="tot-pay-dt-promo">
						<?php 

								if (isset($msg1)) {
									echo "<br><br>Your Promo Code Successfully Applied";
									?>
										<br><br><a href="conf_book.php<?php echo '?flight_id='.$ID; ?>">Remove Promo</a>
									<?php
								}else{
									?> <form method="post">
							<label for="code">You have any Promo Code</label>
							<input type="text" name="code" placeholder="Enter Promo code">
							<input type="submit" name="Promo" value="Apply Promo">
							<?php
								if (isset($msg)) {
									echo $msg;
								}
								}
							?>
							</form>
					</div>

					<br clear="all">
				<?php
				}
				?>
			<div class="user-dt-cont">
				<p style="font-weight: bold; font-size: 20px;padding-left: 5px; margin-top: -0.5px; padding-top: 5px; text-align: left;">Traveller Details</p>
					<?php if (isset($_SESSION['mail'])){
					?>
						<div class="user-dt">
							<?php
								$mail= $_SESSION['mail'];
								$mobile=$_SESSION['mobile'];

								$query=" SELECT * FROM passenger_detail WHERE mobile='$mobile' && email='$mail' ";
								$data = mysqli_query($con,$query);
								while ($row = mysqli_fetch_array($data)) 
								{?>
									<?php $passenger_id = $row['p_id'];	$_SESSION['p_id'] = $passenger_id; echo $_SESSION['p_id']; $_SESSION['total_amount'] = $total;?>
									<fieldset style="border-radius: 15px; text-align: left; font-weight: bold;">
										<legend>Personal Detail</legend>
										<table style="width: 90%; text-align: left; font-size: 15px;">
											<tr>
												<td>your id</td>
												<td>Last Name</td>
												<td>First Name</td>
												<td></td>
												<tr style="font-size: 20px; color: green;">
													<td><?php echo $row['p_id']; ?></td>
													<td><?php echo $row['last_name']; ?></td>
													<td><?php echo $row['first_name']; ?></td>
													<td></td>
												</tr>
											</tr>
											<tr>
												<td>Address Information</td>
												<td> street address</td>
												<td>district</td>
												<tr style="font-size: 20px; color: green;">
													<td></td>
													<td><?php echo $row['address1']; ?></td>
													<td><?php echo $row['dist']; ?></td>
												</tr>
											</tr>
											<tr>
												<td></td>
												<td>State</td>
												<td>Country</td>
												<tr style="font-size: 20px; color: green;">
													<td></td>
													<td><?php echo $row['state']; ?></td>
													<td><?php echo $row['country']; ?></td>
												</tr>
											</tr>
											<tr>
												<td>Contact Information</td>
												<td>Mobile Number</td>
												<td>Email</td>
												<tr style="font-size: 20px; color: green;">
													<td></td>
													<td><?php echo $row['mobile']; ?></td>
													<td><?php echo $row['email']; ?></td>
													<td></td>
												</tr>
											</tr>
										</table>
									</fieldset>
							<?php } ?>
						</div>
						<botton style="background-image: linear-gradient(to left,#1edbe8,#089ca6); border: 1px solid #ffd57a; outline: none; border-radius: 20px; width: 150px;padding: 6px; color: white; margin-left:30%; margin-top: 10px;"><a href="ticket.php<?php echo '?flight_id='.$ID; ?><?php echo '?pa_id='.$passenger_id; ?><?php echo '?total_amout='.$total; ?>"> Continue</a></botton>
					<?php }else{ ?>
				<div class="user-dt">
					<form method="post" action="ticket.php<?php echo '?flight_id='.$ID; ?>&&<?php echo '?total_amout='.$total; ?>" onsubmit="return reg_validation()">
						<fieldset style="border-radius: 15px; text-align: left; font-weight: bold;">
							<legend>Personal Detail</legend>
							<table style="width: 90%; text-align: left;">
								<tr>
									<td>Last Name <span class="err-msg" id="lname_message"></span></td>
									<td>First Name <span class="err-msg" id="fname_message"></span></td>
									<td>Middle Name <span class="err-msg" id="mname_message"></span></td>
									<tr>
										<td><input type="text" name="lname" id="lname" autocomplete="off"></td>
										<td><input type="text" name="fname" id="fname" autocomplete="off"></td>
										<td><input type="text" name="mname" id="mname" autocomplete="off"></td>
									</tr>
								</tr>
								<tr>
									<td style="padding-top: 15px; font-weight: bold; font-size: 15px; ">Address Information<span class="err-msg" id="add1_message"></span></td>
									<td><span class="err-msg" id="add2_message"></span> </td>
									<td style="padding-top: 15px; font-size: 15px; ">Sub Dist/Taluka<span class="err-msg" id="add3_message"></span></td>
									<tr>
										<td><input type="text" name="add1" id="add1" placeholder="House no/Lane no"></td>
										<td><input type="text" name="add2" id="add2" placeholder="Street Address"></td>
										<td><input type="text" name="add3" id="add3" placeholder="Sub Dist/Taluka"></td>
									</tr>
								</tr>
								<tr>
									<td style="font-size: 15px;">District<span class="err-msg" id="dis_message"></span></td>
									<td style="font-size: 15px;">State<span class="err-msg" id="stt_message"></span></td>
									<td style="font-size: 15px;">Country<span class="err-msg" id="coun_message"></span></td>
									<tr>
										<td><input type="text" name="dis" id="dis" placeholder="District"></td>
										<td><input type="text" name="stt" id="stt" placeholder="State"></td>
										<td><input type="text" name="coun" id="coun" placeholder="Country"></td>
									</tr>
								</tr>
								<tr>
									<td style="padding-top: 15px; font-weight: bold; font-size: 15px; ">Contact Information<br><span style="font-weight: normal; font-size: 10px;">Your ticket and flights information will be sent here.</span></td>
									<td style="padding-top: 15px; font-size: 10px;"><span class="err-msg" id="mob_message"></span></td>
									<td style="padding-top: 15px; font-size: 10px;"><span class="err-msg" id="mail_message"></span></td>
									<tr>
										<td></td>
										<td><input type="text" name="mobile" id="mobile" placeholder="Mobile Number"></td>
										<td><input type="text" name="mail" id="mail" placeholder="Email Id"></td>
									</tr>
								</tr>
							</table>
						</fieldset>
				</div>
			</div>
			<div class="final-sub-c">
				<p style="font-weight: bold; font-size: 20px;padding-left: 5px; margin-top: -0.5px; padding-top: 5px; text-align: left;">Acknowledgement</p>
				<div class="rule">
					<td><input type="checkbox" checked="checked" name="check" id="myCheck" onclick="myFunction()">I understand and agree with the Fare <a href="#">Rules</a> , the Privacy <a href="#">Policy</a> , the User Agreement and Terms of Service of E-ticket booking</td>
					<p id="text" style="display:none; color: red; font-size: 12px; margin-left: 25px; ">Please accept terms and conditions.</p>
					<br><input style="background-image: linear-gradient(to left,#1edbe8,#089ca6); border: 1px solid #ffd57a; outline: none; border-radius: 20px; width: 150px;padding: 6px; color: white; margin-left:30%; margin-top: 10px;" type="submit" name="submit" value="Continue">
				</div></form>
			</div><?php }?>
		</div>
	</div>
<script>
	function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == false){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}

function reg_validation()
{
	var lname = document.getElementById('lname').value;
	var fname = document.getElementById('fname').value;
	var mname = document.getElementById('mname').value;
	var add1 = document.getElementById('add1').value;
	var add2 = document.getElementById('add2').value;
	var add3 = document.getElementById('add3').value;
	var dis = document.getElementById('dis').value;
	var stt = document.getElementById('stt').value;
	var coun = document.getElementById('coun').value;
	var mobile = document.getElementById('mobile').value;
	var mail = document.getElementById('mail').value;
	
	if(lname == ""){
		document.getElementById('lname_message').innerHTML ="* This field Is Mandatory..";
		return false;}	if(fname == ""){
		document.getElementById('fname_message').innerHTML ="* This field Is Mandatory..";
		return false;}	if(mname == ""){
		document.getElementById('mname_message').innerHTML ="* This field Is Mandatory..";
		return false;}	if(!isNaN(mname))
	{
		document.getElementById('mname_message').innerHTML ="** This field Is Mandatory..";
		return false;}	if(add1 == ""){
		document.getElementById('add1_message').innerHTML ="**..";
		return false;}	if(add2 == ""){
		document.getElementById('add2_message').innerHTML ="* This field Is Mandatory..";
		return false;}	if(add3 == ""){
		document.getElementById('add3_message').innerHTML ="**..";
		return false;}	if(dis == ""){
		document.getElementById('dis_message').innerHTML ="* This field Is Mandatory..";
		return false;}	if(stt == ""){
		document.getElementById('stt_message').innerHTML ="* This field Is Mandatory..";
		return false;}	if(coun == ""){
		document.getElementById('coun_message').innerHTML ="* This field Is Mandatory..";
		return false;}	if(mobile == "")
	{
		document.getElementById('mob_message').innerHTML = "* This field Is Mandatory..";
		return false;}	if(isNaN(mobile))
	{
		document.getElementById('mob_message').innerHTML ="* Alphabate not allowd";
		return false;}	if(mobile.length!=10)
	{
		document.getElementById('mob_message').innerHTML ="* number must be 10 digit..";
		return false;}	if(mail == "")
	{
		document.getElementById('mail_message').innerHTML ="* This field Is Mandatory..";
		return false;}	if(mail.indexOf('@') <= 0 )
	{
		document.getElementById('mail_message').innerHTML = "*Enter Correct Email.."
		return false;}
	if((mail.charAt(mail.length-4)!='.') && (mail.charAt(mail.length-3)!='.'))
	{
		document.getElementById('mail_message').innerHTML = "* This field Is Mandatory..";
		return false;}}
</script>
</body>
</html>
<?php include('footer.php'); ?>