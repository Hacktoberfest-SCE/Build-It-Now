
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/CSS_regi.css">
	<script type="text/javascript" src="js/validation.js"></script>
</head>
<body>
	<form method="post" action="" onsubmit="return reg_validation()">
<div class="signin-form">
				<h1>Register Here</h1>
				<span class="emessage" id="err_message"></span>
				<table>
						<tr>
							<td></td>
							<td><span id="message"></span></td>
						</tr>
						<tr>
							<td><label>Select User Type : </label></td>
							<td><select name="usertype_opt" required><option value="">Select Option</option><option value="N/A">N/A</option><option value="Admin">ADMIN</option></select></td>
						</tr>
						<tr>
							<td><label>Please Enter First Name : </label></td>
							<td><input type="text" name="F_Name" id="First_Name" placeholder="Enter First Name"></td>
							<td><span class="span_message" id="fname_message"></span></td>
						</tr>
						<tr>
							<td><label>Please Enter Last Name : </label></td>
							<td><input type="text" name="L_Name" id="Last_Name" placeholder="Enter Last Name"></td>
							<td><span class="span_message" id="lname_message"></span></td>
						</tr>
						<tr>
							<td><label> Please Enter Email Id : </label></td>
							<td><input type="email" name="Email" id="Email" placeholder="Enter Email"></td>
							<td><span class="span_message" id="email_message"></span></td>
						</tr>
						<tr>
							<td><label>Please Enter Mobile Number : </label></td>
							<td><input type="text" name="M_Number" id="M_Number" placeholder="Enter Mobile Number"></td>
							<td><span class="span_message" id="mobile_message"></span></td>
						</tr>
						<tr>
							<td><label> Please Enter Address : </label></td>
							<td><input type="text" name="addrs" id="addrs" placeholder="home no/colony/lane no"></td>
							<td><span class="span_message" id="pass_message"></span></td>
						</tr>
						<tr>
							<td><label>Please Dist : </label></td>
							<td><input type="text" name="dist" id="dist" placeholder="Dist"></td>
							<td><span class="span_message" id="re_pass_message"></span></td>
						</tr>
						<tr>
							<td><label>Please State : </label></td>
							<td><input type="text" name="state" id="state" placeholder="State"></td>
							<td><span class="span_message" id="re_pass_message"></span></td>
						</tr>
						<tr>
							<td><label>Please Country : </label></td>
							<td><input type="text" name="country" id="country" placeholder="Country"></td>
							<td><span class="span_message" id="re_pass_message"></span></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Sign Up"><input type="reset" name="reset" placeholder="Reset"></td>
						</tr>
					
				</table>
			</div>
		</form>	
</body>
</html>