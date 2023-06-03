
</head>

<style type="text/css">
<!--
.style6 {color: #FFFFFF; font-weight: bold; }
.style9 {color: #000000; font-weight: bold; }
.style11 {color: #FFFFFF; font-weight: bold; font-size: 18px; }
.style12 {color: #000000}
-->
</style>
<body>
<div align="center"><?php include('dealer_header.php');?>
                        <h2 align="left">BETEL NUT PRICE (HEAD OFFICE)</h2>
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
<table width="1083" height="181" border="1">
  <tr bgcolor="#0000FF">
    <td width="191" height="69" bgcolor="#009966"><span class="style6">BETEL_NUT_NAME</span></td>
    <td width="196" bgcolor="#009966"><div align="center"><span class="style11">UOM</span></div></td>
    <td width="165" bgcolor="#009966"><span class="style6">QUALITY_LEVEL</span></td>
    <td width="123" bgcolor="#009966"><span class="style6">QUANTITY</span></td>
    <td width="92" bgcolor="#009966"><span class="style6">RATE</span></td>
    <td width="167" bgcolor="#009966"><span class="style6">CURRENT STOCK</span></td>
    <td width="103" bgcolor="#009966"><span class="style6">IMAGE</span></td>
    
  </tr>
  <?php
  require_once('dbcon.php');
  $ss="select * from betelnut_price";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><span class="style9"><?php echo $row['BETEL_NUT_NAME'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style9"><?php echo $row['BETEL_NUT_CATEGORY'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style9"><?php echo $row['QUALITY_LEVEL'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style9"><?php echo $row['QUANTITY'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style9"><?php echo $row['RATE'];?></span></td>
     <td bgcolor="#FFFFFF"><span class="style9"><?php echo $row['current_stock'];?></span></td>
    <td bgcolor="#FFFFFF"><img src="upload/<?php echo $row['IMAGE'];?>" width="100" height="100"></td>
    	
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
