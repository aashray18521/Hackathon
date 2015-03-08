<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="popup.css" media="all" />
<script type="text/javascript">
var image1 = new Image();
image1.src = "hackathon images/cook2.jpg";
var image2 = new Image();
image2.src = "hackathon images/driver.jpg";
var image3 = new Image();
image3.src = "hackathon images/sweeper.jpg";
var image4 = new Image();
image4.src = "hackathon images/nurse1.jpg";

function modal()
{
	  document.getElementById("modal").innerHTML='<div class="shade" onclick="closepopup()"></div><div class="modal"><img src="hackathon images/close.jpg" onclick="closepopup()" align="right" width="15px" height="15px"/><form name="loginform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><table cellpadding="5px" cellspacing="12px"><tr><th align="left" ><span style="font-size:20px; color:white">Login</span></th><th></th></tr><tr><td><span style="font-size:20px; color:white">Email</span></td><td><input type="text" name="email" /></td></tr><tr><td><span style="font-size:20px; color:white">Password</span></td><td><input type="password" name="pswd" /></td></tr><tr><td></td><td><Button type="submit" value="LOGIN" style="background-color:#fff; border-color:#aaa; color:#BA5B8A; padding:5px 9px;">LOGIN</Button></td></tr></table></form><p>Don\'t have an account? <a href="signup.html" style="text-decoration: none; color:pink;">Sign up!</a></p></div>';
}
function closepopup()
{
	  document.getElementById("modal").innerHTML='';
}
function modal2()
{
	  document.getElementById("modal").innerHTML='<div class="shade" onclick="closepopup()"></div><div class="modal"><img src="hackathon images/close.jpg" onclick="closepopup()" align="right" width="15px" height="15px"/><form name="loginform2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><table cellpadding="2px" cellspacing="7px"><tr><th align="left" ><span style="font-size:20px; color:white">Verification</span></th><th></th></tr><tr><td><span style="font-size:20px; color:white">Aadhar No</span></td><td><input type="text" name="aadhar" /></td></tr><tr><td><span style="font-size:20px; color:white">Password</span></td><td><input type="password" name="pwd" /></td></tr><tr><td></td><td><Button type="submit" value="VERIFY" style="background-color:#fff; border-color:#aaa; color:#BA5B8A; padding:5px 9px;">VERIFY</Button></td></tr></table></form><p>Didn\'t apply for a job? <a href="registerforjob.php" style="text-decoration: none; color:pink;">Apply Now!</a></p></div>';
}



</script>
</head>
<body>
<!-- Login pop up -->

<div id="modal"></div>

<div class="header">

<div class="logo"><a href="index.php">
Give & Take</a>
</div>

<div class="nav">
<ul class="ul1">
<li><span class="li1"><a href="index.php">HOME</a></span></li>
<li><span class="li1"><a href="#" onclick="modal()">LOGIN</a></span></li>
<li><span class="li1"><a href="signup.php">SIGNUP</a></span></li>
<li><span class="li1"><a href="registerforjob.php">REGISTER FOR A JOB</a></span></li>
<li><span class="li1"><a href="#" onclick="modal2()">JOB STATUS</a></span></li>
</ul>
</div>

</div>

<div class="show">
<div class="slides">
<img src="hackathon images/nurse1.jpg" style="width:970px; height:466px; margin:-12px auto;" name="slide">
<script type="text/javascript">
var step=1;
function slideit()
{
document.images.slide.src = eval("image"+step+".src");
if(step<4)
step++;
else
step=1;
setTimeout("slideit()",2700);
}
slideit();
</script>
<img src="hackathon images/bnr_shadow.png" style="width:970px; margin-top:15px;">
</div>
</div>
<br><br>
<div class="content">
<h2 style="text-align:center; font-size:30px; color: #BA5B8A;">Always At Your Rescue</h2><hr>

<div class="cont1">
<h2>What We Do?</h2>
<span style="color:gray; font-size:12px;">All you want your website to do.</span><br>
<img src="hackathon images/give and take.jpg" width="80%" height="40%">
<p>
We are a platform to help the needy find the needful. We enable people looking for help find the right person and those looking forward to help find the right job.
</p>
<a href="index.php">ABOUT US</a>
</div>

<div class="cont1">
<h2>Work With Us</h2>
<span style="color:gray; font-size:12px;">Looking for the right help.</span><br>
<img src="hackathon images/hiringg.jpg" width="80%" height="40%">
<p>
We enable you to hire people registered on our website for helping you with your day-to-day activities. You can create an account and look for people who are willing to work as per your requirements.
</p>
<a href="signup.php" style="border-right:solid 1px rgba(231, 144, 196, 0.97);">REGISTER</a><a href="#" onclick="modal()">LOGIN</a>
</div>

<div class="cont1">
<h2>Hire Me</h2>
<span style="color:gray; font-size:12px;">Having difficulty finding a job for yourself.</span><br>
<img src="hackathon images/hireme.jpg" width="80%" height="40%">
<p>
We enable you to easily find jobs by simply registering on our website giving details about the kind of work and your expectations from the recruiter. 
</p>
<a href="registerforjob.php" style="border-right:solid 1px rgba(231, 144, 196, 0.97);">REGISTER</a><a href="#" onclick="modal2()">JOB STATUS</a>
</div>

</div>
<br><br>



<div class="footer">
<div class="ftr">

<div class="ltft">
Designed by Khushboo Shah, Swati Anand<br>
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="#" onclick="modal()">LOGIN</a></li>
<li><a href="signup.php">SIGNUP</a></li>
<li><a href="registerforjob.php">REGISTER FOR A JOB</a></li>
<li><a href="#" onclick="modal2()">JOB STATUS</a></li>
</ul>
</div>

<div class="rtft">&copy All rights reserved</div>

</div>
</div>

</body>
</html>

<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
session_start();
$conn=mysql_connect("localhost","root","");
if(!$conn)
//print "db connected";
//else
print "not connected".mysql_error();
$dbase="Hackathon";
if (!mysql_select_db($dbase , $conn) )
{print "DB not Used : " . mysql_error() ;}


$email=$_POST['email'];
$pwd=$_POST['pswd'];
$data=mysql_query("select Email,Password from Service_Seekers where Email='$email' && Password='$pwd'",$conn);

if(mysql_fetch_array($data) == NULL)
{
$msg = "Invalid email/password!";
echo "<script style='border:solid pink 1px; color:black;' type='text/javascript'>alert('$msg');</script>";
}
else
{
 $_SESSION['mail'] = $email;
 header('Location:servicecheck.php');
}   


$aadhar=$_POST['aadhar'];
$password=$_POST['pwd'];
$query=mysql_query("select Aadhar_No,Password from Job_Seekers where Aadhar_No='$aadhar' && Password='$password'",$conn);
if(mysql_fetch_array($query) == NULL)
{
//header('Location:index.php');
$msg = "Invalid aadhar_no/password!";
echo "<script style='border:solid pink 1px; color:black;' type='text/javascript'>alert('$msg');</script>";
}
else
{
 $_SESSION['aadhar'] = $aadhar;
 header('Location:jobstatus.php');
}  



if ( !mysql_close($conn))
print "DB not Closed : " ;
}
?>