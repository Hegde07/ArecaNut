
</head>

<style type="text/css">
<!--
.style26 {font-size: 18px}
.style27 {color: #000000}
-->
</style>
<body>
<div align="center"><?php include('admin_header.php');?>
                        <h2 align="left">ADD PRODUCT</h2>
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
<style type="text/css">
<!--
.style8 {color: #FFFFFF}
-->
</style>
  <?php
  require_once('dbcon.php');
  $ss="select max(BRANCH_ID) from branch_info";
  $rs=mysql_query($ss);
  $row=mysql_fetch_array($rs);
  $count=$row[0];
  if($count==0)
  {
     $count=1;
  }
  else
  {
    $count++;
  }
  ?>
<form action="branch_info_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="509" align="center" style="margin-left:70px;">
  
  <tr>
      <td width="272" height="60"><span class="style26 style5 style27"><strong>BRANCH ID </strong></span></td>
      <td width="221"><label>
        <input name="id" type="text" id="t1" required value="<?php echo $count;?>">
      </label></td>
    </tr>
    <tr>
      <td width="272" height="60"><span class="style26 style5 style27"><strong>BRANCH NAME </strong></span></td>
      <td width="221"><label>
        <input name="t1" type="text" id="t1" required pattern="[A-Za-z\s]+" title="enter characters only" value="<?php echo $_GET['bname'];?>">
      </label></td>
    </tr>
    <tr>
      <td height="67"><span class="style26 style5 style27"><strong>BRANCH ADDRESS </strong></span></td>
      <td><label>
        <textarea name="t2" id="t2" required pattern="[A-Za-z\s]+" title="enter characters only"> <?php echo $_GET['addrs'];?></textarea>
      </label></td>
    </tr>
    <tr>
      <td height="51"><span class="style26 style5 style27"><strong>BRANCH CITY </strong></span></td>
      <td><input name="t3" type="text" id="t3" required pattern="[A-Za-z\s]+" title="enter characters only" value="<?php echo $_GET['city'];?>"></td>
    </tr>
    <tr>
      <td height="51"><span class="style26 style6 style27"><strong>BETEL NUT NAME</strong></span></td>
      <td><input name="t4" type="text" id="t4" required pattern="[A-Za-z\s]+" title="enter characters only" value="<?php echo $_GET['id'];?>"></td>
    </tr>
    <tr>
      <td height="49"><span class="style26 style5 style27"><strong>QUALITY LEVEL </strong></span></td>
      <td><label>
        <select name="l1" id="l1">
          <option value="QUALITY1">QUALITY1</option>
          <option value="QUALITY2">QUALITY2</option>
          <option value="QUALITY3">QUALITY3</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td height="52"><span class="style26 style5 style27"><strong>QUANTITY</strong></span></td>
      <td><input name="t5" type="number" id="t5" required ></td>
    </tr>
    <tr>
      <td height="56"><span class="style26 style5 style27"><strong>RATE</strong></span></td>
      <td><input name="t6" type="number" id="t6" required ></td>
    </tr>
    <tr>
      <td height="89" colspan="2"><div align="center" class="style1">
        <label>
        <input type="submit" name="b1" id="b1" value="Submit" style="background-color:#000000; color:#FFFFFF; font-size:18px; height:50px; width:80px;" />
        </label>
      </div></td>
    </tr>
  </table>
</form>  <?php include('footer.php');?>

