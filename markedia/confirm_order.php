<?php
require_once('dbcon.php');
$u=$_GET['u'];
$ono=$_GET['ono'];
$qty=$_GET['qty'];
$bname=$_GET['bname'];
$total=$_GET['total'];

$ss="update dealer_order_request set order_status='confirmed' where order_no='$ono'";
mysql_query($ss);

$m="select * from betelnut_price where BETEL_NUT_NAME='$bname'";
$m1=mysql_query($m);
$m2=mysql_fetch_array($m1);

$current_stock=$m2['current_stock'];

$remaining=$current_stock-$qty;

$k="update betelnut_price set current_stock='$remaining' where BETEL_NUT_NAME='$bname' ";
mysql_query($k);

if($remaining<=0)
{
?>
<script>
alert("Insufficient Stock");
document.location="send_orders.php";
</script>
<?php
}
else
{

?>
<script>
alert("Thank you for Order Confirmation");
document.location="payment.php?ono=<?php echo $ono?>&total=<?php echo $total?>";
</script>
<?php
}
?>

