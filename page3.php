<html>

<body>
<?php

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

$name=$_POST['fname'];
$pwd=$_POST['pswd'];
$work=$_POST['work'];
$phone=$_POST['phone'];
$date=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$gender=$_POST['gndr'];
$aadhar=$_POST['aadhar'];
$location=$_POST['loc'];
$salary=$_POST['sal'];
$det=$_POST['det'];

echo "<form name='form1' method='post' action='page4.php'><input type='text' name='otp'/>";
echo "<input type='hidden' value='$name' name='fname'>";
echo "<input type='hidden' value='$pwd' name='pswd'>";
echo "<input type='hidden' value='$work' name='work'>";
echo "<input type='hidden' value='$phone' name='phone'>";
echo "<input type='hidden' value='$date' name='day'>";
echo "<input type='hidden' value='$month' name='month'>";
echo "<input type='hidden' value='$year' name='year'>";
echo "<input type='hidden' value='$gender' name='gndr'>";
echo "<input type='hidden' value='$aadhar' name='aadhar'>";
echo "<input type='hidden' value='$location' name='loc'>";
echo "<input type='hidden' value='$salary' name='sal'>";
echo "<input type='hidden' value='$det' name='det'>";
echo "<input type='hidden' value='$sessionID' name='sid'>";


echo "<input type='submit' value='Authenticate'/>";
echo "</form>";
?>
</body>
</html>