 <?php
	require_once('dbcon.php');
	$id=$_GET['id'];
	$ss="delete from dealer where did='$id'";
	mysql_query($ss);
	?>
    <script>
	alert("deleted successfully");
	document.location="dealer_view.php";
	</script>