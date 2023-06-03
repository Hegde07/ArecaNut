<?php include('header.php');?>
                        <h2>Dealer Info </h2>
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
<form name="form1" method="post" action="dealer_insert.php">
  <table width="370" height="260" align="center" style="margin-left:120px;">
    <tr>
      <td width="115"><div align="left">Dealerid</div></td>
      <td width="239"><label>
        <input type="text" name="t1" id="t1" required pattern="[0-9]{4}" title="Enter a valid ID">
      </label></td>
    </tr>
    <tr>
      <td><div align="left">Dealername</div></td>
      <td><input type="text" name="t2" id="t2" required pattern="[A-Za-z\s]+" title="Enter characters only"></td>
    </tr>
    <tr>
      <td><div align="left">Dealercity</div></td>
      <td><input type="text" name="t3" id="t3" required pattern="[A-Za-z\s]+" title="Enter characters only"></td>
    </tr>
    <tr>
      <td><div align="left">Dealeraddress</div></td>
      <td><input type="text" name="t4" id="t4" required pattern="[A-Za-z\s]+" title="Enter characters only"></td>
    </tr>
    <tr>
      <td><div align="left">Contact</div></td>
      <td><input type="text" name="t5" id="t5" required pattern="[6-9]{1}[0-9]{9}" title="Enter a valid phone number only"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="Submit" style="background-color:#3300CC; color:#CCCCCC; height:30px; width:80px; font-size:18px; font:Georgia, "Times New Roman", Times, serif;" />
        <input type="reset" name="button2" id="button2" value="Reset" style="background-color:#CC0000; color:#CCCCCC; height:30px; width:80px; font-size:18px; font:Georgia, "Times New Roman", Times, serif;" /> 
      </label></td>
    </tr>
  </table>
</form>
 <?php include('footer.php');?>
