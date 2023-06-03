<div align="center" class="style1">
  <div align="left">Dealer</div>
</div>
<?php include('header.php');?>
                        <h2>Dealer</h2>
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
  <table width="200" border="1" align="center">
    <tr>
      <td>DealerID</td>
      <td>Dealername</td>
      <td>DealerCity</td>
      <td>Dealeraddress</td>
      <td>Contact</td>
      <td>activity</td>
    </tr>
     <?php
  require_once('dbcon.php');
  $ss="select * from dealer";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td><?php echo $row['did'];?></td>
    <td><?php echo $row['dname'];?></td>
    <td><?php echo $row['dcity'];?></td>
    <td><?php echo $row['daddress'];?></td>
    <td><?php echo $row['contact'];?></td
    
    ><td><a href="dealer_delete.php?id=<?php echo $row['did'];?>">delete</a></td>
  </tr>
  <?php
  }
  ?>
                
  </table>
  </blockquote>
  <?php include('footer.php');?>
<p>&nbsp;</p>
