<style type="text/css">
<!--
.style3 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-size: 16px; }
.style4 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<div align="center">Sales</div>
<?php include('accountant_header.php');?>
                        <h2>Sales</h2>
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
<form name="form1" method="post" action="sales_insert.php">
  <table width="361" align="center" style="margin-left:70px;">
    <tr>
      <td width="144" height="51"><span class="style3">Salesid</span></td>
      <td width="153"><label>
        
        <div align="center">
          <input type="text" name="t1" id="t1" required pattern="[0-9]{4}" title="Enter a valid ID">
          </div>
      </label></td>
    </tr>
    <tr>
      <td height="50"><span class="style3">Dealerid</span></td>
      <td><div align="center">
        <input type="text" name="t2" id="t2" required pattern="[0-9]{4}" title="Enter a valid ID">
      </div></td>
    </tr>
    <tr>
      <td height="52"><span class="style4">BetelNut Name</span></td>
      <td><div align="center">
        <input type="text" name="t3" id="t3" required pattern="[0-9]{4}" title="Enter a valid ID">
      </div></td>
    </tr>
    <tr>
      <td height="58"><span class="style3">Salesdate</span></td>
      <td><div align="center">
        <input type="date" name="t4" id="t4">
      </div></td>
    </tr>
    <tr>
      <td height="62"><span class="style3">Quantity</span></td>
      <td><div align="center">
        <input type="number" name="t5" id="t5" required >
      </div></td>
    </tr>
    <tr>
      <td height="51"><span class="style3">CostperQty</span></td>
      <td><div align="center">
        <input type="number" name="t6" id="t6" required >
      </div></td>
    </tr>
    <tr>
      <td height="47"><span class="style3">Totalcost</span></td>
      <td><div align="center">
        <input type="number" name="t7" id="t7" required >
      </div></td>
    </tr>
    <tr>
      <td height="47" colspan="2"><div align="center">
        <label>
        <input type="submit" name="b1" id="b1" value="Submit" style="background-color:#3300CC; color:#CCCCCC; height:30px; width:80px; font-size:18px; font:Georgia, "times="Times" new="New" roman="Roman"", Times, serif;="serif;"" />
        <input type="reset" name="b2" id="b2" value="Reset" style="background-color:#CC0000; color:#FFFFFF;  height:30px; width:80px; font-size:18px; font:Georgia, "times="Times" new="New" roman="Roman"", Times, serif;="serif;"/>
        </label>
      </div></td>
    </tr>
  </table>
</form>
 </form>         
                             <?php include('footer.php');?>
<p>&nbsp;</p>