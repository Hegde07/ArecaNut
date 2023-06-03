 <?php
	require_once('dbcon.php');
	$id=$_GET['id'];
	$ss="delete from marketplace where mid='$id'";
	mysql_query($ss);
	?>
    <script>
	alert("deleted successfully");
	document.location="market_view.php";
	</script>