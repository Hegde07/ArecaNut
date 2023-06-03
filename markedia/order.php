<style type="text/css">
<!--
.style3 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-size: 16px; }
-->
</style>
<div align="center">
  <p>Order	</p>
  </div>
<blockquote>
<?php include('header.php');?>
                        <h2>Order</h2>
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
  <form name="form1" method="post" action="order_insert.php">
    <table width="303" align="center" style="margin-left:70px;">
      <tr>
        <td width="164" height="32"><span class="style3">OrderID</span></td>
        <td width="123"><label>
          <input type="text" name="t1" id="t1">
        </label></td>
      </tr>
      <tr>
        <td height="38"><span class="style3">DealerID</span></td>
        <td><input type="text" name="t2" id="t2"></td>
      </tr>
      <tr>
        <td height="34"><span class="style3">ArekhaID</span></td>
        <td><input type="text" name="t3" id="t3"></td>
      </tr>
      <tr>
        <td height="36"><span class="style3">Quantity</span></td>
        <td><input type="text" name="t4" id="t4"></td>
      </tr>
      <tr>
        <td height="32"><span class="style3">Cost</span></td>
        <td><input type="text" name="t5" id="t5"></td>
      </tr>
      <tr>
        <td height="36"><span class="style3">Odate</span></td>
        <td><input type="text" name="t6" id="t6"></td>
      </tr>
      <tr>
        <td height="36"><span class="style3">TotalCost</span></td>
        <td><input type="text" name="t7" id="t7"></td>
      </tr>
      <tr>
        <td height="36"><span class="style3">Ostatus</span></td>
        <td><input type="text" name="t8" id="t8"></td>
      </tr>
      <tr>
        <td colspan="2"><label>
        
          <div align="right">
            <input type="submit" name="b1" id="b1" value="Submit" style="background-color:#3300CC; color:#CCCCCC; height:30px; width:80px; font-size:18px; font:Georgia, "times="Times" new="New" roman="Roman"", Times, serif;="serif;"" />
            <input type="reset" name="b2" id="b2" value="Reset" style="background-color:#CC0000; color:#FFFFFF;  height:30px; width:80px; font-size:18px; font:Georgia, "times="Times" new="New" roman="Roman"", Times, serif;="serif;"/>
            </label>
        </div></td>
      </tr>
    </table>
  </form>
   <?php include('footer.php');?>
  <p>&nbsp;</p>
</blockquote>
