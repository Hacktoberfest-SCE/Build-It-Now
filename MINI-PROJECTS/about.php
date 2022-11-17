<?php
require('header.php');
?>
<br clear="all">
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<title></title>
	<style type="text/css">
		body{
			background: rgb(244, 240, 237);
		}
		.Contacts{width: 70%;text-align: center; border: 1px solid rgb(153, 103, 47);float: left;margin: 0 15%;text-align: center;box-shadow: 0 0 5px #a69380, 0 0 10px #a69380, 0 0 20px #a69380, 0 0 20px #a69380;}
		.Contacts:hover p{color:orange;box-shadow: 0 0 5px skyblue,
						0 0 10px skyblue,
						0 0 20px skyblue,
						0 0 200px skyblue;}
		.adds{width: 30%;margin: 20px auto;text-align:center;}
		.adds img{width: 130px;height: 130px;border-radius: 50%;clip-path: circle(60px at center);transition: 1s;}
		.adds img:hover{border-radius: 30%; clip-path: circle(500px at center);}
		.map{position: relative;margin: 10px 15%;border: 1px solid rgb(153, 103, 47);width: 70%;height: 300px;}
		.feed{border: 1px solid rgb(153, 103, 47);width: 60%;margin: 15px 20%;}
		.feed input{width: 35%;height: 30px;margin: 10px;padding: 5px;font-size: 20px;border: 1px solid rgb(153, 103, 47);border-bottom: 2px solid rgb(153, 103, 47);}
		.feed textarea{width: 70%;font-size: 20px;height: 70px;margin: 10px;padding: 5px;border: 1px solid rgb(153, 103, 47);border-bottom: 2px solid rgb(153, 103, 47);}
		.feed input[type="submit"]{width: 25%;padding: 0px;font-size: 25px;cursor: pointer;background: rgb(247, 191, 143);}
		.feed input[type="submit"]:hover{background: rgb(173, 99, 17);color: white;}
	</style>
</head>
<body>
	<br clear="all">
	<center><div class="meet" style="background: skyblue;box-shadow: 0 0 5px skyblue,
						0 0 10px skyblue,
						0 0 20px skyblue,
						0 0 20px skyblue; width: 20%;padding: 0; top: 0;"><h3 style="font-family: cursive;font-size: 25px; color: white;">...Meet Our Team...</h3></div></left>
	<div class="Contacts">
		<div class="adds">
			<img src="bg/me.jpg">
			<p><i class="far fa-address-book"></i><b> Mayank Sawarn</b><br><i class="fas fa-envelope-open"></i> mayank.sawarn88@gmail.com</br><i class="fas fa-mobile-alt"></i> 7760794782</br>Begusarai</br> Bihar-851117</p>
		</div>
	</div>
</h3></div></right>
	<div class="Contacts">
		<div class="adds">
			<img src="bg/Aman.jpeg">
			<p><i class="far fa-address-book"></i><b> Amandeep Singh</b><br><i class="fas fa-envelope-open"></i> pankaj123@gmail.com</br><i class="fas fa-mobile-alt"></i> 7795637732</br>Bijnour</br> UP-560090</p>
		</div>
	</div>
<br clear="all">
	<div class="feed">
		<h1>Get In Touch</h1>
		<form action="contact.php" method="POST">
			<input type="text" name="name" required placeholder="Name">

			<input type="email" name="email" required placeholder="Email">

			<input type="text" name="mobile" required placeholder="Mobile Number">

			<textarea name="message" placeholder="Your Message" required></textarea>

			<input type="submit" name="submit" value="Send">
		</form>
	</div>
</body>
</html>
<?php
require('footer.php');
?>