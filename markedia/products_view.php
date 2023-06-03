<?php include('header.php');?>
<h2>&nbsp;</h2>
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
  <div align="center">Products
  </div>
</form>
<blockquote>
  <table width="200" border="1" align="left">
    <tr>
      <td><div align="center">ArekhaID</div></td>
      <td><div align="center">ArekhaName</div></td>
      <td><div align="center">Category</div></td>
      <td><div align="center">ArekhaColor</div></td>
      <td><div align="center">Quality</div></td>
      <td><div align="center">Quantity</div></td>
      <td><div align="center">Cost</div></td>
      <td><div align="center">activity</div></td>
    </tr>
    <?php
  require_once('dbcon.php');
  $ss="select * from products";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td><?php echo $row['arekhaid'];?></td>
    <td><?php echo $row['arekhaname'];?></td>
    <td><?php echo $row['acategory'];?></td>
    <td><?php echo $row['acolor'];?></td>
    <td><?php echo $row['aquality'];?></td>
    <td><?php echo $row['aquantity'];?></td>
    <td><?php echo $row['acost'];?></td>
    <td><a href="products_delete.php?id=<?php echo $row['arekhaid'];?>">delete</a></td>
    </tr>
  <?php
  }
  ?>
  </table>
  </blockquote>
 <?php include('footer.php');?>
<p>&nbsp;</p>

  

