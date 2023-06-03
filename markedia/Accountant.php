<style type="text/css">
<!--
.style7 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-size: 16px; }
.style8 {
	font-size: 36px;
}
-->
</style>
<div align="center">Accountant</div>
<?php include('accountant_header.php');?>
                        <h2 class="style8">Accountant</h2>
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
<form name="form1" method="post" action="Accountant_insert.php">
  <table width="308" align="center" style="margin-left:70px;">
    <tr>
      <td width="163"><span class="style7">Accountantname</span></td>
      <td width="129"><label>
        <input type="text" name="t1" id="t1" required pattern="[A-Za-z\s]+" title="Enter characters only">
      </label></td>
    </tr>
    <tr>
      <td height="47"><span class="style7">Accountantaddress</span></td>
      <td><input type="text" name="t2" id="t2" required pattern="[A-Za-z\s]+" title="Enter characters only"></td>
    </tr>
    <tr>
      <td height="32"><span class="style7">AccountantContact</span></td>
      <td><input type="text" name="t3" id="t3" required pattern="[6-9]{1}[0-9]{9}" title="Enter a valid phone number only"></td>
    </tr> 
    <tr>
      <td height="47"><span class="style7">Email</span></td>
      <td><input type="email" name="t4" id="t4" required ></td>
    </tr>
    <tr>
      <td height="47" colspan="2">
        <div align="right">
          <input type="submit" name="b1" id="b1" value="Submit" style="background-color:#3300CC; color:#CCCCCC; height:30px; width:80px; font-size:18px; font:Georgia, "Times New Roman", Times, serif;" />
          <input type="reset" name="b2" id="b2" value="Reset" style="background-color:#CC0000; color:#FFFFFF;  height:30px; width:80px; font-size:18px; font:Georgia, "Times New Roman", Times, serif;/>
        </div></td>
    </tr>
  </table>
  <label></label>
</form>
  <?php include('footer.php');?>
<p>&nbsp;</p>
