
</head>

<style type="text/css">
<!--
.style6 {color: #FFFFFF; font-weight: bold; }
.style9 {color: #000000; font-weight: bold; }
-->
</style>
<body>
<div align="center"><?php include('branch_header.php');?>
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
<table width="1096" height="207" border="1">
  <tr bgcolor="#CC6666">
    <td width="155" height="101"><span class="style6">BRACH_NAME</span></td>
    <td width="206"><span class="style6">BRANCH_ADDRESS</span></td>
    <td width="155"><span class="style6">BRANCH_CITY</span></td>
    <td width="166"><span class="style6">BETEL NUT NAME</span></td>
    <td width="139"><span class="style6">QUALITY_LEVEL</span></td>
    <td width="117"><span class="style6">QUANTITY</span></td>
    <td width="112"><span class="style6">RATE</span></td>
  </tr>
  <?php
  require_once('dbcon.php');
  $ss="select * from branch_info";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td height="98" bgcolor="#FFFFFF"><span class="style9"><?php echo $row['BRANCH_NAME'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style9"><?php echo $row['BRANCH_ADDRESS'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style9"><?php echo $row['BRANCH_CITY'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style9"><?php echo $row['CATEGORY'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style9"><?php echo $row['QUALITY_LEVEL'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style9"><?php echo $row['QUANTITY'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style9"><?php echo $row['RATE'];?></span></td>
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
