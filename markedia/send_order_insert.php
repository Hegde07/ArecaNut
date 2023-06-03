<style type="text/css">
<!--
.style8 {
	font-size: 36px;
}
.style9 {
	color: #000000;
	font-weight: bold;
}
.style11 {color: #000000}
.style12 {font-size: 24px}
.style13 {font-family: Arial, Helvetica, sans-serif}
.style15 {
	font-size: 18px;
	font-weight: bold;
}
.style17 {
	color: #000000;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
<?php include('dealer_header.php');?>
<h2 class="style8">Order Invoice Details</h2>
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
session_start();
$u=$_SESSION['t1'];
$order_no=rand();
require_once('dbcon.php');
$select_betelnut = $_POST['select'];
$uom = $_POST['t11'];
$quantity = $_POST['t2'];
$level=$_POST['t3'];

$mm="select * from betelnut_price where BETEL_NUT_NAME='$select_betelnut' and BETEL_NUT_CATEGORY='$uom'";
$mm1=mysql_query($mm);
$mm2=mysql_fetch_array($mm1);
$unit_price=$mm2['RATE'];

$total=$quantity*$unit_price;
$gst=18/2;
$sgst=($total*$gst)/100;
$cgst=$sgst;
$grandtot=$total+$sgst+$cgst;

$sql="insert into dealer_order_request values ('$order_no','$u','$select_betelnut','$uom','$quantity','$unit_price','$total','18','$cgst','$sgst','$grandtot',curdate(),'pending')";
mysql_query($sql);



?>
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
	font-size: 24px;
}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
.style3 {color: #FFFFFF}
-->
</style>
<table width="815" height="370" border="1" align="center" style="margin-left:70px;">
  <tr>
    <td width="189" height="55" bgcolor="#996600" class="style2 style12"><strong>BetelNut Name</strong></td>
    <td width="113" bgcolor="#996600"><span class="style12 style2"><strong>Uom</strong></span></td>
    <td width="80" bgcolor="#996600"><span class="style12 style2"><strong>Qty</strong></span></td>
    <td width="139" bgcolor="#996600"><span class="style12 style2"><strong>Unit Price</strong></span></td>
    <td width="260" bgcolor="#996600"><span class="style12 style2"><strong>Total</strong></span></td>
  </tr>
  <tr>
    <td height="56" bgcolor="#FFFFFF"><span class="style9"><?php echo $select_betelnut;?></span></td>
    <td bgcolor="#FFFFFF"><span class="style9"><?php echo $uom;?></span></td>
    <td bgcolor="#FFFFFF"><span class="style9"><?php echo $quantity;?></span></td>
    <td bgcolor="#FFFFFF"><span class="style9"><?php echo $unit_price;?></span></td>
    <td bgcolor="#FFFFFF"><span class="style11"><strong><?php echo $total;?></strong></span></td>
  </tr>
  <tr>
    <td height="55" bgcolor="#FFFFFF"><span class="style17">Gst Tax</span></td>
    <td bgcolor="#FFFFFF"><span class="style17">18</span></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="45" bgcolor="#FFFFFF"><span class="style17">CGST(9%)</span></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><span class="style11"><strong><?php echo $cgst;?></strong></span></td>
  </tr>
  <tr>
    <td height="55" bgcolor="#FFFFFF"><span class="style17">SGST(9%)</span></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><span class="style11"><strong><?php echo $sgst;?></strong></span></td>
  </tr>
  <tr>
    <td height="53" bgcolor="#999999"><span class="style2 style15">Grand Total</span></td>
    <td bgcolor="#999999"><span class="style3"></span></td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#999999"><span class="style3"></span></td>
    <td bgcolor="#999999"><span class="style2"><?php echo $grandtot;?></span></td>
  </tr>
  <tr bgcolor="#0099FF">
    <td height="33" colspan="5" bgcolor="#33CC66"><div align="center">
      <blockquote>
        <p align="center"><a href="confirm_order.php?u=<?php echo $u;?>&ono=<?php echo $order_no;?>&qty=<?php echo $quantity;?>&bname=<?php echo $select_betelnut;?>&total=<?php echo $grandtot;?>" class="style13 style12 style11"><strong> Confirm Order </strong></a></p>
      </blockquote>
    </div></td>
  </tr>
</table>
  <?php include('footer.php');?>
<p>&nbsp;</p>

