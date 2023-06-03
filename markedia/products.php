<style type="text/css">
<!--
.style3 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-size: 16px; }
-->
</style>
<div align="center">Products	</div>
<?php include('admin_header.php');?>
                        <h2>Products</h2>
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
<form name="form1" method="post" action="products_insert.php">
  <table width="346" height="369" align="center" style="margin-left:70px;">
    <tr>
      <td width="172" height="35"><span class="style3">ArekhaID</span></td>
      <td width="162"><label>
        <input type="text" name="t1" id="t1" required pattern="[0-9]{4}+" title="Enter a valid id">
      </label></td>
    </tr>
    <tr>
      <td height="40"><span class="style3">ArekhaName</span></td>
      <td><input type="text" name="t2" id="t2" required pattern="[A-Za-z\s]+" title="Enter characters only" /></td>
    </tr>
    <tr>
      <td height="39"><span class="style3">Category</span></td>
      <td><input type="text" name="t3" id="t3"  required pattern="[A-Za-z\s]+" title="Enter characters only"></td>
    </tr>
    <tr>
      <td height="36"><span class="style3">ArekhaColor</span></td>
      <td><input type="text" name="t4" id="t4"  required pattern="[A-Za-z\s]+" title="Enter characters only"></td>
    </tr>
    <tr>
      <td height="38"><span class="style3">Quality</span></td>
      <td><input type="number" name="t5" id="t5" required ></td>
    </tr>
    <tr>
      <td height="38"><span class="style3">Quantity</span></td>
      <td><input type="number" name="t6" id="t6" required ></td>
    </tr>
    <tr>
      <td height="37"><span class="style3">Cost</span></td>
      <td><input type="number	" name="t7" id="t7" required ></td>
    </tr>
    <tr>
      <td height="68" colspan="2"><label>
        <div align="center">
          <input type="submit" name="b1" id="b1" value="Submit" style="background-color:#3300CC; color:#CCCCCC; height:30px; width:80px; font-size:18px; font:Georgia, "times="Times" new="New" roman="Roman"", Times, serif;="serif;"" />
          <input type="reset" name="b3" id="b3" value="Reset" style="background-color:#CC0000; color:#FFFFFF;  height:30px; width:80px; font-size:18px; font:Georgia, "times="Times" new="New" roman="Roman"", Times, serif;="serif;"/>
        </div>
        <div align="center"></div>
      <div align="center"></div>        </label></td>
    </tr>
  </table>
</form>
<?php include('footer.php');?>
<p>&nbsp;</p>
