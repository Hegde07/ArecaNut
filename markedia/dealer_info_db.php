<?php
require_once('dbcon.php');
session_start();
$u=$_SESSION['t1'];
$Dealer_Name = $_POST['t1'];
$Dealer_City = $_POST['t2'];
$Dealer_Address = $_POST['t3'];
$Dealer_Pincode = $_POST['t4'];
$Dealer_Contact = $_POST['t5'];
$Dealer_Email = $_POST['t6'];
$GSTIN = $_POST['t7'];

if(!empty($_FILES['file']['name']))
{

$file_exts = array("jpg", "bmp", "pjpeg", "gif", "png","pdf","JPG","mp4","mp3");
	
	$upload_exts = end(explode(".", $_FILES["file"]["name"]));
	

	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/JPG")
	|| ($_FILES["file"]["type"] =="audio/mp3")
	|| ($_FILES["file"]["type"] =="video/mp4")
	|| ($_FILES["file"]["type"] == "image/png")
	|| ($_FILES["file"]["type"] == "application/pdf")
	|| ($_FILES["file"]["type"] == "image/pjpeg"))	&& ($_FILES["file"]["size"] < 20000000000)
	&& in_array($upload_exts, $file_exts))
	{
	  if ($_FILES["file"]["error"] > 0)
	  {
	   echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	  }
	else
	{
	echo "Upload: " . $_FILES["file"]["name"] . "<br>";
	echo "Type: " . $_FILES["file"]["type"] . "<br>";
	echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
	echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
	// Enter your path to upload file here
	if (file_exists("./upload/" .
	$_FILES["file"]["name"]))
	{
	   echo "<div class='error'>"."(".$_FILES["file"]["name"].")".
	    " already exists. "."</div>";
	}
	
	else	
	
	{	
	
	move_uploaded_file($_FILES["file"]["tmp_name"],	"./upload/" . $_FILES["file"]["name"]);	
	echo "<div class='sucess'>"."Stored in: " ."./upload/" . $_FILES["file"]["name"]."</div>";
}	}	}	

else	
{	
echo "<div class='error'>Invalid file</div>";	
}

$photo=$_FILES['file']['name'];
	
$sql = "update dealer_info set Dealer_Name='$Dealer_Name',Dealer_City='$Dealer_City',Dealer_Address='$Dealer_Address',Dealer_Pincode='$Dealer_Pincode',Dealer_Contact='$Dealer_Contact',GSTIN='$GSTIN',photo='$photo' where Dealer_Email='$Dealer_Email'";
$rs=mysql_query($sql);



   ?>
   <script>
   alert("Edit Profile Successfully");
   document.location="edit_profile.php";
   </script>
   <?php

}
else
{
   $sql = "update dealer_info set Dealer_Name='$Dealer_Name',Dealer_City='$Dealer_City',Dealer_Address='$Dealer_Address',Dealer_Pincode='$Dealer_Pincode',Dealer_Contact='$Dealer_Contact',GSTIN='$GSTIN' where Dealer_Email='$Dealer_Email'";
$rs=mysql_query($sql);
}

//echo $sql;
?>
<script>
alert('edited successfully');
document.location="edit_profile.php";
</script>