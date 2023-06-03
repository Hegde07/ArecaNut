
</head>

<style type="text/css">
<!--
.style3 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-size: 16px; }
-->
</style>
<body>
<div align="center"><?php include('header.php');?>
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
<table width="1030" height="118" border="1">
  <tr>
    <td>orderid</td>
    <td>dealerid</td>
    <td>arekhaid</td>
    <td>quantity</td>
    <td>cost</td>
    <td>odate</td>
    <td>totalcost</td>
	<td>oststus</td>
  </tr>
  <?php
  require_once('dbcon.php');
  $ss="select * from order";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td><?php echo $row['oid'];?></td>
    <td><?php echo $row['did'];?></td>
    <td><?php echo $row['aid'];?></td>
    <td><?php echo $row['oqty'];?></td>
    <td><?php echo $row['ocost'];?></td>
    <td><?php echo $row['odate'];?></td>
	<td><?php echo $row['totalcost'];?></td>
	<td><?php echo $row['ostatus'];?></td>
    <td><a href="order-delete.php?id=<?php echo $row['oid'];?>">delete</a></td>
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
