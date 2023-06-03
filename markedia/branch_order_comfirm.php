<?php
require_once('dbcon.php');
$id=$_GET['id'];

$total=$_GET['total'];

$bname=$_GET['bname'];
$branch=$_GET['branch'];

$qty=$_GET['qty'];

$ss="update branch_order_request set order_status='confirmed' where ono='$id'";
mysql_query($ss);



$m="select * from branch_info where CATEGORY='$bname' and BRANCH_NAME='$branch'";
$m1=mysql_query($m);
$m2=mysql_fetch_array($m1);

$current_stock=$m2['current_stock'];

$remaining=$current_stock-$qty;

$k="update branch_info set current_stock='$remaining' where CATEGORY='$bname' and BRANCH_NAME='$branch' ";
mysql_query($k);

if($remaining<=0)
{
?>
<script>
alert("Insufficient Stock");
document.location="branchwise_stock.php";
</script>
<?php
}
else
{


?>
<script>
alert("Thank you for Order Confirmation");
document.location="payment.php?ono=<?php echo $id?>&total=<?php echo $total?>";
</script>
<?php
}
?>