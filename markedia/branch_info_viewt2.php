
</head>

<style type="text/css">
<!--
.style12 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 18px; color: #FFFFFF; }
.style14 {
	color: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
}
.style18 {color: #000000; font-weight: bold; }
-->
</style>
<body>
<div align="center"><?php include('admin_header.php');?>
                        <h2 align="left">BRANCH INFORMATION</h2>
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
<div align="center"></div>
<table width="1226" height="199" border="1">
  <tr bgcolor="#0033FF">
    <td width="135" height="68" bgcolor="#3399FF"><span class="style12">BRACH NAME</span></td>
    <td width="182" bgcolor="#3399FF"><span class="style12">BRANCH ADDRESS</span></td>
    <td width="143" bgcolor="#3399FF"><span class="style12">BRANCH CITY</span></td>
    <td width="161" bgcolor="#3399FF"><span class="style12">BETEL NUT NAME</span></td>
    <td width="151" bgcolor="#3399FF"><span class="style12">QUALITY LEVEL</span></td>
    <td width="100" bgcolor="#3399FF"><span class="style12">QUANTITY</span></td>
    <td width="98" bgcolor="#3399FF"><span class="style12">RATE</span></td>
    <td colspan="3" bgcolor="#CC3333"><div align="center"><span class="style14">Activity</span>
  </div>  </tr>
  <?php
  require_once('dbcon.php');
  $ss="select * from branch_info";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td height="123" bgcolor="#FFFFFF"><span class="style18"><?php echo $row['BRANCH_NAME'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style18"><?php echo $row['BRANCH_ADDRESS'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style18"><?php echo $row['BRANCH_CITY'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style18"><?php echo $row['CATEGORY'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style18"><?php echo $row['QUALITY_LEVEL'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style18"><?php echo $row['QUANTITY'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style18"><?php echo $row['RATE'];?></span></td>
 <td width="96" bgcolor="#FFFFFF"><div align="center" class="style18"><a href="brach_info-delete.php?id=<?php echo $row['BRANCH_NAME'];?>" class="style6">delete</a></div></td>
    <td width="102" bgcolor="#FFFFFF"><div align="center" class="style18"><a href="branch_info_update.php?id=<?php echo $row['BRANCH_NAME'];?>" class="style6">update</a></div></td>
    <td width="102" bgcolor="#FFFFFF"><div align="center" class="style18"><a href="branch_info_addproduct.php?id=<?php echo $row['CATEGORY'];?>&bname=<?php echo $row['BRANCH_NAME'];?>&city=<?php echo $row['BRANCH_CITY'];?>&addrs=<?php echo $row['BRANCH_ADDRESS'];?>" class="style6">Add_Product</a></div></td>
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
