    <?php
	require_once('dbcon.php');
	$id=$_GET['id'];
	$ss="delete from invoice where iid='$id'";
	mysql_query($ss);
	?>
    <script>
	alert("deleted successfully");
	document.location="invoice_view.php";
	</script>
  
  