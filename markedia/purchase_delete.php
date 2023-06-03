<?php
	require_once('dbcon.php');
	$id=$_GET['id'];
	$ss="delete from purchase where pid='$id'";
	mysql_query($ss);
	?>
    <script>
	alert("deleted successfully");
	document.location="purchase_view.php";
	</script>