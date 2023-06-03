<style type="text/css">
<!--
.style8 {
	font-size: 36px;
}
.style9 {
	font-size: 24px;
	font-weight: bold;
	color: #000000;
}
-->
</style>
<?php include('dealer_header.php');?>
                        <h2 class="style8">BranchStock</h2>
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
<form name="form1" method="post" action="branchwise_stock2.php">
  <table width="637" align="center" style="margin-left:70px;">
    <tr>
      <td width="199" height="136"><span class="style9">Search Branch</span></td>
      <td width="217"><label>
        <select name="t1">
        <?php
		require_once('dbcon.php');
		$s1="select * from branch_info";
		$s2=mysql_query($s1);
		while($s3=mysql_fetch_array($s2))
		{
		
		?>
        <option value="<?php echo $s3['BRANCH_NAME'];?>"> <?php echo $s3['BRANCH_NAME'];?> </option>
        <?php
		}
		?>
        </select>
      </label></td>
      <td width="205"><label>
        <div align="center">
          <input type="submit" name="button" id="button" value="Search" style="background-color:#000000; color:#FFFFFF; font-size:20px; width:80px; height:50px;">
          </div>
      </label></td>
    </tr>
  </table>
</form>
<?php include('footer.php');?>
<p>&nbsp;</p>

