<?php
	require_once('dbcon.php');
	$id=$_GET['id'];
	$ss="delete from warehouse where wid='$id'";
	mysql_query($ss);
	?>
    <script>
	alert("deleted successfully");
	document.location="warehouse-view.php";
	</script>