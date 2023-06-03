<?php
require_once('dbcon.php');
$Mid=$_POST['t1'];
$Mname=$_POST['t2'];
$Mcity=$_POST['t3'];
$Maddress=$_POST['t4'];
$Mcontact=$_POST['t5'];

$sql="insert into marketplace values('$Mid','$Mname','$Mcity','$Maddress','$Mcontact')";
$rs=mysql_query($sql);
if($rs)
{
echo "inserted";
}
else
{
echo "not inserted";
}
?>


