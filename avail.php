<?php 
session_start();
include_once("connectivity.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

  <link rel="stylesheet" href="css/log1css.css" >
  <link href="css/style1.css" rel="stylesheet">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }

  * {
    box-sizing: border-box;
  }

  .bg-image {
    /* The image used */
    background-image: url("images/img_5.jpg");

    /* Add the blur effect */
    filter: blur(8px);
    -webkit-filter: blur(2px);

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  /* Position text in the middle of the page/image */
  .bg-text {
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
    color: white;
    font-weight: bold;
    border: 3px solid #f1f1f1;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width:auto;
    padding: 20px;
    text-align: center;
    height: auto;
  }
</style>
</head>

<body>
 <header class="header black-bg">
   <div class="sidebar-toggle-box">
    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
  </div>
  <!--logo start-->
  <a href="" class="logo"><b>BRIGHT HOTEL</b></a>
  <!--logo end-->
  <div class="nav notify-row" id="top_menu">
    <!--  notification start -->

    <!--  notification end -->
  </div>
  <div class="top-menu">
    <ul class="nav pull-right top-menu">
      <li><a class="logout" href="index.php">Home</a></li>
    </ul>
  </div>
</header>

<div class="bg-image"></div>

<div class="bg-text">
  <div class="bg-img">
    <div>


      <table align="centered"  border="1px" style="width: auto; line-height: 100px;"  >
        <tr>
          <th colspan="9"><h2 align="center"> Availabile Room Details</h2>

          </th>
        </tr>
        <t>
          <th align="centered">Roomno</th>
          <th align="center">Type</th>
          <th align="center">Amount</th>
        </t>


        <?php 
        $t=$_GET['type'];
        $sql="select * from room where availability='avail' and rtype='$t' AND rno NOT IN ( SELECT roomno FROM booking WHERE  DATE ( CURRENT_TIMESTAMP ) <= checkoutdate )  ";
        $result2=mysqli_query($connection,$sql);
        while ($row2=mysqli_fetch_array($result2)) {
          ?>
          <tr>
            <td align="center"><?php echo $row2[0];?> </td>
            <td align="center"><?php echo $row2[1];?> </td>
            <td align="center"><?php echo $row2[3];?> </td>

          </tr>
          <?php  
        }
        ?>
      </table>
      <form method="post" action="book.php">

        <label for="roomno" class="control-label col-lg-2">Roomno</label>
        <select class="form-control" id="roomno" name="roomno" required="">

          <?php
          $sql="select rno from room where availability='avail' and rtype='$t'  AND rno NOT IN ( SELECT roomno FROM booking WHERE  DATE ( CURRENT_TIMESTAMP ) <= checkoutdate ) ";
          $result2=mysqli_query($connection,$sql);
          
          while($row1=mysqli_fetch_array($result2)):;?>
            <option><?php echo $row1[0];?></option>

          <?php endwhile;

          ?>





        </select>
        <div class="top-menu">
          <ul class="nav pull-right top-menu" style="padding: 10px;">
            <li><button class="btn btn-xs btn-primary" type="submit">Book Now</button></li>
          </ul>
        </div>

      </form>
    </div>
  </div>
</div>




</body>
</html>