
</head>

<style type="text/css">
<!--
-->
a:hover{
color:#00CC00;
}
.style6 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-size: 16px; color: #000000; }
.style8 {color: #FFFFFF}
</style>
<body>
<div align="center">HeadOffice
<?php include('admin_header.php');?>
                        <h2 align="left">HEAD OFFICE</h2>
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
  <form id="form1" name="form1" method="post" action="headoffice-db.php">
  <?php
$id=$_GET['id'];
require_once('dbcon.php');
$ss="select * from headoffice where hcontact='$id'";
$rs=mysql_query($ss);
$row=mysql_fetch_array($rs);
?>

    <table width="387" align="center" style="margin-left:70px;">
    <input type="hidden" name="id" value="<?php echo $id;?>" />

      <tr>
        <td width="214" height="50"><span class="style6">HeadOfficeName</span></td>
        <td width="161"><label>
          <input type="text" name="t1" id="t1" required pattern="[A-Za-z\s]+" title="enter characters only" value="<?php echo $row['hname'];?>" />
        </label></td>
      </tr>
      <tr>
        <td height="56"><span class="style6">HeadOfficeLocation</span></td>
        <td><input type="text" name="t2" id="t2" required pattern="[A-Za-z\s]+" title="enter characters only" value="<?php echo $row['hlocation'];?>" /></td>
      </tr>
      <tr>
        <td height="48"><span class="style6">HeadOfficeAddress</span></td>
        <td><input type="text" name="t3" id="t3" required pattern="[A-Za-z\s]+" title="enter characters only" value="<?php echo $row['haddress'];?>" /></td>
      </tr>
      <tr>
        <td height="51"><span class="style6">HeadOfficeDistrict</span></td>
        <td><input type="text" name="t4" id="t4" required pattern="[A-Za-z\s]+" title="enter characters only" value="<?php echo $row['hdistrict'];?>" /></td>
      </tr>
      <tr>
        <td height="48"><span class="style6">HeadOfficeTaluk</span></td>
        <td><input type="text" name="t5" id="t5" required pattern="[A-Za-z\s]+" title="enter characters only" value="<?php echo $row['hdistrict'];?>" /></td>
      </tr>
      <tr>
        <td height="49"><span class="style6">HeadOfficeContact</span></td>
        <td><input type="text" name="t6" id="t6" required pattern="[6-9]{1}[0-9]{9}" title="Enter a valid phone number only" value="<?php echo $row['hcontact'];?>" readonly /></td>
      </tr>
      <tr>
        <td height="73" colspan="2"><span class="style8">
          <label></label>
          </span>
          <div align="center" class="style8">
            <input type="submit" name="b1" id="b1" value="Submit"  style="background-color:#3300CC; height:30px; width:80px; color:#FFFFFF;font-size:18px; font:Georgia,"Times New Roman", Times, serif;"  />
            <input type="reset" name="Reset" id="button" value="Reset" style="background-color:#CC0000; color:#FFFFFF; height:30px; width:80px; font-size:18px; font:Georgia,"Times New Roman", Times, serif;" />
        </div></td>
      </tr>
    </table>
  </form>
   <?php include('footer.php');?>
</div>
</body>
</html>
