<style type="text/css">
<!--
.style1 {font-size: 36px}
.style4 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-size: 16px; }
-->
</style>
<div align="center" class="style1">Invoice	</div>
<?php include('header.php');?>
                        <h2>Invoice</h2>
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
<form name="form1" method="post" action="invoice_insert.php">
  <table width="353" align="center" style="margin-left:70px;">
    <tr>
      <td width="172" height="32"><span class="style4">InvoiceID</span></td>
      <td width="165"><label>
        <input type="text" name="t1" id="t1">
      </label></td>
    </tr>
    <tr>
      <td height="33"><span class="style4">OrderID</span></td>
      <td><input type="text" name="t2" id="t2"></td>
    </tr>
    <tr>
      <td height="37"><span class="style4">DealerID</span></td>
      <td><input type="text" name="t3" id="t3"></td>
    </tr>
    <tr>
      <td height="37"><span class="style4">ArekhaID</span></td>
      <td><input type="text" name="t4" id="t4"></td>
    </tr>
    <tr>
      <td height="38"><span class="style4">Quantity      </span></td>
      <td><input type="text" name="t5" id="t5"></td>
    </tr>
    <tr>
      <td height="40"><span class="style4">CostperQty</span></td>
      <td><input type="text" name="t6" id="t6"></td>
    </tr>
    <tr>
      <td height="35"><span class="style4">GST</span></td>
      <td><input type="text" name="t7" id="t7"></td>
    </tr>
    <tr>
      <td height="37"><span class="style4">CGST</span></td>
      <td><input type="text" name="t8" id="t8"></td>
    </tr>
    <tr>
      <td height="37"><span class="style4">SGST</span></td>
      <td><input type="text" name="t9" id="t9"></td>
    </tr>
    <tr>
      <td height="38"><span class="style4">Transportcharge</span></td>
      <td><input type="text" name="t10" id="t10"></td>
    </tr>
    <tr>
      <td height="36"><span class="style4">GrandTotal</span></td>
      <td><input type="text" name="t11" id="t11"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="b1" id="b1" value="Submit"style="background-color:#3300CC; color:#CCCCCC; height:30px; width:80px; font-size:18px; font:Georgia, "Times New Roman", Times, serif;" />
        <input type="reset" name="b2" id="button" value="Reset" style="background-color:#CC0000; color:#CCCCCC; height:30px; width:80px; font-size:18px; font:Georgia, "Times New Roman", Times, serif;" />
      </label></td>
    </tr>
  </table>
</form>
  <?php include('footer.php');?>
<p>&nbsp;</p>
