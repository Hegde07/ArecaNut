<style type="text/css">
<!--
.style7 {font-size: 16px}
.style13 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-size: 18px; color: #000000; }
-->
</style>
<body>
<div align="left">Warehouse</div>
<?php include('admin_header.php');?>
                        <h2>WAREHOUSE</h2>
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
<form id="form1" name="form1" method="post" action="warehouse-db.php">
  <?php
$id=$_GET['id'];
require_once('dbcon.php');
$ss="select * from warehouse where wid='$id'";
$rs=mysql_query($ss);
$row=mysql_fetch_array($rs);
?>

  <table width="406" height="581" align="center" style="margin-left:70px;">
      <input type="hidden" name="id" value="<?php echo $id;?>" />

    <tr>
      <td width="213" height="55"><span class="style13">WarehouseID</span></td>
      <td width="181"><label>
        <input type="text" name="t1" id="t1" required pattern="[0-9]{4}" title="Enter a valid id" value="<?php echo $row['wid'];?>"readonly />
      </label></td>
    </tr>
    <tr>
      <td height="52"><span class="style13">WarehouseName</span></td>
      <td><input type="text" name="t2" id="t2" required pattern="[A-Za-z\s]+" title="Enter characters only" value="<?php echo $row['wname'];?>" /> </td>
    </tr>
    <tr>
      <td height="55"><span class="style13">WarehouseLocation</span></td>
      <td><input type="text" name="t3" id="t3" required pattern="[A-Za-z\s]+" title="Enter characters only" value="<?php echo $row['wlocation'];?>" /> </td>
    </tr>
    <tr>
      <td height="58"><span class="style13">WarehouseAddress</span></td>
      <td><input type="text" name="t4" id="t4" required pattern="[A-Za-z\s]+" title="Enter characters only" value="<?php echo $row['waddress'];?>" /></td>
    </tr>
    <tr>
      <td height="56"><span class="style13">BetelnutName</span></td>
      <td><input type="text" name="t5" id="t5" required pattern="[A-Za-z\s]+" title="Enter a characters" value="<?php echo $row['bname'];?>" /></td>
    </tr>
    <tr>
      <td height="61"><span class="style13">Quantity</span></td>
      <td><input type="number" name="t6" id="t6" required value="<?php echo $row['wquantity'];?>" /></td>
    </tr>
    <tr>
      <td height="53"><span class="style13">TotalStock</span></td>
      <td><input type="number" name="t7" id="t7" required value="<?php echo $row['currentstock'];?>" /></td>
    </tr>
    <tr>
      <td height="67"><span class="style13">CurrentStock</span></td>
      <td><input type="number" name="t8" id="t8" required value="<?php echo $row['totalstock'];?>" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="right">
        <div align="center"><span class="style7"></span>
          <label>
          
          <input type="submit" name="b1" id="b1" value="Submit" style="background-color:#3300CC; color:#CCCCCC; height:30px; width:80px; font-size:18px; font:Georgia, "times="Times" new="New" roman="Roman"", Times, serif;="serif;"" />
          <input type="reset" name="b2" id="b2" value="Reset" style="background-color:#CC0000; color:#FFFFFF;  height:30px; width:80px; font-size:18px; font:Georgia, "times="Times" new="New" roman="Roman"", Times, serif;="serif;"/>
        
      <div align="center"></div>        </label></td>
    </tr>
  </table>
</form>
<?php include('footer.php');?>
<p>&nbsp;</p>
</body>
</html>
