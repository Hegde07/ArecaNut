<style type="text/css">
<!--
.style8 {
	font-size: 36px;
}
.style13 {font-size: 18px; font-weight: bold; font-family: Georgia, "Times New Roman", Times, serif; color: #000000; }
-->
</style>
<?php include('dealer_header.php');?>
<h2 class="style8">SendOrders</h2>
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
 <?php
 session_start();
 $u=$_SESSION['t1'];
 
 ?>
<form name="form1" method="post" action="send_order_insert.php">
  <table width="483" height="262" align="center" style="margin-left:70px;">
    <tr>
      <td width="255"><span class="style13">Select Betulnut</span></td>
      <td width="216"><label>
        <div align="center">
          <select name="select" id="select" style="width:200px;">
            
        <?php
		require_once('dbcon.php');
		$s1="select * from betelnut_price";
		$s2=mysql_query($s1);
		while($s3=mysql_fetch_array($s2))
		{
		
		?>
        <option value="<?php echo $s3['BETEL_NUT_NAME'];?>"> <?php echo $s3['BETEL_NUT_NAME'];?> </option>
        <?php
		}
		?>

          </select>
          </div>
      </label></td>
    </tr>
    <tr>
      <td><span class="style13">Select Quality Level</span></td>
      <td><select name="t3" id="t3" style="width:200px;">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
            </select></td>
    </tr>
    <tr>
      <td><span class="style13">UOM</span></td>
      <td><label>
        <select name="t11" id="t11" style="width:200px;">
        <option value="Quintal">Quintal </option>
        
        </select>
      </label></td>
    </tr>
    <tr>
      <td><span class="style13">Quantity</span></td>
      <td><input type="text" name="t2" id="t2" style="width:200px;"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="Send Order" style="background-color:#000000; color:#FFFFFF; width:200px;" />
      </label></td>
    </tr>
  </table>
</form>
<?php include('footer.php');?>
<p>&nbsp;</p>

