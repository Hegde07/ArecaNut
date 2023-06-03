<style type="text/css">
<!--
.style4 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-size: 16px; }
-->
</style>
<div align="center" class="style1">Invoice	</div>
<?php include('header.php');?>
                        <h2>Invoice</h2>
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
<table width="200" border="1" align="left">
  <tr>
    <td>InvoiceID</td>
    <td>OrderID</td>
    <td>DealerID</td>
    <td>ArekhaID</td>
    <td>Quantity</td>
    <td>CostperQty</td>
    <td>GST</td>
    <td>CGST</td>
    <td>SGST</td>
    <td>Transportcharge</td>
    <td>GrandTotal</td>
    <td>activity</td>
  </tr>
  <?php
  require_once('dbcon.php');
  $ss="select * from invoice";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td><?php echo $row['iid'];?></td>
    <td><?php echo $row['oid'];?></td>
    <td><?php echo $row['did'];?></td>
    <td><?php echo $row['aid'];?></td>
    <td><?php echo $row['quantity'];?></td>
    <td><?php echo $row['cost-per-qty'];?></td>
    <td><?php echo $row['gst'];?></td>
    <td><?php echo $row['cgst'];?></td>
    <td><?php echo $row['sgst'];?></td>
    <td><?php echo $row['transportcharge'];?></td>
    <td><?php echo $row['grandtotal'];?></td>
    <td><a href="invoice_delete.php?id=<?php echo $row['iid'];?>">delete</a></td>
  </tr>
  <?php
  }
  ?>
                                </table>
 <?php include('footer.php');?>
<p>&nbsp;</p>
