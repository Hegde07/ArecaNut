<?php
require_once('dbcon.php');
$OrderID=$_POST['t1'];
$DealerID=$_POST['t2'];
$ArekhaID=$_POST['t3'];
$Quantity=$_POST['t4'];
$Cost=$_POST['t5'];
$Odate=$_POST['t6'];
$TotalCost=$_POST['t7'];
$Ostatus=$_POST['t8'];
$sql="insert into invoice values('$OrderID','$DealerID','$ArekhaID','$Quantity','$Cost','$Odate','$TotalCost','$Ostatus')";
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