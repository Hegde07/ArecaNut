<?php
require_once('dbcon.php');
$Dealerid = $_POST['t1'];
$Dealername = $_POST['t2'];
$Dealercity = $_POST['t3'];
$Dealeraddress = $_POST['t4'];
$contact = $_POST['t5'];

$sql = "insert into dealer values ('$Dealerid','$Dealername','$Dealercity','$Dealeraddress','$contact')";
$rs=mysql_query($sql);

$pass=rand();

$ss="insert into login values('$Dealername','$pass','dealer')";
mysql_query($ss);


if($rs)
{
   echo "inserted";
}
else
{
   echo "not inserted";
}
       
?>