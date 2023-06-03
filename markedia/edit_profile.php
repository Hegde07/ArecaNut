<style type="text/css">
<!--
.style8 {
	font-size: 36px;
}
.style16 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 24px; color: #000000; }
-->
</style>
                        <?php include('dealer_header.php');?>
<h2 class="style8">DEALER INFORMATION</h2>
                        </div><!-- end col -->
<div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                       
</div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section lb" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar" style="width:1700px; margin-left: -100px;">
                            <div class="widget-no-style">
                                <div class="newsletter-widget text-center align-self-center">
                                <?php
require_once('dbcon.php');
session_start();
$u=$_SESSION['t1'];
$ss="select * from dealer_info where Dealer_Email='$u'";
$rs=mysql_query($ss);
$row=mysql_fetch_array($rs);

?>
<form action="dealer_info_db.php" method="post" enctype="multipart/form-data" name="form1" style="margin-left:-800px;">
  <table width="517" height="834" align="center"">
    <tr>
      <td height="179" colspan="2"><div align="center"><img src="upload/<?php echo $row['photo'];?>" width="100" height="100" /></div></td>
    </tr>
    <tr>
      <td width="278" height="72"><span class="style16">Edit Photo</span></td>
      <td width="227"><label>
        <input type="file" name="file" id="file" />
      </label></td>
    </tr>
    <tr>
      <td height="72"><span class="style16">Dealer_Name</span></td>
      <td>
        <input name="t1" type="text" id="t1" value="<?php echo $row['Dealer_Name'];?>">     </td>
    </tr>
    <tr>
      <td height="72"><span class="style16">Dealer_City</span></td>
      <td><input name="t2" type="text" id="t2" value="<?php echo $row['Dealer_City'];?>"></td>
    </tr>
    <tr>
      <td height="73"><span class="style16">Dealer_Address</span></td>
      <td><label>
        <textarea name="t3" id="t3"> <?php echo $row['Dealer_Address'];?></textarea>
      </label></td>
    </tr>
    <tr>
      <td height="62"><span class="style16">Dealer_Pincode</span></td>
      <td><input name="t4" type="text" id="t4" value="<?php echo $row['Dealer_Pincode'];?>"></td>
    </tr>
    <tr>
      <td height="66"><span class="style16">Dealer_Contact</span></td>
      <td><input name="t5" type="text" id="t5" value="<?php echo $row['Dealer_Contact'];?>"></td>
    </tr>
    <tr>
      <td height="71"><span class="style16">Dealer_Email </span></td>
      <td><input name="t6" type="text" id="t6" value="<?php echo $row['Dealer_Email'];?>" readonly="readonly"></td>
    </tr>
    <tr>
      <td height="75"><span class="style16">GSTIN</span></td>
      <td><input name="t7" type="text" id="t7" value="<?php echo $row['GSTIN'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <label>
        <input type="submit" name="button" id="button" value="Submit" style="background-color:#993366; color:#FFFFFF; height:80px; width:180px; font:Arial, Helvetica, sans-serif; font-size:24px; "  />
        </label>
      </div></td>
    </tr>
  </table>
</form>
<?php include('footer.php');?>

<p>&nbsp;</p>
