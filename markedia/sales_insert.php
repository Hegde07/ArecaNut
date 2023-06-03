<?php
require_once('dbcon.php');
$Salesid=$_POST['t1'];
$Dealerid=$_POST['t2'];
$Arekhaid=$_POST['t3'];
$Salesdate=$_POST['t4'];
$Quantity =$_POST['t5'];
$CostperQty=$_POST['t6'];
$Totalcost=$_POST['t7'];
$year=date('Y');

$sql="insert into sales values('$Salesid','$Dealerid','$Arekhaid','$Salesdate','$Quantity','$CostperQty','$Totalcost','$year')";
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

