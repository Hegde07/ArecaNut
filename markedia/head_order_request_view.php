<div align="center"><?php include('admin_header.php');?>
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
<table width="1274" height="185" border="1">
  <tr bgcolor="#0099FF">
    <td width="90" height="90"><span class="style12">Order_No</span></td>
    <td width="79"><span class="style12">Dealer Id</span> </td>
    <td width="175"><span class="style12">BetelNut_Name</span></td>
    <td width="56"><span class="style12">Uom</span></td>
    <td width="97"><span class="style12">Quantity</span></td>
    <td width="61"><span class="style12">Price</span></td>
    <td width="58"><span class="style12">Total</span></td>
    <td width="51"><span class="style12">GST</span></td>
    <td width="67"><span class="style12">CGST</span></td>
    <td width="66"><span class="style12">SGST</span></td>
    <td width="122"><span class="style12">Grandtotal</span></td>
    <td width="114"><span class="style12">Orderdate</span></td>
    <td width="156"><span class="style12">Order_status</span></td>
  </tr>
  <?php
  require_once('dbcon.php');
  session_start();
  //$u=$_SESSION['t1'];
  $ss="select * from dealer_order_request where order_status='confirmed'";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td height="87" bgcolor="#FFFFFF"><span class="style15"><?php echo $row['order_no'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['dealer_id'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['betelnut'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['uom'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['quantity'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['price'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['total'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['gst_tax'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['cgst'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['sgst'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style15"><?php echo $row['gradtotal'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style17"><?php echo $row['order_date'];?></span></td>
    
  <td bgcolor="#FFFFFF"><span class="style17"><?php echo $row['order_status'];?></span></td>
     
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
	