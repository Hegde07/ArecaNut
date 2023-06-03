<?php
require_once('dbcon.php');
session_start();
$USERNAME=$_SESSION['t1'];

$NEWPASSWORD=$_POST['t3'];
$CONFIRM=$_POST['t4'];

   if($NEWPASSWORD==$CONFIRM)
   {
        $sql="update login set password='$NEWPASSWORD' where username='$USERNAME'";
		mysql_query($sql);
		
		echo "update your password successfully.. "." "." <a href=login/index.html> Login Here </a>";
	}
		else
		{ 
		    ?>
			<script>
			window.history.go(-1);
			</script>
			
			<?php
		 }


?>
