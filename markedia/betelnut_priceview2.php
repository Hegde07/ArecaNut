

<style type="text/css">
<!--
.style14 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 18px; color: #FFFFFF; }
.style15 {
	color: #FFFFFF;
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style18 {color: #000000; font-weight: bold; }
.style19 {color: #000000}
-->
</style>

<div align="center"><?php include('admin_header.php');?>
                        <h2 align="left">BETEL NUT PRICE</h2>
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
                        <div class="sidebar" style="width:1300px; margin-left: -150px;">
                            <div class="widget-no-style">
                                <div class="newsletter-widget text-center align-self-center">
<div align="center"></div>
<table width="1158" height="189" border="1">
  <tr bgcolor="#0033FF">
    <td width="184" height="77" bgcolor="#3399FF"><span class="style14">BETEL NUT NAME</span></td>
    <td width="242" bgcolor="#3399FF"><div align="center"><span class="style14">UOM</span></div></td>
    <td width="167" bgcolor="#3399FF"><span class="style14">QUALITY LEVEL</span></td>
    <td width="98" bgcolor="#3399FF"><span class="style14">QUANTITY</span></td>
    <td width="109" bgcolor="#3399FF"><span class="style14">RATE</span></td>
    <td width="109" bgcolor="#3399FF"><span class="style14">IMAGE</span></td>
    <td colspan="2" bgcolor="#CC3333"><div align="center" class="style15">Activity</div></td>
  </tr>
  <?php
  require_once('dbcon.php');
  $ss="select * from betelnut_price";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><span class="style18"><?php echo $row['BETEL_NUT_NAME'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style18"><?php echo $row['BETEL_NUT_CATEGORY'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style18"><?php echo $row['QUALITY_LEVEL'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style18"><?php echo $row['QUANTITY'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style18"><?php echo $row['RATE'];?></span></td>
    <td bgcolor="#FFFFFF"><img src="upload/<?php echo $row['IMAGE'];?>" width="100" height="100"></td>
    <td width="97" bgcolor="#FFFFFF"><div align="center" class="style19"><strong><a href="betulnut_price-delete.php?id=<?php echo $row['BETEL_NUT_NAME'];?>" class="style6">delete</a></strong></div></td>
    <td width="100" bgcolor="#FFFFFF"><div align="center" class="style18"><a href="betelnut_price_update.php?id=<?php echo $row['BETEL_NUT_NAME'];?>" class="style6">update</a></div></td>
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
