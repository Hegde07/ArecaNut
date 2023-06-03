
<style type="text/css">
<!--
.style3 {
	color: #000000;
	font-weight: bold;
}
.style4 {color: #000000}
.style10 {color: #FFFFFF; font-weight: bold; font-size: 18px; }
.style11 {
	font-size: 24px;
	font-weight: bold;
	color: #000000;
}
-->
</style>
<body>
<div align="center"><?php include('dealer_header.php');?>
                        <h2 align="left">BILL DETAILS</h2>
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
                     
                     <?php
					 $id=$_GET['id'];
					 require_once('dbcon.php');
  $ss1="select * from dealer_order_request where order_no='$id' ";
  $rs1=mysql_query($ss1);
  $row1=mysql_fetch_array($rs1);
  ?>  
<p align="center">&nbsp;	</p>
                      <table width="802" border="1" align="center" style="margin-left:70px;">
                        <tr>
                          <td height="43" colspan="5" bgcolor="#99CCFF"><div align="center" class="style11">SIRI TRADERS</div></td>
                        </tr>
                        <tr>
                          <td width="207" height="43" bgcolor="#99CCFF"><span class="style3">User Id</span></td>
                          <td width="106" bgcolor="#99CCFF"><span class="style3"><?php echo $row1['dealer_id'];?></span></td>
                          <td width="78" bgcolor="#99CCFF">&nbsp;</td>
                          <td width="105" bgcolor="#99CCFF">&nbsp;</td>
                          <td width="79" bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        
                        <tr>
                          <td height="44" bgcolor="#99CCFF"><span class="style3">OrderNo</span></td>
                          <td bgcolor="#99CCFF"><span class="style4"><strong><?php echo $row1['order_no'];?></strong></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        <tr>
                          <td bgcolor="#99CCFF"><span class="style4"></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="58" bgcolor="#996600"><span class="style10">BETEL NUTNAME</span></td>
                          
                          <td bgcolor="#996600"><span class="style10">UOM</span></td>
                          <td bgcolor="#996600"><span class="style10">QUANTITY</span></td>
                          <td bgcolor="#996600"><span class="style10">RATE</span></td>
                          <td bgcolor="#996600"><span class="style10">TOTAL</span></td>
                        </tr>
                        <?php
						
  require_once('dbcon.php');
  $ss="select * from dealer_order_request where order_no='$id'";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
                        <tr>
                          <td height="46" bgcolor="#99CCFF"><span class="style3"><?php echo $row['betelnut'];?></span></td>
                          
                          <td bgcolor="#99CCFF"><span class="style3"><?php echo $row['uom'];?></span></td>
                          
                          <td bgcolor="#99CCFF"><span class="style3"><?php echo $row['quantity'];?></span></td>
                          
                          
                          <td bgcolor="#99CCFF"><span class="style3"><?php echo $row['price'];?></span></td>
                          <td bgcolor="#99CCFF"><span class="style3"><?php echo $row['total'];?></span></td>
                        </tr>
                        <?php
						}
						?>
                        <tr>
                          <td height="37" bgcolor="#99CCFF"><span class="style4"><strong>CGST(9%)</strong></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF"><span class="style3"><?php echo $row1['cgst'];?></span></td>
                        </tr>
                        <tr>
                          <td height="41" bgcolor="#99CCFF"><span class="style4"><strong>SGST(9%)</strong></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF"><span class="style3"><?php echo $row1['sgst'];?></span></td>
                        </tr>
                        <tr>
                          <td height="48" bgcolor="#999999"><span class="style3"><strong>Grand Total</strong></span></td>
                          <td bgcolor="#999999">&nbsp;</td>
                          <td bgcolor="#999999">&nbsp;</td>
                          <td bgcolor="#999999">&nbsp;</td>
                          <td bgcolor="#999999"><span class="style3"><?php echo $row1['gradtotal'];?></span></td>
                               <p> <a href="javascript:window.print()" style="color:#FFFFFF;"> Print </a> </p>
                        </tr>
</table>
<?php include('footer.php');?>