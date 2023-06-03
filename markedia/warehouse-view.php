<blockquote>
<?php include('header.php');?>
<h2>Warehouse</h2>
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
<form name="form1" method="post" action="">
  <div align="center">Warehouse
  </div>
</form>
<blockquote>
  <table width="200" border="1">
    <tr>
      <td>WarehouseID</td>
      <td>WarehouseName</td>
      <td>WarehouseLocation</td>
      <td>WarehouseAddress</td>
      <td>ArekhaID</td>
      <td>Quantity</td>
      <td>TotalStock</td>
      <td>CurrentStock</td>
      <td>activity</td>
    </tr>
      <?php
  require_once('dbcon.php');
  $ss="select * from warehouse";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
    <tr>
      <td><?php echo $row['wid'];?></td>
      <td><?php echo $row['wname'];?></td>
      <td><?php echo $row['wlocation'];?></td>
      <td><?php echo $row['waddress'];?></td>
      <td><?php echo $row['aid'];?></td>
      <td><?php echo $row['wquantity'];?></td>
      <td><?php echo $row['currentstock'];?></td>
      <td><?php echo $row['totalstock'];?></td>
      <td><a href="warehouse-delete.php?id=<?php echo $row['wid'];?>">delete</a></td>
    </tr>
     <?php
  }
  ?>
     
  </table>
</blockquote>
<?php include('footer.php');?>
<p>&nbsp;</p>
