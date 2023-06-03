<?php
require_once('dbcon.php');
$id=$_GET['id'];
$ss="delete from branch_info where BRANCH_NAME='$id'";
mysql_query($ss);
?>
<script>
alert("deleted successfully");
document.location="branch_info_viewt2.php";
</script>