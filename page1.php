<html>
<head>Login Page

<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<?php
echo "Hello";
$aadhar=$_POST['aadhar'];
$conn= mysql_connect("localhost","root","");
mysql_select_db("Hackathon",$conn);
$query=mysql_query("select Aadhar_No from Job_Seekers where Aadhar_No='$aadhar'",$conn);
echo "Query executed";
if(mysql_fetch_array($query) == NULL)
{
//header('Location:index.php');
echo "Invalid Aadhar Number";
}

else
{
echo "Response received";
$replye = file_get_contents("http://api.motp.in/v1/0004-7376a50f-54fbecd8-8cc1-e16f9e1e/"."+917200184728");
echo "called";
$reply= json_decode(trim($replye),true);
if($reply["Status"]=="Success")
{
 echo "OTP sent";
 $sessionID= $reply["Result"];
 echo $sessionID;
}
else
{
echo "OTP not sent";
}
}   

echo "<form name='form1' method='post' action='page2.php'><table><tr><td><label>Aadhar Number</label></td><td><label>$aadhar</label>
</td></tr><tr><td><label>OTP</label></td><td><input type='text' name='otp'/></td></tr>
<tr><td><input type='hidden' name='aadhar' value='$aadhar' /></td><td><input type='hidden' value='$sessionID' name='sessionid'/></td></tr>
<tr><td colspan='2'><button type='submit' value='Verify'>verify</button></td></tr>
</table>
</form>
</body>";
?>
</html>
