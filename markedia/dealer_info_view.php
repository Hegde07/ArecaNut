
</head>

<style type="text/css">
<!--
.style3 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-size: 16px; }
-->
</style>
<body>
<div align="center"><?php include('header.php');?>
                        <h2 align="left">DEALER INFORMATION</h2>
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
<table width="1030" height="118" border="1">
  <tr>
    <td>Dealer_Name</td>
    <td>Dealer_City</td>
    <td>Dealer_Address</td>
    <td>Dealer_Pincode</td>
    <td>Dealer_Contact</td>
    <td>Dealer_Email</td>
    <td>GSTIN</td>
    
  </tr>
  <?php
  require_once('dbcon.php');
  $ss="select * from dealer_info";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td><?php echo $row['Dealer_Name'];?></td>
    <td><?php echo $row['Dealer_City'];?></td>
    <td><?php echo $row['Dealer_Address'];?></td>
    <td><?php echo $row['Dealer_Pincode'];?></td>
    <td><?php echo $row['Dealer_Contact'];?></td>
    <td><?php echo $row['Dealer_Email'];?></td>
    <td><?php echo $row['GSTIN'];?></td>
    
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
