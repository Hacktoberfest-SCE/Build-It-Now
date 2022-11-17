<?php require('header.php');
include "database.php";
?>
<html>
<head>
	<title>Plan Your Trip</title>
		<script src="https://use.fontawesome.com/a59f887248.js"></script>
		<script src="https://kit.fontawesome.com/e404e01acb.js" crossorigin="anonymous"></script>
	<style type="text/css">
		body{ margin: 0px; padding: 0px; background: #e8e5e3 }
		.header{width: 100%;background-image: url('bg/headerbg.png');background-size: cover;background-position:center;background-repeat: no-repeat; height: 60%; display: block; background-attachment: fixed;}
		.header .content-opt{animation: fadee ease-out 8s;animation-iteration-count: 1;background:rgba(255, 255, 255,0.7);width: 65%;height: 80px;margin-left: 17%;outline: none;border-radius: 20px;margin-top: -40px;text-align: center;box-shadow: 2px 5px #d1cbcb;}
		@keyframes fadee{0%{margin-top: -200px; opacity: 0;}50%{opacity: 0;display: none;}100%{margin-top: -40px; opacity: 1; display: block;}}
		.header .search-box{animation: fade ease-in 3s;animation-iteration-count: 1;background:rgba(255, 255, 255,0.5);width: 80%;border: 1px solid #03a199;margin-left: 10%;outline: none;border-radius: 20px;margin-top: 70px;position: absolute;}
		@keyframes fade{0%{margin-left: -10%;}50%{opacity: 0;}100%{margin-left: 10%; opacity: 1;}}
		.header .content-opt .opt-menu table{margin-top: 5px; }
		.header .content-opt .opt-menu a{ text-decoration: none; color:#f76363; }
		.header .content-opt .opt-menu a:hover:not(.active){color: #b83b3b;}
		.header .content-opt .opt-menu td{font-size: 17px;padding-left: 55px;text-decoration: none;}
		.header .content-opt .opt-menu .active{color: #06baae;}
		.header .content-opt .opt-menu i:hover:not(.active){color: #b83b3b;}
		.header .content-opt .opt-menu i{font-size: 40px; color: #f76363;}
/* Checkbox for option " one way" or "round trip" */
.checkmm{margin-top: 15px;}.container {display: block;position: relative;padding-left: 20px;margin-bottom: 12px;cursor: pointer;font-size: 18px;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;float: left;margin-left: 20px;}.container input {position: absolute;opacity: 0;cursor: pointer;}.checkmark {position: absolute;top: 0;left: 0;height: 20px;width: 20px;background-color: #eee;border-radius: 50%;}.container:hover input ~ .checkmark {background-color: #ccc;}.container input:checked ~ .checkmark {background-color: #2196F3;}.checkmark:after {content: "";position: absolute;display: none;}.container input:checked ~ .checkmark:after {display: block;}.container .checkmark:after {top: 5px;left: 5px;width: 8px;height: 8px;border-radius: 50%;background: white;}
/* end Checkbox for option " one way" or "round trip" */
.cont-value{background: whitesmoke;width: 90%;height: 130px;border: 1px solid skyblue;margin-top: 50px;margin-left: 5%;border-radius: 20px;}
.cont-value .form-get-val{width: 20%;height: 90px;float: left;margin-left: 20px;margin-bottom: 30px;}
.cont-value .form-get-val select{width: 100%;font-size: 15px;height: 40px;font-family: sans-serif;border: none;background: whitesmoke; cursor: pointer;}
.cont-value .form-get-val input{cursor: pointer; width: 100%;font-size: 15px;height: 40px;font-family: sans-serif;border: none;background: whitesmoke; }
.cont-value .form-get-val fieldset:hover, .cont-value .form-get-val select:hover,.cont-value .form-get-val input:hover{background: white;}
.cont-value form input[type="submit"]{cursor: pointer;background:#06d6cc; margin-left: -300px; font-size: 30px; font-family: roboto; text-align: center;  margin-top: 30px; margin-bottom: 30px; border:1px solid #03a199; border-radius:20px; outline: none; }
.cont-value form input[type="submit"]:hover{background:#05f7ec; color: }
.dddddddd{transition: 2s; width: 80%;margin-left: 10%;margin-top: 40px;background: white;outline: none;border-radius: 10px;}
.dddddddd:hover{transform: scale(1.2);}
.dddddddd .dd-div{width: 20%;float: left;text-transform: uppercase;}.dddddddd .dd-div .borderr{}
.dddddddd .dd-div h1{margin-top: 30px;}
.dddddddd .dd-div1{ float: left; width: 19%; border-left:1px solid gray; height: 115px;}
.dddddddd .dd-div1 h4{margin-left: 10px; margin-top: -1px;font-family: cabin sketch;color: #8d281e;font-size: 20px; padding: 5px;}
.dddddddd .dd-div1 p{margin-left: 10px; margin-top: -13px; font-family: consolas; font-size: 15px;color: #be463a;}
.dropdown {position: relative;display: inline-block;}
.dropdown-content {display: none;position: absolute;background-color: #f1f1f1;min-width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);z-index: 1;}
.dropdown-content a {color: black;padding: 12px 16px;text-decoration: none;display: block;}
.dropdown-content a:hover {background-color: #ddd;}
.dropdown:hover .dropdown-content {display: block;}
</style>
</head>
<body>
	<div class="header">	
		<div class="search-box">
			<div class="content-opt">
				<div class="opt-menu">
					<table>
						<tr>
							<td title="Book Flight"><a href="#" class="active"><i class="fa fa-plane active" aria-hidden="true" ></i><br>Flights</a></td>
							<td title="Book Train" ><a href="train"><i class="fa fa-train" aria-hidden="true"></i><br>Train</a></td>
							<td title="Book Bus"><a href="bus"><i class="fa fa-bus" aria-hidden="true"></i><br>Buses</a></td>
							<td title="Book Taxi"><a href="#"><i class="fa fa-taxi" aria-hidden="true"></i><br>Taxi</a></td>
							<td title="Book Hotel"><a href="#"><i class="fas fa-utensils" aria-hidden="true"></i><br>Hotel</a></td>
							<td><a href=""><i class="fa fa-home" aria-hidden="true"></i><br>Home & Villas</a></td>
							<td><a href=""><i class="fa fa-ellipsis-h" aria-hidden="true"></i><br>More</a></td>
						</tr>
					</table>
				</div>
			</div>	
			<div class="checkmm">
				<label class="container">One-Way
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				</label>
				<label class="container" title="round trip stopped" >Round-Trip
					<input disabled="disabled" type="radio" name="radio">
					<span class="checkmark"></span>
				</label>
			</div>
			<div class="cont-value">
				<form method="post" action="result.php">
					<div class="form-get-val">
						<fieldset><legend>From</legend>
							<select required name="from">
								<option value="">select your place</option>
								<option value="Pune">Pune</option>
								<option value="Aurangabad">Aurangabad</option>
								<option value="Mumbai">Mumbai</option>
								<option value="Delhi">New Delhi</option>
								<option value="Hyderabad">Hyderabad</option>
								<option value="Bengaluru">Bengaluru</option>
								<option value="Goa">Goa</option>
							</select>
						</fieldset>
					</div>
					<div class="form-get-val">
						<fieldset><legend>To</legend>
							<select required name="to">
								<option value="">select destination</option>
								<option value="Pune">Pune</option>
								<option value="Aurangabad">Aurangabad</option>
								<option value="Mumbai">Mumbai</option>
								<option value="Delhi">New Delhi</option>
								<option value="Hyderabad">Hyderabad</option>
								<option value="Bengaluru">Bengaluru</option>
								<option value="Goa">Goa</option>
							</select>
						</fieldset>
					</div>
					<div class="form-get-val">
						<fieldset><legend>Date</legend>
							<input type="date" name="date">
						</fieldset>
					</div>
					<div class="form-get-val">
						<fieldset><legend>Passenger</legend>
							<select name="pas">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</fieldset>
						<input type="submit" name="submit" value="Search">
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php include('interested-places.php'); ?>
<div class="dddddddd">
	<div class="dd-div">
		<h1 style="font-size: 20px; font-family: bungee inline;color: #8d281e;">Why Book With Us..?</h1>
	</div><div class="borderr"></div>
	<div class="dd-div1">
		<h4>Easy Booking</h4>
		<p>We offer easy and convenient flight bookings with attractive offers.</p>
	</div>
	<div class="dd-div1">
		<h4>Lowest Price</h4>
		<p>We ensure low rates on hotel reservation, holiday packages and on flight tickets.</p>
	</div>
	<div class="dd-div1">
		<h4>Exciting Deals</h4>
		<p>Enjoy exciting deals on flights, hotels, buses, car rental and tour packages.</p>
	</div>
	<div class="dd-div1">
		<h4>24/7 SUPPORT</h4>
		<p>Get assistance 24/7 on any kind of travel related query. We are happy to assist you</p>
	</div><br clear="all">
</div>
<?php include('footer.php'); ?>
</body>
</html>