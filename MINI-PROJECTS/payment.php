<?php require('header.php');
include "database.php";
?>
<html>
<head>
	<title></title>
	<script src="https://use.fontawesome.com/a59f887248.js"></script>
		<script src="https://kit.fontawesome.com/e404e01acb.js" crossorigin="anonymous"></script>
	<style>
		.pay-cont{width: 80%;background: whitesmoke;margin-left: 10%;margin-top: 30px;}
		.cont{width: 60%;margin-left: 10%;background: #e6e1e1;}
		.add-cont{width: 40%;margin-left: 20px;float: left;}
		.add-cont input, .card-cont input{width: 100%;margin-left: 5px;height: 40px;margin-top: 10px;margin-bottom: 10px;}
		.card-cont{width: 40%;float: left;margin-left: 40px;}
		.expdate input{width: 100%;margin-left: 5px;height: 40px;margin-top: 10px;margin-bottom: 10px;}
		input[type="submit"]{width: 50%;margin-left: 25%; font-size: 20px;padding:5px; background: #76f1f5; border-radius: 10%; outline: none;}
	</style>
</head>
<body>
	<div style="width: 100%; margin-top: 50px; position: absolute;">
		<div id="div3" style="width: 100%; margin-top: 35px;">
			<div style="background: rgba(112, 250, 244,0.2); margin-left: 30%; width: 40%; opacity: 1; box-shadow: 2px 2px 5px 5px #9fcc9f; border-radius: 10px; outline: none;">

				<img style=" margin-left: 40%;margin-top: 20px; width: 20%; outline: none; border-radius: 40px;" src="icon/25.gif">
				<h1 style="font-size: 20px; margin:30px; padding-bottom: 20px;">Please Wait Generating Your Ticket.........</h1>
<?php 
if (isset($_SESSION['mail'])) {
	echo $_SESSION['mobile'];
}else{
echo $_SESSION['s_mobile'];
}
$ID=$_SESSION['flight_id'];
header('refresh:6 url=final.php?flight_id='.$ID);

?>			
			</div>
		</div>
	</div>

	<div class="pay-cont">
		<div class="cont" >
			<h1>Total Amount :- <?php  
			
			if (isset($_SESSION['tic_price'])) {
			 	echo $_SESSION['total_amount'];
			 }else{echo $_SESSION['tic_price'];}  ?></h1>
			<form>
				<div class="add-cont">
					<p style="font-size: 20px;font-family: sans-serif;padding:20px;">Billing Address</p>
					<label for="fname"><i class="fa-lg fa fa-user"></i> Full Name</label>
            		<input type="text" id="fname" name="firstname" placeholder="your full name">
            		<label for="email"><i class="fa-lg fa fa-envelope"></i> Email</label>
            		<input type="text" id="email" name="email" placeholder="xyz@example.com">
            		<label for="adr"><i class="fa-lg fa fa-address-card-o"></i> Address</label>
            		<input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            		<label for="city"><i class="fa-lg fa fa-institution"></i> City</label>
            		<input type="text" id="city" name="city" placeholder="New York">
            		<div class="expdate">
                		<table> <tr> <td><label for="state">State</label></td>
                					<td><label for="zip">Zip</label></td> </tr>
              		</div>
              		<div class="expdate">
                		<tr>
                		<td><input type="text" id="state" name="state" placeholder="NY"></td>
                		<td><input type="text" id="zip" name="zip" placeholder="10001"></td></tr></table>
              		</div>
				</div>
				<div class="card-cont">
					<p style="font-size: 20px;font-family: sans-serif;padding:20px;">Payment</p>
					<label for="fname">Accepted Cards</label>
            		<div style="margin-top: 17px; margin-bottom: 10px;">
            			<i class="fa-2x fab fa-cc-visa" aria-hidden="true" style="color:navy;"></i>
            			<i class="fa-2x fab fa-cc-amex" aria-hidden="true" style="color:blue;"></i>
            			<i class="fa-2x fab fa-cc-mastercard" style="color:red;"></i>
            			<i class="fa-2x fab fa-cc-discover" aria-hidden="true" style="color:orange;"></i>
            		</div>
            		<label for="cname">Name on Card</label>
            		<input type="text" id="cname" name="cardname" placeholder="xyz">
            		<label for="ccnum">Credit card number</label>
            		<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            		<label for="expmonth">Exp Month</label>
            		<input type="text" id="expmonth" name="expmonth" placeholder="September">
            		<div class="expdate">
                		<table> <tr> <td><label for="expyear">Exp Year</label></td>
                					<td><label for="cvv">CVV</label></td> </tr>
              		</div>
              		<div class="expdate">
                		<tr>
                		<td><input type="text" id="expyear" name="expyear" placeholder="2019"></td>
                		<td><input type="text" id="cvv" name="cvv" placeholder="352"></td></tr></table>
              		</div>
				</div><br clear="all">
				<input type="submit" name="submit" value="Make A Payment" disabled="disabled">
			</form>
		</div>
	</div>	
</body>
</html>
<?php include('footer.php'); ?>