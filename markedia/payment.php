<style type="text/css">
<!--
.style8 {
	font-size: 36px;
}
.style15 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #000000; font-size: 24px; }
-->
</style>
<?php include('dealer_header.php');?>
<h2 class="style8">Paymennt</h2>
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
			var total=parseInt(document.getElementById("t2").value);
			var paid=parseInt(document.getElementById("t3").value);
			var balance=total-paid;
			document.getElementById("t4").value=balance;
			
								}
								</script>
<form name="form1" method="post" action="payment_insert.php">
  <table width="421" align="center" style="margin-left:70px;">
    <tr>
      <td width="224" height="61"><span class="style15">Order No</span></td>
      <td width="185"><label>
        <input type="text" name="t1" id="t1" value="<?php echo $_GET['ono'];?>">
      </label></td>
    </tr>
    <tr>
      <td height="79"><span class="style15">Total Amount</span></td>
      <td><input type="text" name="t2" id="t2" value="<?php echo $_GET['total'];?>"></td>
    </tr>
    <tr>
      <td height="66"><span class="style15">Advance Payment</span></td>
      <td><input type="text" name="t3" id="t3" onblur="total();"></td>
    </tr>
    <tr>
      <td height="56"><span class="style15">Balance</span></td>
      <td><input type="text" name="t4" id="t4"></td>
    </tr>
    <tr>
      <td height="104" colspan="2"><div align="center">
        <label>
        <input type="submit" name="button" id="button" value="Submit" style="background-color:#000000; color:#FFFFFF; width:130px; height:70px; font:Arial, Helvetica, sans-serif; font-size:24px">
        </label>
      </div></td>
    </tr>
  </table>
</form>
  <?php include('footer.php');?>
<p>&nbsp;</p>
