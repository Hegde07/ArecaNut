<?php
require_once('dbcon.php');
$id=$_GET['id'];
$ss="delete from betelnut_price where BETEL_NUT_NAME='$id'";
mysql_query($ss);
?>
<script>
alert("deleted successfully");
document.location="betelnut_priceview2.php";
</script>