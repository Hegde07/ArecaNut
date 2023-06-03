<?php
require_once('dbcon.php');
$Dealer_Name = $_POST['t1'];
$Dealer_City = $_POST['t2'];
$Dealer_Address = $_POST['t3'];
$Dealer_Pincode = $_POST['t4'];
$Dealer_Contact = $_POST['t5'];
$Dealer_Email = $_POST['t6'];
$password=$_POST['t7'];
$GSTIN = $_POST['t8'];
	
$sql = "insert into dealer_info values  ('$Dealer_Name','$Dealer_City','$Dealer_Address','$Dealer_Pincode','$Dealer_Contact','$Dealer_Email','$password','$GSTIN','')";
$rs=mysql_query($sql);

//echo $sql;

$ss="insert into login values('$Dealer_Email','$password','dealer')";
mysql_query($ss);
if($rs)
{
   ?>
   <script>
   alert("Registration has done successully");
   document.location="login/index.html";
   </script>
   <?php
}
else
{
   echo "not inserted";
}
?>