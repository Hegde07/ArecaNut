<div align="center" class="style1">Purchase</div>
<?php include('header.php');?>
                        <h2>Purchase</h2>
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
                                <blockquote>
  <table width="200" border="1">
    <tr>
      <td>Purchaseid</td>
      <td>Marketid</td>
      <td>Quantity</td>
      <td>PurchaseDate</td>
      <td>Cost</td>
      <td>Arekhaid</td>
      <td>TotalCost</td>
      <td>Gst</td>
      <td>CGst</td>
      <td>SGst</td>
      <td>GrandTotal</td>
      <td>TransportCharge</td>
      <td>activity</td>
    </tr>
     <?php
  require_once('dbcon.php');
  $ss="select * from purchase";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
    <tr>
      <td><?php echo $row['pid'];?></td>
      <td><?php echo $row['mid'];?></td>
      <td><?php echo $row['pquantity'];?></td>
      <td><?php echo $row['pdate'];?></td>
      <td><?php echo $row['cost'];?></td>
      <td><?php echo $row['aid'];?></td>
      <td><?php echo $row['totalcost'];?></td>
      <td><?php echo $row['gst'];?></td>
      <td><?php echo $row['cgst'];?></td>
      <td><?php echo $row['sgst'];?></td>
      <td><?php echo $row['grandtotal'];?></td>
      <td><?php echo $row['transportcharge'];?></td>
      <td><a href="purchase_delete.php?id=<?php echo $row['pid'];?>">delete</a></td>
    </tr>
    <?php
	 }
	?>
  </table>
</blockquote>
 <?php include('footer.php');?>
<p>&nbsp;</p>

