
</head>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style4 {color: #000000; font-weight: bold; }
.style7 {color: #000000}
-->
</style>
<body>
<div align="center"><?php include('dealer_header.php');?>
                        <h2 align="left">BRANCH INFORMATION</h2>
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
    <td bgcolor="#00CCCC"><span class="style1">BRACH_NAME</span></td>
    <td bgcolor="#00CCCC"><span class="style1">BRANCH_ADDRESS</span></td>
    <td bgcolor="#00CCCC"><span class="style1">BRANCH_CITY</span></td>
    <td bgcolor="#00CCCC"><span class="style1">CATEGORY</span></td>
    <td bgcolor="#00CCCC"><span class="style1">QUALITY_LEVEL</span></td>
    <td bgcolor="#00CCCC"><span class="style1">QUANTITY</span></td>
    <td bgcolor="#00CCCC"><span class="style1">RATE</span></td>
    <td bgcolor="#00CCCC"><span class="style1">CURRENT STOCK</span></td>
    <td bgcolor="#00CCCC"><span class="style1">ORDER</span></td>
  </tr>
  <?php
  $branch=$_POST['t1']; 
  require_once('dbcon.php');
  $ss="select * from branch_info where branch_name='$branch'";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><span class="style4"><?php echo $row['BRANCH_NAME'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style4"><?php echo $row['BRANCH_ADDRESS'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style4"><?php echo $row['BRANCH_CITY'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style4"><?php echo $row['CATEGORY'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style4"><?php echo $row['QUALITY_LEVEL'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style4"><?php echo $row['QUANTITY'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style4"><?php echo $row['RATE'];?></span></td>
    <td bgcolor="#FFFFFF"><span class="style4"><?php echo $row['current_stock'];?></span></td>
    <td width="94" bgcolor="#FFFFFF"><div align="center" class="style13 style7"><a href="send_orders2.php?id=<?php echo $row['BRANCH_NAME'];?>"><strong>ORDER</strong></a></div></td>
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
