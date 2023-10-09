<?php session_start();
include "database.php";
?>
<link rel="stylesheet" type="text/css" href="css/border-style.css">
<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link id="bootstrap-style" href="css/slide.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<style type="text/css">body{ margin: 0px; padding: 0px; }
		.site-name{color:white; width: 80%;height: 70px;background: #050108;margin-top: 20px;margin-left: 10%;border: 1px solid #03a199;outline: none;border-radius: 30px;}.site-name img{position: relative;width: 50px;margin:10px;float: left;}.site-name .h4{float: right; margin-top: -80px; margin-right: 25px; color:white; }.site-name  .h4 img{width: 20px;margin-top:-1px;}.site-name .h41{float: right; margin-top: -80px; margin-right: 150px; text-decoration: none;} .site-name .h41 a{ text-decoration: none; color: #fff;  }.site-name  .h41 img{width: 20px;margin-top:-1px;}.menu-list{text-transform: uppercase;float:right;margin-top: -60px;}
		.site-name h1{text-shadow: 3px 5px 5px red;}
.dropdown {position: relative;display: inline-block;}
.dropdown-content {display: none;position: absolute;background-color: #f1f1f1;min-width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);z-index: 1;}
.dropdown-content a {color: black;padding: 12px 16px;text-decoration: none;display: block;}
.dropdown-content a:hover {background-color: #ddd;}
.dropdown:hover .dropdown-content {display: block;}
	</style>
<div class="site-name" id="navbar">
			<img src="bg/booking-icon.png">
			<h1>Plan Your Trip</h1>
			<h4 class="h4"><img src="icon/call--.png"> 7760794782</h4>
			<h4 class="h41"><img src="icon/mail.png"><a href="mailto:mayank.sawarn88@gmail.com">mayank.sawarn88@gmail.com</a></h4>
			<div class="menu-list">
				<ul>
					<a class="border-style" href="index.php"><span></span><span></span><span></span><span></span>Home</a>
					<a class="border-style" href="">Service</a>
					<a class="border-style" href="about.php">About Us</a>
					<a class="border-style" href="https://www.instagram.com/sawarn_mayank/" target="blank">Contact Us</a>
			<?php if (isset($_SESSION['mail']))
					{
						$user_type=$_SESSION['user'];
						if ($user_type=='Admin')
						{ ?>
							<div class="dropdown">
  							<a class="border-style" style="background: black; color:skyblue; border-radius: 10px;" href=""><span></span><span></span><span></span><span></span>Welcome Admin</a>
							<div class="dropdown-content">
								<a href="admine.php">Profile</a>
    							<a href="logout.php">logout</a>
							</div>	
				<?php	}else{ ?>
						<div class="dropdown">
  							<a class="border-style" style=" border-radius: 10px;" href=""><span></span><span></span><span></span><span></span><?php echo $_SESSION['mail']; ?></a>
							<div class="dropdown-content">
								<a href="profile.php">Profile</a>
    							<a href="logout.php">logout</a>
							</div>
						</div>

					<?php } }else{ ?>
						<a class="border-style" href="login1.php">Login</a>
					<?php } ?>
				</ul>
			</div>
		</div>