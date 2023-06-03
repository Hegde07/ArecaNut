<?php
require_once('dbcon.php');
$BRANCH_ID = $_POST['id'];
$BRANCH_NAME = $_POST['t1'];
$BRANCH_ADDRESS = $_POST['t2'];
$BRANCH_CITY = $_POST['t3'];
$CATEGORY = $_POST['t4'];
$QUALITY_LEVEL= $_POST['l1'];
$QUANTITY = $_POST['t5'];
$RATE = $_POST['t6'];
$pass = rand();

$sql = "insert into branch_info values ('$BRANCH_ID','$BRANCH_NAME','$BRANCH_ADDRESS','$BRANCH_CITY','$CATEGORY','$QUALITY_LEVEL','$QUANTITY','$RATE','$QUANTITY')";
$rs=mysql_query($sql);

$ss="insert into login values('$BRANCH_NAME','$pass','branch')";
mysql_query($ss);
if($rs)
{
   ?>
   <script>
   document.location="branch_info_viewt2.php";
   </script>
   <?php
}
else
{
   echo "not inserted";
}









?>