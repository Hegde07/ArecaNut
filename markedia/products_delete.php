<?php
	require_once('dbcon.php');
	$id=$_GET['id'];
	$ss="delete from products where arekhaid='$id'";
	mysql_query($ss);
	?>
    <script>
	alert("deleted successfully");
	document.location="products_view.php";
	</script>
  
  