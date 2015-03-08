<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register For Job</title>
<link rel="stylesheet" type="text/css" href="form.css" media="all" />
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="popup.css" media="all" />
<link rel="stylesheet" type="text/css" href="menu.css" media="all" />
<script src="main.js"></script>
<script src="regvalidation.js"></script>
</head>

<body>
<body>
<!--Login Popup div-->
<div id="modal"></div>
<div class="header">

<div class="logo"><a href="index.php">
Give & Take</a>
</div>

<div class="nav">
<ul class="ul1">
<li><span class="li1"><a href="index.php">HOME</a></span></li>
<li><span class="li1"><a href="index.php" onclick="modal()">LOGIN</a></span></li>
<li><span class="li1"><a href="signup.php">SIGNUP</a></span></li>
<li><span class="li1"><a href="registerforjob.php">REGISTER FOR A JOB</a></span></li>
<li><span class="li1"><a href="index.php" onclick="modal2()">JOB STATUS</a></span></li>
</ul>
</div>

</div>


<br/>
<br/>

<div class="signupform">
<form id="signup" name="signup" method="post" action="page3.php">
<table class="table1" width="100%" cellspacing="9px" >
  <tr>
    <td colspan="2"><div class="field">Name</div></td>
  </tr>
  <tr>
    <td colspan="2">  
        <input type="text" name="fname" id="fname" value="Name" style="width:100%; height:25px;" onkeydown="if(this.value=='Name') {this.value='';this.style.color='#000';}" onBlur="firstname();"/>
        <div id="firstname" style="color:#C00; padding-top:3px"></div>
   </td>
  </tr>
  <tr>
    <td height="21" colspan="2"><div class="field">Create a password</div></td>
  </tr>
  <tr>
    <td height="27" colspan="2">
	<input type="password" name="pswd" id="pswd" style="width:100%; height:25px"  onFocus="if(this.value=='') {this.style.color='#000';}" onBlur="password();"/>
	<div id="password" style="color:#aaa; padding-top:3px">Minimum of 8 characters</div>
	</td>
  </tr>
  <tr>
    <td height="21" colspan="2"><div class="field">Confirm your password</div></td>
  </tr>
  <tr>
    <td height="27" colspan="2">
	<input type="password" name="cnfpswd" id="cnfpswd" style="width:100%; height:25px" onFocus="if(this.value=='') {this.style.color='#000';}" onBlur="confirmpassword();"/>
	<div id="confirmpassword" style="padding-top:3px"></div>
	</td>
  </tr>
  <tr>
  <tr>
    <td height="21" colspan="2"><div class="field">Date of Birth</div></td>
  </tr>
  <tr>
    <td height="54" colspan="2">
    &nbsp;&nbsp;&nbsp;
    <select name="day" id="day" style="width:15%; height:25px" onBlur="bday();">
    <option value="0">Day</option>
    <script>
				 
				for(var i=1; i< 32 ;i++)
				{
				document.write('<option value="'+i+'">'+i+'</option>');
				}
				</script>
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="month" id="month" style="width:30%; height:25px" onBlur="bmonth();">
    <option value="0">Month</option>
				<option value="1">January</option>
				<option value="2">February</option>
				<option value="3">March</option>
				<option value="4">April</option>
				<option value="5">May</option>
				<option value="6">June</option>
				<option value="7">July</option>
				<option value="8">August</option>
				<option value="9">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="year" id="year" style="width:20%; height:25px" onBlur="byear();">
    <option value="0">Year</option>
    <script>
				 
				for(var i=2013; i>=1930;i--)
				{
				document.write('<option value="'+i+'">'+i+'</option>');
				}
				</script>
    </select>
	<div id="birthday" style="color:#C00; padding-top:3px"></div>
    </td>
  </tr>
  <tr>
    <td height="21" colspan="2"><div class="field">Gender</div></td>
  </tr>
  <tr>
    <td height="27" colspan="2">
	<select name="gndr" id="gndr" style="width:100%; height:25px" onBlur="gender();">
    <option value="0">I am</option>
    <option value="1">Male</option>
    <option value="2">Female</option>    
	<option value="3">Transgender</option>
    </select>
	<div id="gender" style="color:#C00; padding-top:3px"></div>
	</td>
  </tr>
  <tr>
    <td height="21" colspan="2"><div class="field">Mobile phone</div></td>
  </tr>
  <tr>
    <td height="27" colspan="2"> 
	<input type="text" name="phone" id="phone" value="+91" style="width:100%; height:25px" onFocus="this.style.color='#000';" onBlur="mobile()"/>
	<div id="mobile" style="color:#C00; padding-top:3px"></div>
	</td>
  </tr>
  <tr>
    <td height="21" colspan="2"><div class="field">Aadhar Number</div></td>
  </tr>
  <tr>
    <td height="27" colspan="2"> 
	<input type="text" name="aadhar" id="aadhar" value="" style="width:100%; height:25px" onFocus="this.style.color='#000';" onBlur="aadhar()"/>
	<div id="aadharval" style="color:#C00; padding-top:3px"></div>
	</td>
  </tr>
   <tr>
    <td height="21" colspan="2"><div class="field">Type of Work</div></td>
  </tr>
  <tr>
    <td height="27" colspan="2">
	<select name="work" id="work" style="width:100%; height:25px" onBlur="typeofwork();">
    <option value="0">Select</option>
    <option value="1">Cook</option>
    <option value="2">Maid/Servant</option>
    <option value="3">Driver</option>
    <option value="4">Nanny</option>
    <option value="5">Nurse</option>
    <option value="6">Guard</option>
    <option value="7">Gardender</option>
    <option value="8">Laundry</option> 
    <option value="9">Home Tutor</option>
	<option value="10">Others</option>
    </select>
	<div id="tow" style="color:#C00; padding-top:3px"></div>
	</td>
  </tr>
  
   <tr>
    <td height="21" colspan="2"><div class="field">Preferred Location of Work</div></td>
  </tr>
  <tr>
    <td height="27" colspan="2"> 
	<input type="text" name="loc" id="loc" value="" style="width:100%; height:25px" onFocus="this.style.color='#000';/>
	</td>
  </tr>
  
   <tr>
    <td height="21" colspan="2"><div class="field">Expected Salary(in Rupees per Month)</div></td>
  </tr>
  <tr>
    <td height="27" colspan="2"> 
	<input type="text" name="sal" id="sal" value="" style="width:100%; height:25px" onFocus="this.style.color='#000';" onBlur="sal()"/>
	<div id="salval" style="color:#C00; padding-top:3px"></div>
	</td>
  </tr>
  
    <tr>
    <td height="21" colspan="2"><div class="field">Other Details(in max 500 chars)</div></td>
  </tr>
  <tr>
    <td height="27" colspan="2"> 
	<input type="textarea" name="det" id="det" value="" style="width:100%; height:25px" onFocus="this.style.color='#000';" onBlur="det()"/>
	<div id="detval" style="color:#C00; padding-top:3px"></div>
	
	</td>
  </tr>
  
 <tr>
   <td height="43" colspan="2">
    <input type="checkbox" name="terms" id="terms" />&nbsp;I agree to the Terms of Service & Privacy Policy
    <div id="agree" style="color:#C00; padding-top:3px"></div>
    </td>
  </tr>
  <tr>  
    <td height="59" colspan="2" align="right"><button type="submit" name="otp" id="otp" value="Generate OTP" style="height:30px; width:120px;">Generate OTP</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
</table>
</form>
</div>

<div class="footer">
<div class="ftr">

<div class="ltft">
Designed by Khushboo Shah, Swati Anand<br>
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="#" onclick="modal()">LOGIN</a></li>
<li><a href="signup.php">SIGNUP</a></li>
<li><a href="registerforjob.php">REGISTER FOR A JOB</a></li>
<li><a href="index.php" onclick="modal2()">JOB STATUS</a></li>
</ul>
</div>

<div class="rtft">&copy All rights reserved</div>

</div>
</div>


</body>



</html>