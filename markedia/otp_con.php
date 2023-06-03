<?php
require_once('dbcon.php');
session_start();
$USERNAME=$_SESSION['t1'];
$otp=$_POST['t22'];

$ss="select * from otp where otp_code='$otp'";
$rs=mysql_query($ss);
$row=mysql_fetch_array($rs);

if(empty($row))
{

   echo "invalid otp";
}
else
{

  session_start();
  $passw=$_SESSION['password'];
  ?>
  <script>
  document.location="changepassword_new.php";
  </script>
  <?php
  
  //echo "Your 100k Password is-".$passw;
 } 
?>