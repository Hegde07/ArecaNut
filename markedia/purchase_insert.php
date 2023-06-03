<?php
require_once('dbcon.php');
$Purchaseid=$_POST['t1'];
$Marketid=$_POST['t2'];
$Quantity=$_POST['t3'];
$PurchaseDate=$_POST['t4'];
$Cost =$_POST['t5'];
$Arekhaid=$_POST['t6'];
$TotalCost=$_POST['t7'];
$Gst=$_POST['t8'];
$CGst=$_POST['t9'];	
$SGst=$_POST['t10'];
$GrandTotal=$_POST['t11'];
$TransportCharge=$_POST['t12'];
$sql="insert into purchase values('$Purchaseid','$Marketid','$Quantity','$PurchaseDate','$Cost','$Arekhaid','$TotalCost','$Gst','$CGst','$SGst','$GrandTotal','$TransportCharge')";
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


