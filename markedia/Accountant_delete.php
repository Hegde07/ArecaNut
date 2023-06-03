<?php
require_once('dbcon.php');
$id=$_GET['id'];
$ss="delete from accountant where aemail='$id'";
mysql_query($ss);
?>
<script>
alert("deleted successfully");
document.location="Accountant_view.php";
</script>

