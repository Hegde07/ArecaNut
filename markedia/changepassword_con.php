<?php
require_once('dbcon.php');
session_start();
$USERNAME=$_SESSION['t1'];
$PASSWORD=$_POST['t2'];
$NEWPASSWORD=$_POST['t3'];
$CONFIRM=$_POST['t4'];
$sql="select * from login where username='$USERNAME' and password='$PASSWORD'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
if(!empty($row))
{
   if($NEWPASSWORD==$CONFIRM)
   {
        $sql="update login set password='$NEWPASSWORD' where username='$USERNAME'";
		mysql_query($sql);
		
		echo "update your password successfully.. "." "." <a href=login/index.html> Login Here </a>";
		}
		else
		{ 
		    echo"new password and confirm password must be same "." "."<a href=changepassword.php>Try Again</a>";
		 }
}
else
echo "invalid username or password "." "."<a href=changepassword.php> Try Again</a>";
?>
