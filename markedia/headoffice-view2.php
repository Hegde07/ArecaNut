
</head>
<style type="text/css">
<!--
.style10 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #FFFFFF; font-size: 18px; }
.style13 {color: #000000; font-weight: bold; }
-->
</style>
<body>
<div align="center"><?php include('admin_header.php');?>
                        <h2 align="left">HeadOffice</h2>
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
<div align="center"></div>
<table width="1064" height="195" border="1">
  <tr bgcolor="#0033FF">
    <td width="269" height="87" bgcolor="#3399FF"><span class="style10">Head Office Name</span></td>
    <td width="130" bgcolor="#3399FF"><span class="style10">Location</span></td>
    <td width="126" bgcolor="#3399FF"><span class="style10">Address</span></td>
    <td width="108" bgcolor="#3399FF"><span class="style10">District</span></td>
    <td width="91" bgcolor="#3399FF"><span class="style10">Tauk</span></td>
    <td width="99" bgcolor="#3399FF"><span class="style10">Contact</span></td>
    <td colspan="2" bordercolor="#0066FF" bgcolor="#CC3333"> <div align="center" class="style10">Activity </div></td>
  </tr>
  <?php
  require_once('dbcon.php');
  $ss="select * from headoffice";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td height="100" bgcolor="#FFFFFF"><span class="style13"><?php echo $row['hname'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style13"><?php echo $row['hlocation'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style13"><?php echo $row['haddress'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style13"><?php echo $row['hdistrict'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style13"><?php echo $row['htaluk'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style13"><?php echo $row['hcontact'];?></span></td>
    <td width="95" bordercolor="#0066FF" bgcolor="#FFFFFF"><div align="center" class="style13"><a href="headoffice-delete.php?id=<?php echo $row['hcontact'];?>">delete</a></div></td>
    <td width="94" bordercolor="#0066FF" bgcolor="#FFFFFF"><div align="center" class="style13"><a href="headoffice_update.php?id=<?php echo $row['hcontact'];?>">update</a></div></td>
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
