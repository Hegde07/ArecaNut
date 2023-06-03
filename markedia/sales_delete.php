<?php
	require_once('dbcon.php');
	$id=$_GET['id'];
	$ss="delete from sales where sid='$id'";
	mysql_query($ss);
	?>
    <script>
	alert("deleted successfully");
	document.location="sales_view.php";
	</script>