
</head>

<style type="text/css">
<!--
.style12 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 24px; }
.style15 {color: #000000; font-weight: bold; }
.style17 {color: #FF0000; font-weight: bold; }
-->
</style>
<body>
<div align="center"><?php include('branch_header.php');?>
                        <h2 align="left">DEALER ORDER REQUEST	</h2>
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
<table width="1030" height="185" border="1">
  <tr bgcolor="#CC6666">
    <td height="90"><span class="style12">User_id</span></td>
    <td><span class="style12">Branch</span></td>
    <td><span class="style12">Orderno</span></td>
    <td><span class="style12">Betelnut_name</span></td>
    <td><span class="style12">Quality</span></td>
    <td><span class="style12">uom</span></td>
    <td><span class="style12">Quantity</span></td>
    <td><span class="style12">Rate</span></td>
    <td><span class="style12">Total</span></td>
    <td><span class="style12">CGST</span></td>
    <td><span class="style12">SGST</span></td>
    <td><span class="style12">Grandtotal</span></td>
    <td><span class="style12">Orderdate</span></td>
    <td><span class="style12">Order_status</span></td>
  </tr>
  <?php
  require_once('dbcon.php');
  session_start();
  $u=$_SESSION['t1'];
  $ss="select * from branch_order_request where branch='$u'";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td height="87" bgcolor="#FFFFFF"><span class="style15"><?php echo $row['user_id'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['branch'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['ono'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['betelnut_name'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['quality'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['uom'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['quantity'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['rate'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['total'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['CGST'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['SGST'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['grandtotal'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['orderdate'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style17"><?php echo $row['order_status'];?></span></td>
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
