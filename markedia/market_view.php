 
<?php include('header.php');?>
<h2>Market</h2>
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
<tr>
  <td><form name="form1" method="post" action="">
    <div align="center">Market    </div>
  </form>  </td>
  </tr>
  <p>&nbsp;	</p>
  <table width="200" border="1" align="center">
    <tr>
      <td>Mid</td>
      <td>Mname</td>
      <td>Mcity</td>
      <td>Maddress</td>
      <td>Mconact</td>
      <td>activity</td>
    </tr>
    <?php
  require_once('dbcon.php');
  $ss="select * from marketplace";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
    <tr>
      <td><?php echo $row['mid'];?></td>
      <td><?php echo $row['mname'];?></td>
      <td><?php echo $row['mcity'];?></td>
      <td><?php echo $row['maddress'];?></td>
      <td><?php echo $row['mcontact'];?></td>
      <td><a href="market_delete.php?id=<?php echo $row['mid'];?>">delete</a></td>
    </tr>
    <?php }?>
  </table>
   <?php include('footer.php');?>

