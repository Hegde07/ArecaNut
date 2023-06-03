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
                                <script>
								function total()
								{
		var qty=parseInt(document.getElementById("t4").value);
		var rate=parseInt(document.getElementById("t5").value);
								   
		var total=qty*rate;
								   
		document.getElementById("t6").value=total;
						
								
								}
								
								</script>
 <?php
 session_start();
 $u=$_SESSION['t1'];
  
		require_once('dbcon.php');
		$id=$_GET['id'];
		$_SESSION['id']=$id;
		$s1="select * from branch_info where BRANCH_NAME='$id'";
		$s2=mysql_query($s1);
		$s3=mysql_fetch_array($s2);
		
		
		?>
 
 
<form name="form1" method="post" action="send_branch_order_insert.php">
  <table width="483" height="262" align="center" style="margin-left:70px;">
    <tr>
      <td width="255"><span class="style13"> Betulnut</span></td>
      <td width="216"><label>
        <div align="center">
          <input type="text" name="t1" style="width:200px;" value="<?php echo $s3['CATEGORY'];?>">
          </div>
      </label></td>
    </tr>
    <tr>
      <td><span class="style13">Quality Level</span></td>
      <td><input type="text" name="t2" id="t2" style="width:200px;" value="<?php echo $s3['QUALITY_LEVEL'];?>"/>
      </td>
    </tr>
    <tr>
      <td><span class="style13">UOM</span></td>
      <td><label>
        <input type="text" name="t3" id="t3" style="width:200px;" value="Quintal"/>
      </label></td>
    </tr>
    <tr>
      <td><span class="style13">Quantity</span></td>
      <td><input type="text" name="t4" id="t4" style="width:200px;"></td>
    </tr>
    
    <tr>
      <td><span class="style13">Rate/Quintal</span></td>
      <td><input type="text" name="t5" id="t5" style="width:200px;" value="<?php echo $s3['RATE'];?>" onblur="total();" /></td>
    </tr>
    
    <tr>
      <td><span class="style13">Grand Total</span></td>
      <td><span class="style13">
        <input type="text" name="t6" id="t6" style="width:200px;" />
      </span></td>
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

