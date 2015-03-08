function firstname()
{
	var x=document.signup.fname;
	if(x.value=='' || x.value=='First name'){
	x.value='First name';
	x.style.color='#999';
	document.getElementById("firstname").innerHTML='You can\'t leave this empty.';
	document.getElementById("lastname").innerHTML='&nbsp;';
	
	return false;
	}
	else{
	x.style.color='#000';
	document.getElementById("firstname").innerHTML='';
	document.getElementById("lastname").innerHTML='';
	return true;
	}
	
}
function lastname()
{
	var x=document.signup.lname;
	if(x.value=='' || x.value=='Last name'){
	x.value='Last name';
	x.style.color='#999';
	
	document.getElementById("lastname").innerHTML='You can\'t leave this empty.';
	document.getElementById("firstname").innerHTML='&nbsp;';
	
	return false;
	}
	else{
	x.style.color='#000';
	document.getElementById("lastname").innerHTML='';
	document.getElementById("firstname").innerHTML='';
	return true;
	}
}
function username()
{
	var x=document.signup.uname;
	if(x.value==''){
	document.getElementById("username").innerHTML='You can\'t leave this empty.';
	
	return false;
	}
	else{
	x.style.color='#000';
	document.getElementById("username").innerHTML='';
	return true;
	}
	
}
function password()
{
	var x=document.signup.pswd;
	if(x.value==''){
	x.style.color='#999';
	document.getElementById("password").innerHTML='You can\'t leave this empty. Minimum 8 characters length.';
	
	return false;
	}
	else if(x.value.length<8){
	document.getElementById("password").innerHTML='Password should be minimum 8 characters length.';
	
	return false;
	}
	else{
	x.style.color='#000';
	document.getElementById("password").innerHTML='';
	return true;
	}
	
}
function confirmpassword()
{
	var x=document.signup.cnfpswd;
	if(x.value==''){
	x.style.color='#999';
	document.getElementById("confirmpassword").innerHTML='<div style="color:#C00;">You can\'t leave this empty.</div>';
	
	return false;
	}
	else if(x.value!=document.signup.pswd.value){
	document.getElementById("confirmpassword").innerHTML='<div style="color:#C00;">Password doesn\'t match.</div>';
	
	return false;
	}
	else{
	x.style.color='#000';
	document.getElementById("confirmpassword").innerHTML='<div style="color:#0F0;">Password matched.</div>';
	return true;
	}
	
}
function bday()
{
	var x=document.signup.day;
	if(x.value==0){
	x.style.color='#000';
	document.getElementById("birthday").innerHTML='You can\'t leave this empty.';
	
	return false;
	}
	else{
	x.style.color='#000';
	document.getElementById("birthday").innerHTML='';
	return true;
	}
	
}
function bmonth()
{
	var x=document.signup.month;
	if(x.value==0){
	x.style.color='#000';
	document.getElementById("birthday").innerHTML='You can\'t leave this empty.';
	
	return false;
	}
	else{
	x.style.color='#000';
	document.getElementById("birthday").innerHTML='';
	return true;
	}
	
}
function byear()
{
	var x=document.signup.year;
	if(x.value==0){
	x.style.color='#000';
	document.getElementById("birthday").innerHTML='You can\'t leave this empty.';
	
	return false;
	}
	else{
	x.style.color='#000';
	document.getElementById("birthday").innerHTML='';
	return true;
	}
	
}
function gender()
{
	var x=document.signup.gndr;
	if(x.value==0){
	x.style.color='#000';
	document.getElementById("gender").innerHTML='You can\'t leave this empty. I hope you are not that!';
	
	return false;
	}
	else{
	x.style.color='#000';
	document.getElementById("gender").innerHTML='';
	return true;
	}
	
}
function mobile()
{
	var x=document.signup.phone;
	if(x.value=='' || x.value=='+91'){
	document.getElementById("mobile").innerHTML='You can\'t leave this empty.';
	x.value='+91';
	x.style.color='#999';
	
	return false;
	}
	else if(x.value.length!=13){
	document.getElementById("mobile").innerHTML='Invalid number. Check again.';
	x.style.color='#000';
	
	return false;
	}
	else{
	x.style.color='#000';
	document.getElementById("mobile").innerHTML='';
	return true;
	}
	
}

function aadhar()
{
	var x=document.signup.aadhar;
	if(x.value==''){
	document.getElementById("aadharval").innerHTML='You can\'t leave this empty.';
	x.style.color='#999';
	
	return false;
	}
	else if(x.value.length!=12){
	document.getElementById("aadharval").innerHTML='Invalid number. Check again.';
	x.style.color='#000';
	
	return false;
	}
	else{
	x.style.color='#000';
	document.getElementById("mobile").innerHTML='';
	return true;
	}
	
}

function emailid()
{
	var x = document.signup.email;
	atpos = x.value.lastIndexOf("@");
	dotpos = x.value.lastIndexOf(".");
	if(x.value==''){
	document.getElementById("emailid").innerHTML='You can\'t leave this empty.';
	
	return false;
	}
	else if(atpos < 1 || ( dotpos - atpos < 2 ))
	{
		document.getElementById("emailid").innerHTML='email ID not valid. Check again.';
		x.style.color='#000';
		x.focus() ;
		return false;
	}
	else
	{
		x.style.color='#000';
		document.getElementById("emailid").innerHTML='';
		return true;
	}
}
function agree()
{
	var x = document.signup.terms;
	if(x.checked==false){
	document.getElementById("agree").innerHTML='Please tick the checkbox.';
	
	return false;
	}
	else
	{
		x.style.color='#000';
		document.getElementById("agree").innerHTML='';
		return true;
	}
}
function validate()
{
	var c=0;
	c=firstname();
	if(!c)
	 c++;
	c=lastname();
	if(!c)
	 c++;
	c=username();
	if(!c)
	 c++;
	c=password();
	if(!c)
	 c++;
	c=confirmpassword();
	if(!c)
	 c++;
	c=bday();
	if(!c)
	 c++;
	c=bmonth();
	if(!c)
	 c++;
	c=byear();
	if(!c)
	 c++;
	c=gender();
	 if(!c)
	 c++;
	c=mobile();
	if(!c)
	 c++;
	c=emailid();
	if(!c)
	 c++;
	c=aadhar();
	if(!c)
	 c++;
	c=agree();
	if(!c)
	 c++;
	if(c>0)
		return false;
	return true;
}// JavaScript Document