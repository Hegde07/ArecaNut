<?php
require_once('dbcon.php');
$Aname=$_POST['t1'];
$Aaddress=$_POST['t2'];
$AContact=$_POST['t3'];
$Email=$_POST['t4'];
$sql="insert into accountant values('$Aname','$Aaddress','$AContact','$Email')";
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


