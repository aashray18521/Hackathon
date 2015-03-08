<html>
<head><title>Updation Form</title><link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
.CSSTableGenerator {
	margin:0px;padding:0px;
	width:100%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #000000;
	
	-moz-border-radius-bottomleft:14px;
	-webkit-border-bottom-left-radius:14px;
	border-bottom-left-radius:14px;
	
	-moz-border-radius-bottomright:14px;
	-webkit-border-bottom-right-radius:14px;
	border-bottom-right-radius:14px;
	
	-moz-border-radius-topright:14px;
	-webkit-border-top-right-radius:14px;
	border-top-right-radius:14px;
	
	-moz-border-radius-topleft:14px;
	-webkit-border-top-left-radius:14px;
	border-top-left-radius:14px;
	
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin-top:100px;padding:0px;
	margin-left:250px;
}.CSSTableGenerator tr:last-child td:last-child {
	-moz-border-radius-bottomright:14px;
	-webkit-border-bottom-right-radius:14px;
	border-bottom-right-radius:14px;
}
.CSSTableGenerator table tr:first-child td:first-child {
	-moz-border-radius-topleft:14px;
	-webkit-border-top-left-radius:14px;
	border-top-left-radius:14px;
}
.CSSTableGenerator table tr:first-child td:last-child {
	-moz-border-radius-topright:14px;
	-webkit-border-top-right-radius:14px;
	border-top-right-radius:14px;
}.CSSTableGenerator tr:last-child td:first-child{
	-moz-border-radius-bottomleft:14px;
	-webkit-border-bottom-left-radius:14px;
	border-bottom-left-radius:14px;
}.CSSTableGenerator tr:hover td{
	background-color:#ffaaaa;
		

}
.CSSTableGenerator td{
	vertical-align:middle;
	
	background-color:#ffffff;

	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:10px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}.CSSTableGenerator tr:last-child td{
	border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
	border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
		background:-o-linear-gradient(bottom, #ff5656 5%, #7f0000 

100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop

(0.05, #ff5656), color-stop(1, #7f0000) );
	background:-moz-linear-gradient( center top, #ff5656 5%, #7f0000 100% 

);
	filter:progid:DXImageTransform.Microsoft.gradient

(startColorstr="#ff5656", endColorstr="#7f0000");	background: -o-linear-

gradient(top,#ff5656,7f0000);

	background-color:#ff5656;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold;
	color:#ffffff;
}
.CSSTableGenerator tr:second-child td{
		background:-o-linear-gradient(bottom, #ff5656 5%, #7f0000 

100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop

(0.05, #ff5656), color-stop(1, #7f0000) );
	background:-moz-linear-gradient( center top, #ff5656 5%, #7f0000 100% 

);
	filter:progid:DXImageTransform.Microsoft.gradient

(startColorstr="#ff5656", endColorstr="#7f0000");	background: -o-linear-

gradient(top,#ff5656,7f0000);

	background-color:#ff5656;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold;
	color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #ff5656 5%, #7f0000 100%);	

background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff5656), 

color-stop(1, #7f0000) );
	background:-moz-linear-gradient( center top, #ff5656 5%, #7f0000 100% 

);
	filter:progid:DXImageTransform.Microsoft.gradient

(startColorstr="#ff5656", endColorstr="#7f0000");	background: -o-linear-

gradient(top,#ff5656,7f0000);

	background-color:#ff5656;
}
.CSSTableGenerator tr:second-child:hover td {
background:-o-linear-gradient(bottom, #ff5656 5%, #7f0000 100%);	

background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff5656), 

color-stop(1, #7f0000) );
	background:-moz-linear-gradient( center top, #ff5656 5%, #7f0000 100% 

);
	filter:progid:DXImageTransform.Microsoft.gradient

(startColorstr="#ff5656", endColorstr="#7f0000");	background: -o-linear-

gradient(top,#ff5656,7f0000);

	background-color:#ff5656;
}
.CSSTableGenerator tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:second-child{
	border-width:0px 0px 1px 0px;
}
</style>
<script>
updatestatus()
{
alert("Your status has been updated. Thank You.");
}
</script>
</head>
<body>

<div class="header">

<div class="logo"><a href="index.php">
Give & Take</a>
</div>

<div class="nav" >
<ul class="ul1" style="float:right";>
<li><span class="li1"><a href="index.php">HOME</a></span></li>
<li><span class="li1"><a href="jobstatus.php">BACK</a></span></li>

</ul>
</div>

</div>

<br/>
<br/>
<br/>
<br/>

<?php

$conn= mysql_connect("localhost","root","");
if($conn)
{
 
$appid=$_POST["appId"];

			mysql_select_db("Hackathon" , $conn);
			
			
			
$que1=mysql_query("select * from Job_Seekers where App_Id=$appid ",$conn);

print "<table width='100%' class='CSSTableGenerator'>";			
echo "<tr><td>FIELD NAME</td><td>VALUE</td></tr>";
while($rdata=mysql_fetch_array($que1))
{
print "<tr><td><label>NAME</label></td><td><label>".$rdata[0]."</label></td></tr>";
print "<tr><td><label>APPLICATION ID</label></td><td><label>".$rdata[11]."</label></td></tr>";
print "<tr><td><label>AADHAR NUMBER</label></td><td><label>".$rdata[14]."</label></td></tr>";
print "<tr><td><label>REGISTRATION DATE</label></td><td><label>".$rdata[12]."</label></td></tr>";
print "<tr><td><label>REGISTRATION TIME</label></td><td><label>".$rdata[13]."</label></td></tr>";
print "<tr><td><label>TYPE OF WORK</label></td><td><label>".$rdata[6]."</label></td></tr>";
print "<tr><td><label>CONTACT NUMBER</label></td><td><input type='text' id='contactno' name='contactno' value='".$rdata[5]."'></input></td></tr>";

print "<tr><td><label>SALARY EXPECTED</label></td><td><input type='text' id='salary' name='salary' value='".$rdata[7]."'></input></td></tr>";



print "<tr><td><label>LOCATION</label></td><td><input type='text' id='loc' name='loc' value='".$rdata[8]."'></input></td></tr>";

print "<tr><td><label>DESCRIPTION</label></td><td><input type='text' id='desc' name='desc' value='".$rdata[9]."'></input></td></tr>";

print "<br/><br/>";

print "</tr>";

}
print "<tr colspan='2' align='center'><td><input type='button' value='Update' onclick='updatestatus();'></td></tr>";

print "</table>";


}

?>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="footer">
<div class="ftr">

<div class="ltft">
Designed by Khushboo Shah, Swati Anand<br>
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="index.php" onclick="modal()">LOGIN</a></li>
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