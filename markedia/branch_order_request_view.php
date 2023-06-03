
<style type="text/css">
<!--
.style2 {font-weight: bold}
.style3 {
	color: #000000;
	font-weight: bold;
}
.style4 {color: #000000}
.style10 {color: #FFFFFF; font-weight: bold; font-size: 18px; }
.style11 {font-size: 18px}
-->
</style>
<body>
<div align="center"><?php include('dealer_header.php');?>
                        <h2 align="left">ORDER DETAILS</h2>
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
  $ss1="select * from branch_order_request where ono='$id' ";
  $rs1=mysql_query($ss1);
  $row1=mysql_fetch_array($rs1);
  ?>  
<p align="center">&nbsp;	</p>
                      <table width="802" border="1" align="center" style="margin-left:70px;">
                        <tr>
                          <td width="207" height="43" bgcolor="#99CCFF"><span class="style3">User Id</span></td>
                          <td width="106" bgcolor="#99CCFF"><span class="style3"><?php echo $row1['user_id'];?></span></td>
                          <td width="78" bgcolor="#99CCFF">&nbsp;</td>
                          <td width="105" bgcolor="#99CCFF">&nbsp;</td>
                          <td width="79" bgcolor="#99CCFF">&nbsp;</td>
                          <td width="103" bgcolor="#99CCFF">&nbsp;</td>
                          <td width="78" bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="43" bgcolor="#99CCFF"><span class="style3">Branch</span></td>
                          <td bgcolor="#99CCFF"><span class="style4"><strong><?php echo $row1['branch'];?></strong></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="44" bgcolor="#99CCFF"><span class="style3">OrderNo</span></td>
                          <td bgcolor="#99CCFF"><span class="style4"><strong><?php echo $row1['ono'];?></strong></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
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
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="58" bgcolor="#996600"><span class="style10">BETEL NUTNAME</span></td>
                          <td bgcolor="#996600"><span class="style10">QUALITY</span></td>
                          <td bgcolor="#996600"><span class="style10">UOM</span></td>
                          <td bgcolor="#996600"><span class="style10">QUANTITY</span></td>
                          <td bgcolor="#996600"><span class="style10">RATE</span></td>
                          <td bgcolor="#996600"><span class="style10">TOTAL</span></td>
                          <td bgcolor="#996600"><span class="style11"></span></td>
                        </tr>
                        <?php
						
  require_once('dbcon.php');
  $ss="select * from branch_order_request where ono='$id'";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
                        <tr>
                          <td height="46" bgcolor="#99CCFF"><span class="style3"><?php echo $row['betelnut_name'];?></span></td>
                          <td bgcolor="#99CCFF"><span class="style3"><?php echo $row['quality'];?></span></td>
                          <td bgcolor="#99CCFF"><span class="style3"><?php echo $row['uom'];?></span></td>
                          <td bgcolor="#99CCFF"><span class="style3"><?php echo $row['quantity'];?></span></td>
                          <td bgcolor="#99CCFF"><span class="style3"><?php echo $row['rate'];?></span></td>
                          <td bgcolor="#99CCFF"><span class="style3"><?php echo $row['total'];?></span></td>
                          <td bgcolor="#99CCFF"><a href="branch_order_remove.php?id=<?php echo $row['user_id'];?>" style="color:#FF0000;">Remove</a></td>
                        </tr>
                        <?php
						}
						?>
                        <tr>
                          <td height="37" bgcolor="#99CCFF"><span class="style4"><strong>CGST(9%)</strong></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF"><span class="style3"><?php echo $row1['CGST'];?></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="41" bgcolor="#99CCFF"><span class="style4"><strong>SGST(9%)</strong></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF"><span class="style3"><?php echo $row1['SGST'];?></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="48" bgcolor="#999999"><span class="style3"><strong>Grand Total</strong></span></td>
                          <td bgcolor="#999999">&nbsp;</td>
                          <td bgcolor="#999999">&nbsp;</td>
                          <td bgcolor="#999999">&nbsp;</td>
                          <td bgcolor="#999999">&nbsp;</td>
                          <td bgcolor="#999999"><span class="style3"><?php echo $row1['grandtotal'];?></span></td>
                          <td bgcolor="#999999"><span class="style2"></span></td>
                        </tr>
                        <tr>
                          <td height="45" bgcolor="#99CCFF"><span class="style4"></span></td>
                          <td colspan="3" bgcolor="#99CCFF"><a href="branch_order_comfirm.php?id=<?php echo $id;?>&total=<?php echo $row1['grandtotal'];?>&bname=<?php echo $row1['betelnut_name'];?>&branch=<?php echo $row1['branch'];?>&qty=<?php echo $row1['quantity'];?>" style="color: #FF6600;"><strong>Click Here to Confirm Your Order</strong></a></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
</table>
<p align="center"><a href="branch_order_comfirm.php?id=<?php echo $id;?>&total=<?php echo $row1['grandtotal'];?>"></a></p>
<?php include('footer.php');?>