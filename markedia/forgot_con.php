<?php
require_once('dbcon.php');
$username=$_POST['t1'];
$contact=$_POST['t2'];

$ss="select * from login where username='$username'";
$rs=mysql_query($ss);
$row=mysql_fetch_array($rs);

if(empty($row))
{

   echo "invalid username";
}
else
{
   session_start();
   $password1=$row['password'];
   $otp=rand();
   $_SESSION['password']=$password1;
   
   $ss="insert into otp values('$otp')";
   mysql_query($ss);
   
$ch = curl_init();
$user="hegdebhargav92@gmail.com:123456";
$receipientno=$contact;
$senderID="TEST SMS";
$msgtxt="your otp is-".$otp;
curl_setopt($ch,CURLOPT_URL,"http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer; }
curl_close($ch);


?>
<script>
alert("OTP has been sent to your mobile no");
document.location="otp.php";
</script>
<?php
}
?>