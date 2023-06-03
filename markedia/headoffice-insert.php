<?php
require_once('dbcon.php');
$Hname = $_POST['t1'];
$Hlocation = $_POST['t2'];
$Haddress = $_POST['t3'];
$Hdistrict = $_POST['t4'];
$Htaluk = $_POST['t5'];
$Hcontact = $_POST['t6'];
$sql = "insert into headoffice values ('$Hname','$Hlocation','$Haddress','$Hdistrict','$Htaluk','$Hcontact')";
$rs=mysql_query($sql);
if($rs)
{
   
   ?>
  <script>
  document.location="headoffice-view2.php";
  </script>
  <?php
}
else
{
   echo "not inserted";
}









?>