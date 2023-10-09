<?php require('header.php');

include "database.php";
if (isset($_SESSION['tic_f_id'])) {
	
?>
<script src="https://use.fontawesome.com/a59f887248.js"></script>
<script src="https://kit.fontawesome.com/e404e01acb.js" crossorigin="anonymous"></script>
<style type="">
	.print{display: none;}
	@media print{
		.site-name,.footer,.contain{display: none;}
		.print{display: block;}
	}
	.main{width: 45%;margin-left: 10%;border-right:2px dotted red;font-family: cabin sketch;float: left;
	}
	.main .sub{width: 100%;float: left;position: relative;
	}
	.main .sub .head{border:1px solid skyblue;border-radius: 20px 0 20px 0/20px 0 20px 0;border-outline:none;height: 35px;color: white;background:linear-gradient(to left,#08d4d4,#1ae8e8,#37fafa);font-size: 35px;
	}
	.main .sub .head h2{margin-left: 5px; text-decoration: none;font-size: 20px; margin-top: -1px;margin-top: 5px;}
	.main .sub .body{width: 100%;border:1px solid gray;border-radius:  0 20px 0 20px/ 0 20px 0 20px;
	}
	.main .sub .body .qr{float: right; margin-top: -110px; margin-right: 20px;}
	.main .sub .body .qr img{width: 100px;height: 100px;
	}
	.main1{width: 25%;font-family: cabin sketch;float: left;
	}.main1 .head{border:1px solid skyblue;border-radius: 0 20px 0 20px/ 0 20px 0 20px;border-outline:none;height: 35px;color: skyblue;background:linear-gradient(to left,white,whitesmoke,#37fafa);	
	}.main1 .head h2{text-align: right; text-decoration: none;font-size: 20px; margin-top: -1px;margin-top: 5px;
	}.main1 .body1{width: 100%;border:1px solid gray;border-radius:  20px 0 20px 0/20px 0 20px 0;}
	.print .main11{width: 50%;font-family: cabin sketch;margin-left: 200px;
	}.print .main11 .head{border:1px solid skyblue;border-radius: 0 20px 0 20px/ 0 20px 0 20px;border-outline:none;height: 35px;color: skyblue;background:linear-gradient(to left,white,whitesmoke,#37fafa);	
	}.print .main11 .head h2{text-align: right;color:black; text-decoration: none;font-size: 20px; margin-top: -1px;margin-top: 5px;
	}.print .main11 .body1{width: 100%;border:1px solid gray;border-radius:  20px 0 20px 0/20px 0 20px 0;}
	.down i{color:#2ffa44;}
	.down i:hover{color:#1efaeb;
	}
</style>

<div class="contain">
	<div class="main">
		<div class="sub">
			<div class="head">
				<h2><i class="fas fa-plane-departure"></i> E-Ticket Booking System</h2>
				<h2 style="float: right; margin-top:-38px;margin-right: 5px; font-family: sans-serif;font-weight: bold; font-style: italic; ">Boarding Pass</h2>
			</div>
			<div class="body">
				<table cellspacing="5px" style="text-align: left;">
					<tr>
						<th>Passenger Name</th>
					</tr>
					<tr>
						<td><?php echo $_SESSION['tic_last_name'];?><?php echo " "; echo $_SESSION['tic_first_name'];echo "<br>";?></td>
					</tr>
					<tr>
						<th>From</th>
						<th width="10%">Flight</th>
						<th width="10%">Date</th>
						<th width="50%">Time</th>
					</tr>
					<tr>
						<td width="30%"><?php echo $_SESSION['tic_f_from'];?></td>
						<td width="20%"><?php echo $_SESSION['tic_f_name'];?></td>
						<td width="25%"><?php echo $_SESSION['tic_f_date'];?></td>
						<td width="25%"><?php echo $_SESSION['tic_f_time'];?></td>
					</tr>
					<tr>
						<th>To</th>
						<tr><td><?php echo $_SESSION['tic_f_to'];?></td></tr>
					</tr>
					<tr>
						<th>Gate</th>
						<th>Boarding</th>
						<th style="padding-left: 15px;">Seat</th>
					</tr>
					<tr>
						<td>---</td>
						<td>---</td>
						<td style="padding-left: 15px;"><?php echo $_SESSION['tic_seat'];?></td>
					</tr>
				</table>
				<div class="qr">
					<img src="icon/qr.jpg">
				</div>
				<div style="height: 10px; background:linear-gradient(to left,#08d4d4,#1ae8e8,#37fafa);border-radius:  0 0 0 20px/ 0 0 0 20px; "></div>
			</div>
			
		</div>

	</div>
	<div class="main1">
		<div class="head">
				<h2>Have A Nice Flight...</h2>
			</div>
		<div class="body1">
				<table cellspacing="5px" style="text-align: left;">
					<tr>
						<th>Passenger Name</th>
					</tr>
					<tr><td><?php echo $_SESSION['tic_last_name'];?><?php echo " "; echo $_SESSION['tic_first_name'];echo "<br>";?></td></tr>
					<tr>
						<th>From</th>
						<th>To</th>
					</tr>
					<tr>
						
						<td><?php echo $_SESSION['tic_f_from'];?></td>
						<td><?php echo $_SESSION['tic_f_to'];?></td>
					</tr>
					<tr>
						<th>Flight</th>
						<th>Date</th>
						<th>Time</th>
					</tr>
					<tr>
						
						<td><?php echo $_SESSION['tic_f_name'];?></td>
						<td><?php echo $_SESSION['tic_f_date'];?></td>
						<td><?php echo $_SESSION['tic_f_time'];?></td>
					</tr>
					
					<tr>
						<th>Gate</th>
						<th>Boarding</th>
						<th>Seat</th>
					</tr>
					<tr>
						<td>---</td>
						<td>---</td>
						<td><?php echo $_SESSION['tic_seat'];?></td>
					</tr>
				</table>
				<div style="height: 10px; background:linear-gradient(to left,#08d4d4,#1ae8e8,#37fafa);border-radius:  0 0 25px 0/0 0 25px 0;} "></div>
			</div>
			
	</div><br clear="all">


<center>
	<h2 class="down" style="color: #7d2323; margin-right: 100px;">Download Your Ticket <i class="fa fa-hand-o-right" aria-hidden="true"></i> <a title="Download Ticket" href="javascript:window.print()">  <i class="fa fa-print" aria-hidden="true"></i></a></h2>
<h2 style="font-family: sans-serif; border: 2px solid green; border-radius: 10px; padding: 10px;">Enjoy Your Trip.......|</h2>
</center>
</div>
<?php
}else{
	header('location:index.php');
}
include('footer.php');
?>

<div class="print">
	<div class="main" style="width: 80%">
		<div class="sub">
			<div class="head">
				<h2><i class="fas fa-plane-departure"></i> E-Ticket Booking System</h2>
				<h2 style="float: right; margin-top:-38px;margin-right: 5px; font-family: sans-serif;font-weight: bold; font-style: italic; ">Boarding Pass</h2>
			</div>
			<div class="body">
				<table cellspacing="5px" style="text-align: left;">
					<tr>
						<th>Passenger Name</th>
					</tr>
					<tr>
						<td><?php echo $_SESSION['tic_last_name'];?><?php echo " "; echo $_SESSION['tic_first_name'];echo "<br>";?></td>
					</tr>
					<tr>
						<th>From</th>
						<th width="10%">Flight</th>
						<th width="10%">Date</th>
						<th width="50%">Time</th>
					</tr>
					<tr>
						<td width="30%"><?php echo $_SESSION['tic_f_from'];?></td>
						<td width="20%"><?php echo $_SESSION['tic_f_name'];?></td>
						<td width="25%"><?php echo $_SESSION['tic_f_date'];?></td>
						<td width="25%"><?php echo $_SESSION['tic_f_time'];?></td>
					</tr>
					<tr>
						<th>To</th>
						<tr><td><?php echo $_SESSION['tic_f_to'];?></td></tr>
					</tr>
					<tr>
						<th>Gate</th>
						<th>Boarding</th>
						<th style="padding-left: 15px;">Seat</th>
					</tr>
					<tr>
						<td>---</td>
						<td>---</td>
						<td style="padding-left: 15px;"><?php echo $_SESSION['tic_seat'];?></td>
					</tr>
				</table>
				<div class="qr">
					<img src="icon/qr.jpg">
				</div>
				<div style="height: 10px; background:linear-gradient(to left,#08d4d4,#1ae8e8,#37fafa);border-radius:  0 0 0 20px/ 0 0 0 20px; "></div>
			</div>
			
		</div>
	</div><br clear="all">
	<div class="main11">
		<div class="head">
				<h2>Have A Nice Flight...</h2>
			</div>
		<div class="body1">
				<table cellspacing="5px" style="text-align: left;">
					<tr>
						<th>Passenger Name</th>
					</tr>
					<tr><td><?php echo $_SESSION['tic_last_name'];?><?php echo " "; echo $_SESSION['tic_first_name'];echo "<br>";?></td></tr>
					<tr>
						<th>From</th>
						<th>To</th>
					</tr>
					<tr>
						
						<td><?php echo $_SESSION['tic_f_from'];?></td>
						<td><?php echo $_SESSION['tic_f_to'];?></td>
					</tr>
					<tr>
						<th>Flight</th>
						<th>Date</th>
						<th>Time</th>
					</tr>
					<tr>
						
						<td><?php echo $_SESSION['tic_f_name'];?></td>
						<td><?php echo $_SESSION['tic_f_date'];?></td>
						<td><?php echo $_SESSION['tic_f_time'];?></td>
					</tr>
					
					<tr>
						<th>Gate</th>
						<th>Boarding</th>
						<th>Seat</th>
					</tr>
					<tr>
						<td>---</td>
						<td>---</td>
						<td><?php echo $_SESSION['tic_seat'];?></td>
					</tr>
				</table>
				<div style="height: 10px; background:linear-gradient(to left,#08d4d4,#1ae8e8,#37fafa);border-radius:  0 0 25px 0/0 0 25px 0;} "></div>
			</div>
			
	</div>
</div>