<style type="text/css">
<!--
.style5 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style8 {color: #000000; font-weight: bold; }
-->
</style>
<blockquote>
<?php include('dealer_header.php');?>
<h2>Payment</h2>
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
  <div align="center"></div>
</form>
<blockquote>
  <table width="778" border="1">
    <tr>
      <td width="143" bgcolor="#009966"><span class="style5">Order_No</span></td>
      <td width="189" bgcolor="#009966"><span class="style5">Total_Amount</span></td>
      <td width="246" bgcolor="#009966"><span class="style5">Advance_Payment</span></td>
      <td width="172" bgcolor="#009966"><span class="style5">Balance</span></td>
    </tr>
      <?php
  require_once('dbcon.php');
  $ss="select * from payment";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
    <tr>
      <td bgcolor="#FFFFFF"><span class="style8"><?php echo $row['Order_No'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style8"><?php echo $row['Total_Amount'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style8"><?php echo $row['Advance_Payment'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style8"><?php echo $row['Balance'];?></span></td>
    </tr>
     <?php
  }
  ?>
  </table>
</blockquote>
<?php include('footer.php');?>
<p>&nbsp;</p>
