<?php

$db_con = mysqli_connect('localhost', 'root', '');

    if (!$db_con){

                     die( "Database connection failed" . mysql_error());

                }else{

                                $db =  mysqli_select_db($db_con, 'hotel');

                                if(!$db){

                                  die("cann't select the required database". mysql_error());

                               

                               }else{               

                               }

                }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="cerine11.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href=""><img src="cerine.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Cerine SEbastian</h5>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-user"></i>
              <span>Employee Registration</span>
              </a>
            <ul class="sub">
              <li><a href="cerine1.php">Add</a></li>
              <li><a href="cerine12.php">Update</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="cerine3.php">
              <i class="fa fa-desktop"></i>
              <span>Assign Duty</span>
              </a>
            
          </li>
          <li class="sub-menu">
            <a href="cerine2.php">
              <i class="fa fa-cogs"></i>
              <span>Add Rooms</span>
              </a>
            </li>
          <li class="sub-menu">
            <a href="cerine4.php">
              <i class="fa fa-check-square-o"></i>
              <span>Employee Response</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="cerine5.php">
              <i class="fa fa-home"></i>
              <span>View Booking</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="cerine6.php">
              <i class="fa fa-book"></i>
              <span>View Requirement</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="cerine7.php">
              <i class="fa fa-pencil-square-o"></i>
              <span>Generate Report</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="cerine8.php">
              <i class="fa fa-users"></i>
              <span>View Employee</span>
            </a>
          </li>
          
          
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Blank Page</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <select>
          <?php 
           $records = mysql_query("SELECT empid FROM employee ");
           while ($row = mysql_fetch_array($records)){
          echo "<option value=\"\">" . $row['empid'] . "</option>";
           }
          ?>
           </select>
          </div>

        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="blank.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>
