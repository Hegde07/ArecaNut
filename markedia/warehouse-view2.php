<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {color: #000000}
.style4 {color: #000000; font-weight: bold; }
.style7 {font-family: Arial, Helvetica, sans-serif}
.style8 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style10 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 18px; }
-->
</style>
<blockquote>
<?php include('admin_header.php');?>
<h2>Warehouse</h2>
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
                                <blockquote>
  <table width="1202" border="1">
    <tr>
      <td width="117" height="94" bgcolor="#3399FF"><span class="style10">WarehouseID</span></td>
      <td width="150" bgcolor="#3399FF"><span class="style10">WarehouseName</span></td>
      <td width="174" bgcolor="#3399FF"><span class="style10">WarehouseLocation</span></td>
      <td width="172" bgcolor="#3399FF"><span class="style10">WarehouseAddress</span></td>
      <td width="125" bgcolor="#3399FF"><span class="style10">BetelnutName</span></td>
      <td width="74" bgcolor="#3399FF"><span class="style10">Quantity</span></td>
      <td width="92" bgcolor="#3399FF"><span class="style10">TotalStock</span></td>
      <td width="115" bgcolor="#3399FF"><span class="style10">CurrentStock</span></td>
      <td bgcolor="#CC3333" colspan="2"><div align="center" class="style7"><span class="style1">Activity</span></div></td>
    </tr>
      <?php
  require_once('dbcon.php');
  $ss="select * from warehouse";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
    <tr>
      <td height="83" bgcolor="#FFFFFF"><span class="style4 style7"><?php echo $row['wid'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style4 style7"><?php echo $row['wname'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style4 style7"><?php echo $row['wlocation'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style4 style7"><?php echo $row['waddress'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style4 style7"><?php echo $row['bname'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style4 style7"><?php echo $row['wquantity'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style4 style7"><?php echo $row['currentstock'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style4 style7"><?php echo $row['totalstock'];?></span></td>
      <td width="56" bgcolor="#FFFFFF"><div align="center"><a href="warehouse-delete.php?id=<?php echo $row['wid'];?>" class="style8">delete</a></div></td>
      <td width="63" bgcolor="#FFFFFF"><div align="center"><a href="warehouse-update.php?id=<?php echo $row['wid'];?>" class="style2 style7"><strong>update</strong></a></div></td>
    </tr>
     <?php
  }
  ?>
  </table>
</blockquote>
<?php include('footer.php');?>
<p>&nbsp;</p>
