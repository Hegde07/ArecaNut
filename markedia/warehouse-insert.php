<?php
require_once('dbcon.php');
$WarehouseID = $_POST['t1'];
$WarehouseName = $_POST['t2'];
$WarehouseLocation = $_POST['t3'];
$WarehouseAddress = $_POST['t4'];
$BetelnutName = $_POST['t5'];
$Quantity = $_POST['t6'];
$TotalStock = $_POST['t7'];
$CurrentStock = $_POST['t8'];
$sql = "insert into warehouse values ('$WarehouseID','$WarehouseName','$WarehouseLocation','$WarehouseAddress','$BetelnutName','$Quantity','$TotalStock','$CurrentStock')";
$rs=mysql_query($sql);
if($rs)
{
?>
<script>
document.location="warehouse-view2.php";
</script>
<?php
}
else
{
   echo "not inserted";
}









?>