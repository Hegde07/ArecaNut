<?php
session_start();

require_once('dbcon.php');
$uname=$_POST['t1'];
$password=$_POST['t2'];
$_SESSION['t1']=$uname;
$ss="select * from login where username='$uname'";
$rs=mysql_query($ss);
$row=mysql_fetch_array($rs);
if(empty($row))
{
?>
<script>
alert("invalid username");
document.location="login/index.html";
</script>
<?php
}

else
{
     $pass=$row['password'];
	 $utype=$row['utype'];
	 if($pass==$password)
	 {
	     if($utype=="dealer")
		 {
		    ?>
      <script>
	  alert("you have logged in as dealer");
	  document.location="dealer_home.php";
	  </script>
      <?php
	  }
	  if($utype=="branch")
	  {
	     ?>
      <script>
	  alert("you have logged in as Branch manager");
	  document.location="warehouse_home.php";
	  </script>
      <?php
	  }
	  if($utype=="admin")
	  {
	  ?>
      <script>
	  alert("you have logged in as admin");
	  document.location="admin_home.php";
	  </script>
      <?php
	  }
	  }
	  else
	  {
	  ?>
<script>
alert("invalid username");
document.location="login/index.html";
</script>
	  <?php
      }
}	  
?>         
