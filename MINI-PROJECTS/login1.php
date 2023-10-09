<?php require('header.php');
include "database.php";	
if (isset($_SESSION['mail'])){
 	header('location:index.php');
} 				
?>
<html>
<head>
	<title>my website | Register form</title>
	<link rel="stylesheet" type="text/css" href="css/CSS_login.css">
</head>
<body>
<center>
	<div class="login-form">
		<h2>Login</h2>
		<div class="login-form-body">
			<form method="POST" onsubmit="return login_validation()">
				<label class="emessage" id="message"><span class="spanm"> Enter Email : </span></label><br>
				<input type="email" id="mail" name="email" placeholder="Please Enter Email"><br>

				<span><label class="emessage" id="pass_message"><span class="spanm">Enter Password : </span></label></span><br>
				<input type="password" id="pass" name="password" placeholder="Please Enter Secret Password">
					<span id="s"></span>
				<input type="submit" name="submit" value="Login">
			</form>
		</div>
	</div>
</center>
<script type="text/javascript">
	function login_validation()
{
	var emails = document.getElementById('mail').value;
	var passwords = document.getElementById('pass').value;

	
	if(emails == ""){
		document.getElementById('message').innerHTML =" ** Please fill the email id field";
		return false;
	}
	if(emails.indexOf('@') <= 0 ){
		document.getElementById('').innerHTML =" ** @ Invalid Position";
		return false;
	}
	if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
		document.getElementById('message').innerHTML =" ** . Invalid Position";
		return false;
	}
	if(passwords == ""){
		document.getElementById('pass_message').innerHTML =" *Please fill the password field";
		return false;
	}
}

</script>
</body>
</html>

<?php

if (isset($_POST['submit']))
{
	$mail =trim($_POST['email']);
	$password =trim($_POST['password']);
	
	$dupl = " select * from passenger_detail where email = '$mail' && mobile = '$password' ";
	$result = mysqli_query($con,$dupl);
	$num = mysqli_num_rows($result);
	if($num == 1)
	{
		$_SESSION['mail'] = $mail;
		$_SESSION['mobile']	=$password;
		$dupl = " select * from passenger_detail where email = '$mail' && mobile = '$password' ";
		$result = mysqli_query($con,$dupl);
		$user_row =mysqli_fetch_array($result);
		$user_type  = $user_row['user_type'];
		$user_id  = $user_row['mobile'];

		$_SESSION['mobile']=$user_id;
		$_SESSION['user']=$user_type;
		if ($user_type == 'Admin')
		{
			$_SESSION['mobile']=$user_id;
			$_SESSION['user']=$user_type;
			echo "<script>setTimeout(\"location.href = 'admine.php';\",);</script>";
		}else{
			echo "<script>setTimeout(\"location.href  = 'index.php';\",);</script>";
		}
	}else { ?>
	<center><h1 style="color: red; "><?php echo "enter valid email or password......"; ?> </h1></center>

<?php	}
}

?>
