<?php
include "database.php";
if (isset($_POST["sub"])) {

	$name=$_POST["name"];
	$email=$_POST["mail"];
	$mobile=$_POST["mnumber"];
	$msg=$_POST["msg"];

	$to = $_POST["mail"];
	$subject = "Thanks for your Valuable Feedback";
/*	$txt = "<html><head><style>
		.div1{text-align:center;color:green;border:1px solid gray;} span{margin-top:60px;background:whitesmoke;}</style></head><body><div class='div1'><img src='bg/mail.jpg'><h1>Thanks for Contacting With Us....|<br> We will Come back Shortly</h1><span>This is System Generated Email....|<br>do not reply...|<br>For More Detail</span></div>";
	$headers = "From: itsmeyrfrnds@gmail.com";

	if(mail($to,$subject,$txt,$headers))
	{
		$smsg="mail send successfull......|<br>";
		$query= " INSERT INTO feedback(name,email,mobile,msg) VALUES ('$name','$email','$mobile','$msg') ";

	}
	else{ $errmsg="failed to send email...|";}*/
	$query= " INSERT INTO feedback(name,email,mobile,msg) VALUES ('$name','$email','$mobile','$msg') ";
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "<script> alert('Thanks for contacting with us.....|')</script>";
	}else{echo "<script> alert('try again .....|')</script>";}
}
?>

<script src="https://use.fontawesome.com/a59f887248.js"></script>
		<script src="https://kit.fontawesome.com/e404e01acb.js" crossorigin="anonymous"></script>
<style type="text/css">
	.footer-main{position: relative; margin-top: 30px; background-image: url('bg/footer-bg.jpg'); background-size: cover;background-position: center;background-repeat: no-repeat;}
	.footer{ margin-top: 30px; background: rgba(13, 13, 12,0.5);}.contact{ background: rgba(112, 250, 244,0.2); width: 30%;text-align: center;position: relative;cursor: pointer;margin: 20px 15%;border: 1px solid black;float: left;color: white;display: block;border: 1px solid #838584;box-shadow: 5px 7px 5px rgb(50,66,69);}.contact input,textarea{width: 80%;height: 30px;text-indent: 10px;margin-top: 10px;padding: 5px;font-family: inherit;font-size: 20px;cursor: pointer;}.contact input:hover,textarea:hover{box-shadow: 0 0 25px #4e6665;}.foot{background:gray; font-size: 15px;font-family: sans-serif;color: white;text-align: center;}.contact1{background: rgba(112, 250, 244,0.2);float: left;width: 30%;color: white;text-decoration: none;text-align: center;position: relative;font-size: 17px;margin: 5px 0px;border: 1px solid black;float: left;display: block;border: 1px solid #838584;box-shadow: 5px 7px 5px rgb(50,66,69);}.contact1 a{color: white;text-align: center;cursor: pointer;}.contact1 p{ margin: 8px; padding: 5px; }.contact1 a i{ font-size: 30px; margin-bottom: 10px; margin-left: 5px; padding: 5px; }.contact1 a i:hover{background: white;}.contact:hover, .contact1:hover{-moz-box-shadow: 0 0 25px rgb(50,66,69);-webkit-box-shadow: 0 0 25px rgb(50,66,69);box-shadow: 0 0 25px rgb(50,66,69);}.contact input:focus,textarea:focus{ border-color: #06d6cc; box-shadow: 0 0 25px #4e6665;}
</style>
<div class="footer-main">
<div class="footer contact-us" id="footer">
		<div class="contact">
			<h1>Get In Touch</h1>
			<form method="post">
				<input type="text" name="name" placeholder="Enter Your Full Name" required>
				<input type="text" name="mail" placeholder="Enter Your Email" required>
				<input type="text" name="mnumber" placeholder="Enter Your Mobile Number" required>
				<textarea name="msg" placeholder="Enter Your Message" required></textarea>
				<input type="submit" name="sub" value="SEND">
			</form>
		</div>
		<div class="contact1">
			<p>
				<span>Mayank Sawarn</span><br>
				<span>Mobile Number : 7760794782</span><br>
				<span>Email : <a href="Mailto:mayank.sawarn88@gmail.com">mayank.sawarn88@gmail.com</a></span>
			</p>
			<a id="fa-hand" href="" title="See Link" style="color: red;"><i class="fa fa-hand-o-right" aria-hidden="true"></i></a>
    		<a id="fa-facebook" href="https://www.facebook.com/mayank.sawarn.39/" title="Facebook" style="color: #3b5998;"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
    		<a id="fa-insta" href="https://www.instagram.com/sawarn_mayank/" title="Instagram" style="color: #FE0883;"><i class="fab fa-instagram" aria-hidden="true"></i></a>
    		<a id="fa-tele" href="https://t.me/sawarn_mayank/" title="Telegram" style="color:  #0088cc;"><i class="fab fa-telegram" aria-hidden="true"></i></a>
    		<a id="fa-linkin" href="https://www.linkedin.com/in/mayank-sawarn-ab5549155/" title="Linkedin" style="color: #0e76a8;"><i class="fab fa-linkedin-square" aria-hidden="true"></i></a>
		</div>
		
		<br clear="all">
		<div class="foot">
			<h1 style="font-family: cursive;">© Plan Your Trip... All Rights Reserved</h1>
		</div>
	</div>
</div>