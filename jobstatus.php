<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
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

.body
{
margin:20px auto;
width:970px;
height: 422px;
}
</style>
</head>
<div class="header">

<div class="logo"><a href="#">
Give & Take</a>
</div>

<div class="nav">
<ul class="ul1" style="float:right;">
<li><span class="li1"><a href="index.php">HOME</a></span></li>
<li><span class="li1"><a href="logout123.php"> LOGOUT</a></span></li>
</ul>
</div>

</div>
<body>
<div class="body">
<table width="100%" class="CSSTableGenerator">

<tr><th colspan="10" align='center'>Application Summary</th></tr></br>
<?php
session_start();
if($_SESSION['aadhar']==null)
header('Location:index.php');
if(!$_POST)
{

$conn= mysql_connect("localhost","root","");
if($conn)
{
echo "DB connected\n";
			if (mysql_select_db("Hackathon" , $conn))
			echo "DB Used" ;
			else
			echo "DB not Used : " . mysql_error() ;
			
$aadhar = $_SESSION['aadhar'];
echo $aadhar;
			
echo "<tr><th>Name</th><th>Application Id</th><th>Contact Number</th><th>Type of Work</th><th>Salary Expected</th><th>Location</th><th>Description</th><th>Status</th><th>Aadhar Number</th><th>Edit</th></tr>";
			
$que1=mysql_query("select Name, App_Id,Contact_No, Type_Of_Work, Salary, Location, Description, Status, Aadhar_No from  Job_Seekers where status='ACTIVE' && Aadhar_No = '$aadhar' ",$conn);

			
while($rdata=mysql_fetch_array($que1))
{
print "<tr>";
print "<form name='updatejobstatus' action='updatejobstatus.php' method='post'>";

print "<br/><br/>";
print "<td>".$rdata[0]."</td>";
print "<td>$rdata[1]<input type='hidden' name='appId' value='".$rdata[1]."'></td>";
print "<td>$rdata[2]</td>";
print "<td>$rdata[3]</td>";
print "<td>$rdata[4]</td>";
print "<td>$rdata[5]</td>";
print "<td>$rdata[6]</td>";
print "<td>$rdata[7]</td>";
print "<td>$rdata[8]</td>";
print "<td><button type='submit' value='Update'>Update</button></td>";
print "</form>";
print "</tr>";

}
}


}

?>
</table>

<br/>
<br/>
<br/>
<br/>

<br/>
<br/>



<br/>
<br/>
<table align="center" >
<form>
<tr align="right">
<input action="action" type="button" value="Back" onClick="history.go(-1);" />
</tr>
</form>
</table>
</div>
<div class="footer">
<div class="ftr">

<div class="ltft">
Designed by Khushboo Shah, Swati Anand<br>
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="logout123.php" >LOGOUT</a></li>
</ul>
</div>

<div class="rtft">&copy All rights reserved</div>


</div>
</div>
</body>
</html>
		