<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 18px;
}
.style2 {
	color: #000000;
	font-weight: bold;
}
-->
</style>
<blockquote>
<?php include('dealer_header.php');?>
<h2>BILL GENERATION</h2>
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
  <table width="400" border="1">
    <tr bgcolor="#009966">
      <td width="390" height="59"><div align="center"><span class="style1">ODRER NUMBER</span></div></td>
    </tr>
      <?php
  require_once('dbcon.php');
  session_start();
  $u=$_SESSION['t1'];
  
  $ss="select distinct(order_no) from dealer_order_request where order_status='confirmed' and dealer_id='$u'";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
    <tr bgcolor="#FFFFFF">
      <td height="58"><div align="center"><a href="bill2.php?id=<?php echo $row['order_no'];?>" class="style2"><?php echo $row['order_no'];?></a></div></td>
    </tr>
     <?php
  }
  ?>
  </table>
</blockquote>
<?php include('footer.php');?>
<p>&nbsp;</p>
