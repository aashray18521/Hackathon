<html>
<head>
<script>
updatelog(var x)
{
alert("Hello");
alert("Contact Number: "+x+"\nYour request will be recorded for security issues.");
}

</script>
<title>Product Information</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
.body
{
margin:0 auto;
width:970px;
}
.Tablecss
{
background: rgba(87, 55, 75, 0.83);
border:solid 1px rgb(186, 91, 138);
border-radius:4px;
}
.Tablecss td
{
width:28px;
padding:10px;
font-weight:bold;
font-size:23px;
}
.Tablecss label
{
color:white;
margin:5px 0px 20px 0px;
}
.Tablecss select
{
width:149px;
font-size: 18px;
} 
.Tablecss button
{
width:80px;
padding:10px 0px 10px 0px;
font-size:20px;
font-weight:bold;
border:solid gray;
}
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
}
</style>


</head>

<body>

<div class="header">

<div class="logo"><a href="#">
Give & Take</a>
</div>

<div class="nav">
<ul class="ul1" style="float:right;">
<li><span class="li1"><a href="index.php">HOME</a></span></li>
<li><span class="li1"><a href="logout.php"> LOGOUT</a></span></li>
</ul>
</div>

</div>
<div class="body">
<table width="100%" class="Tablecss">
<form name="myForm" action="servicecheck.php" method="post">
<tr>
<td>
<label>Type of Work :</label><br><select id="tow" name="tow"><option value="Maid">Maid</option><option value="Cook">Cook</option><option value="Driver">Driver</option><option value="Nanny">Nanny</option><option value="Nurse">Nurse</option><option value="Gardener">Gardener</option><option value="Tutor">Tutor</option><option value="Guard">Guard</option><option value="Laundry">Laundry</option><option value="Others">Others</option></select>
</td>
<td>
<label>Gender :</label><br><select id="gender" name="gender"><option value="M">Male</option><option value="F">Female</option><option value="T">Transgender</option></select>
</td>
<td>

<label>Location :</label><br><select id="location" name="location"><?php 
$con = mysql_connect("localhost","root","");
mysql_select_db("Hackathon",$con);
$data= mysql_query("select DISTINCT Location from Job_Seekers",$con);
while($row=mysql_fetch_array($data))
{
  echo "<option value='$row[0]'>$row[0]</option>";
}
mysql_close($con);
 ?></select>
</td>
<td>
<label>Salary :</label><br><select id="salary" name="salary"><option value="1000"><1000</option><option value="2000"><2000</option><option value="3000"><3000</option>
<option value="4000"><4000</option><option value="5000"><5000</option><option value="6000"><6000</option><option value="7000"><7000</option><option value="8000"><8000</option><option value="9000"><9000</option><option value="10000">10000</option>
</select>
</td>
<td>
<button type="submit" value="Filter">Filter</Button></td>
</td>
</tr>

</form>
</table>



<?php
session_start();
if($_SESSION['mail'] == null)
header('Location:index.php');
else
{
	if($_POST)
	{
	  
	   $tow= $_POST["tow"];
	   $gender=$_POST["gender"];
	   $location=$_POST["location"];
	   $salary=$_POST["salary"];
	  
	   
	   $conn=mysql_connect("localhost","root","");
	   if($conn)
	   {
			
			mysql_select_db("Hackathon" , $conn);
	
			
			
echo "<table width='100%' class='CSSTableGenerator'>";
echo "<tr><th>Name</th><th>Gender</th><th>Type of Work</th><th>Salary Expected</th><th>Location</th><th>Description</th><th>Application Date</th><th>Application Time</th><th>View Contact</th></tr>";
			
$que1=mysql_query("select Name, Gender, Type_Of_Work, Salary, Location, Description, Reg_date, Reg_Time, Contact_No from  Job_Seekers where status='ACTIVE' && Type_Of_Work='$tow' && Gender='$gender' && Location='$location' && Salary<$salary",$conn);

			
while($rdata=mysql_fetch_array($que1))
{
print "<tr>";
print "<td>$rdata[0]</td>";
print "<td>$rdata[1]</td>";
print "<td>$rdata[2]</td>";
print "<td>$rdata[3]</td>";
print "<td>$rdata[4]</td>";
print "<td>$rdata[5]</td>";
print "<td>$rdata[6]</td>";
print "<td>$rdata[7]</td>";
echo "<td>$rdata[8]</td>";

print "</tr>";

}
}
}

	else
	{
	   $conn=mysql_connect("localhost","root","");
	   if($conn)
	   {
			
			mysql_select_db("Hackathon" , $conn);
		
echo "<table width='100%' class='CSSTableGenerator' style='margin-top: 50px; margin-left:25px margin-right:25px'>";
 
echo "<tr><th>Name</th><th>Gender</th><th>Type of Work</th><th>Salary Expected</th><th>Location</th><th>Description</th><th>Application Date</th><th>Application Time</th><th>View Contact</th></tr>";
			
$que1=mysql_query("select Name, Gender, Type_Of_Work, Salary, Location, Description, Reg_date, Reg_Time, Contact_No from  Job_Seekers where status='ACTIVE'",$conn);

			
while($rdata=mysql_fetch_array($que1))
{

echo "<table width='75%' class='CSSTableGenerator'";


print "<tr><td>$rdata[0]</td><td>$rdata[1]</td></tr>";
print "<tr><td>$rdata[2]</td><td>$rdata[3]</td></tr>";
print "<tr><td>$rdata[4]</td><td>$rdata[5]</td></tr>";
print "<tr><td>$rdata[6]</td><td>$rdata[7]</td></tr>";


print "</table>";
echo "<br/><br/>";
}

mysql_close($conn);


	   
}
}
}	
?>

</table>
</div>

<br/>
<div class="footer">
<div class="ftr">

<div class="ltft">
Designed by Khushboo Shah, Swati Anand<br>
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="logout.php" >LOGOUT</a></li>
</ul>
</div>

<div class="rtft">&copy All rights reserved</div>

</div>
</div>
</body>
</html>
		