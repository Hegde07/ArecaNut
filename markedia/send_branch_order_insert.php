<?php
require_once('dbcon.php');
session_start();
$u=$_SESSION['t1'];
$branch=$_SESSION['id'];
$nut=$_POST['t1'];
$qlty=$_POST['t2'];
$uom=$_POST['t3'];
$qty=$_POST['t4'];
$rate=$_POST['t5'];
$total=$_POST['t6'];

$cgst=($total*9)/100;
$sgst=$cgst;
$gtotal=$total+$cgst+$sgst;
$ono=rand();
$ss="insert into branch_order_request values('$u','$branch','$ono','$nut','$qlty','$uom','$qty','$rate','$total','$cgst','$sgst','$gtotal',curdate(),'pending')";

mysql_query($ss);
?>

<script>
document.location="branch_order_request_view.php?id=<?php echo $ono;?>";
</script>