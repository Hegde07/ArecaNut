<?php
require_once('dbcon.php');
$InvoiceID=$_POST['t1'];
$OrderID=$_POST['t2'];
$DealerID=$_POST['t3'];
$ArekhaID=$_POST['t4'];
$Quantity =$_POST['t5'];
$CostperQty=$_POST['t6'];
$GST=$_POST['t7'];
$CGST=$_POST['t8'];
$SGST=$_POST['t9'];	
$Transportcharge=$_POST['t10'];
$GrandTotal=$_POST['t11'];
$sql="insert into invoice values('$InvoiceID','$OrderID','$DealerID','$ArekhaID','$Quantity','$CostperQty','$GST','$CGST','$SGST','$Transportcharge','$GrandTotal')";
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


