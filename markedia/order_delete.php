<?php
require_once('dbcon.php');
$id=$_GET['id'];
$ss="delete from order where oid='$id'";
mysql_query($ss);
?>
<script>
alert("deleted successfully");
document.location="order_view.php";
</script>