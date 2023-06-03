<?php
require_once('dbcon.php');
$id=$_GET['id'];
//$ss="delete from betelnut_price where BETEL_NUT_NAME='$id'";
//mysql_query($ss);
?>
<script>
var n=confirm("Are you sure want to delete?");

if(n=="true")
{
  document.location="betulnut_price_delete2.php?id=<?php echo $id?>";
}
else
{

//alert("deleted successfully");
document.location="betelnut_priceview2.php";

}
</script>