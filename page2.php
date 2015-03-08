<?php

$conn=mysql_connect("localhost","root","");
if(!$conn)
print "not connected".mysql_error();

$dbase="Hackathon";

if (!mysql_select_db($dbase , $conn) )
{print "DB not Used : " . mysql_error() ;}

if($_POST)
{
$aadhar=$_POST['aadhar'];
$otp=$_POST['otp'];
$sid=$_POST['sessionid'];
echo $aadhar;
echo $otp;
echo $sid;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://api.motp.in/v1/otp/0004-7376a50f-54fbecd8-8cc1-e16f9e1e/".$sid);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,"private=0009-7376a50f-54fbecd8-8cc7-2e3b4df2");

 
$replyee2= curl_exec($ch);
$replyy2=json_decode(trim($replyee2),true);

if($replyy2["Status"] == "Success")
{
echo "Result received ";
echo $replyy2["Result"];
}



if($replyy2["Result"] == $otp )
{
echo "matched";
//$_SESSION['aadhar'] = $aadhar;
//header('Location:jobstatus.php');


}
else
{
 //header('Location:index.php');
$msg = "Invalid aadhar_no/password!";
echo "<script style='border:solid pink 1px; color:black;' type='text/javascript'>alert('$msg');</script>";
}  

curl_close($ch);

if ( !mysql_close($conn))
print "DB not Closed : " ;
}
?>