<?php
define("server","localhost");

define("user","root");
define("password","");
define("dbname","betelnutdb");
$con=mysql_connect(server,user,password);
$rs=mysql_select_db(dbname,$con);
if(!$rs)
{
echo"DB could not be connected";
}
?>


