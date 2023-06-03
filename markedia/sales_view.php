<?php include('header.php');?>
<h2>Sales</h2>
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
  Sales 
</form>
<blockquote>
  <table width="200" border="1">
    <tr>
      <td>Salesid</td>
      <td>Dealerid</td>
      <td>Arekhaid</td>
      <td>Salesdate</td>
      <td>Quantity</td>
      <td>CostperQty</td>
      <td>Totalcost</td>
      <td>activity</td>
    </tr>
    <?php
  require_once('dbcon.php');
  $ss="select * from sales";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
    <tr>
      <td><?php echo $row['sid'];?></td>
      <td><?php echo $row['did'];?></td>
      <td><?php echo $row['aid'];?></td>
      <td><?php echo $row['sdate'];?></td>
      <td><?php echo $row['squantity'];?></td>
      <td><?php echo $row['cost-per-qty'];?></td>
      <td><?php echo $row['stotalcost'];?></td>
       <td><a href="sales_delete.php?id=<?php echo $row['sid'];?>">delete</a></td>
    </tr>
    <?php
	}
	?>
  </table>
</blockquote>
<?php include('footer.php');?>
<p>&nbsp;</p>
