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

function reg_validation()
{
	var fname = document.getElementById('Full_Name').value;
	var lname = document.getElementById('Name').value;
	var emails = document.getElementById('Email').value;
	var mobileno = document.getElementById('M_Number').value;


	if(fname == ""){
		document.getElementById('fname_message').innerHTML ="*";
		return false;
	}
	if((fname.length <= 3) || (fname.length > 15))
	{
		document.getElementById('fname_message').innerHTML ="*";
		document.getElementById('err_message').innerHTML =" ** Username lenght must be between 3 and 15";

		return false;	
	}
	if(!isNaN(fname))
	{
		document.getElementById('fname_message').innerHTML ="*";
		document.getElementById('err_message').innerHTML =" ** only characters are allowed";
		return false;
	}
	if(lname == ""){
		document.getElementById('lname_message').innerHTML ="*";
		return false;
	}

	if(emails == "")
	{
		document.getElementById('email_message').innerHTML ="*";
		document.getElementById('err_message').innerHTML =" ** Please fill the email id field";
		return false;
	}
	if(emails.indexOf('@') <= 0 )
	{
		document.getElementById('email_message').innerHTML = "*"
		document.getElementById('err_message').innerHTML =" ** @ Invalid Position";
		return false;
	}

	if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.'))
	{
		document.getElementById('email_message').innerHTML = "*";
		document.getElementById('err_message').innerHTML =" ** . Invalid Position";
		return false;
	}

	if(mobileno == "")
	{
		document.getElementById('mobile_message').innerHTML = "*";
		document.getElementById('err_message').innerHTML =" ** Please fill the mobile Number field";
		return false;
	}
	if(isNaN(mobileno))
	{
		document.getElementById('mobile_message').innerHTML ="*";
		document.getElementById('err_message').innerHTML =" ** user must write digits only not characters";
		return false;
	}
	if(mobileno.length!=10)
	{
		document.getElementById('mobile_message').innerHTML ="*";
		document.getElementById('err_message').innerHTML =" ** Mobile Number must be 10 digits only";
		return false;
	}

}