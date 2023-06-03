<?php
require_once('dbcon.php');
$BRANCH_NAME = $_POST['t1'];
$BRANCH_ADDRESS = $_POST['t2'];
$BRANCH_CITY = $_POST['t3'];
$CATEGORY = $_POST['t4'];
$QUALITY_LEVEL= $_POST['l1'];
$QUANTITY = $_POST['t5'];
$RATE = $_POST['t6'];

$id=$_POST['id'];	
$sql = "update branch_info set BRANCH_NAME='$BRANCH_NAME',BRANCH_ADDRESS='$BRANCH_ADDRESS',BRANCH_CITY='$BRANCH_CITY',CATEGORY='$CATEGORY',QUALITY_LEVEL='$QUALITY_LEVEL',QUANTITY='$QUANTITY',RATE='$RATE' where BRANCH_NAME='$id'";
$rs=mysql_query($sql);
if($rs)
{
 ?>
  <script>
  document.location="branch_info_viewt4.php";
  </script>
  <?php
}
else
{
   echo "not inserted";
}









?>