<?php
require_once('dbcon.php');
$id=$_GET['id'];
$ss="delete from headoffice where hcontact='$id'";
mysql_query($ss);
?>
<script>
alert("deleted successfully");
document.location="headoffice-view2.php";
</script>