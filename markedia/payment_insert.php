<?php
require_once('dbcon.php');
$Order_No = $_POST['t1'];
$Total_Amount = $_POST['t2'];
$Advance_Payment = $_POST['t3'];
$Balance = $_POST['t4'];
$sql = "insert into payment values ('$Order_No','$Total_Amount','$Advance_Payment','$Balance')";
$rs=mysql_query($sql);
if($rs)
{
 ?>
 <script>
 document.location="onlinepayment.php?amount=<?php echo $Advance_Payment?>";
 </script>
 <?php
}
else
{
   echo "not inserted";
}


