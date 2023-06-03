<style type="text/css">
<!--
.style3 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-size: 16px; }
-->
</style>
<div align="center">Sales</div>
<?php include('accountant_header.php');?>
                        <h2>SALES REPORT</h2>
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
<form name="form1" method="post" action="sales_view2.php">
  <table width="388" border="1" align="center" style="margin-left:70px;">
    <tr>
      <td width="149">From date</td>
      <td width="223"><label>
        <input type="date" name="t1" id="t1">
      </label></td>
    </tr>
    <tr>
      <td>To date</td>
      <td><input type="date" name="t2" id="t2"></td>
    </tr>
    <tr>
      <td colspan="2"><label></label>
      <div align="center">
        <input type="submit" name="button" id="button" value="Submit">
      </div></td>
    </tr>
  </table>
</form>
