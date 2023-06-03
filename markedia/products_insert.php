<?php
require_once('dbcon.php');
$ArekhaID=$_POST['t1'];
$ArekhaName=$_POST['t2'];
$Category=$_POST['t3'];
$ArekhaColor=$_POST['t4'];
$Quality =$_POST['t5'];
$Quantity=$_POST['t6'];
$Cost=$_POST['t7'];
$sql="insert into products values('$ArekhaID','$ArekhaName','$Category','$ArekhaColor','$Quality','$Quantity','$Cost')";
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


