<?php
require_once('dbcon.php');
$BETEL_NUT_NAME = $_POST['t1'];
$BETEL_NUT_CATEGORY  = $_POST['t2'];
$QUALITY_LEVEL = $_POST['l1'];
$QUANTITY = $_POST['t3'];
$RATE = $_POST['t4'];
$id=$_POST['id'];
if(empty($_FILES['file']['name']))
{

$sql = "update betelnut_price set BETEL_NUT_NAME='$BETEL_NUT_NAME',BETEL_NUT_CATEGORY='$BETEL_NUT_CATEGORY',QUALITY_LEVEL='$QUALITY_LEVEL',QUANTITY='$QUANTITY',RATE='$RATE' where BETEL_NUT_NAME='$id'";
$rs=mysql_query($sql);

}

else
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
  $IMAGE=$_FILES['file']['name'];
$sql = "update betelnut_price set BETEL_NUT_NAME='$BETEL_NUT_NAME',BETEL_NUT_CATEGORY='$BETEL_NUT_CATEGORY',QUALITY_LEVEL='$QUALITY_LEVEL',QUANTITY='$QUANTITY',RATE='$RATE',IMAGE='$IMAGE' where BETEL_NUT_NAME='$id'";
$rs=mysql_query($sql);
  

   ?>
  <script>
  document.location="betelnut_priceview2.php";
  </script>
  <?php
}









?>