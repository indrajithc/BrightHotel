<?php
session_start();
include_once("connectivity.php");
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
          <h5 class="centered"><?php echo $_SESSION['username'];?></h5>
          <li class="sub-menu">
            <a href="profile.php:;">
              <i class="fa fa-user"></i>
              <span>profile</span>
              </a>
            
          </li>
          
          <li class="sub-menu">
            <a href="emp_res.php">
              <i class="fa fa-desktop"></i>
              <span>Making Response</span>
              </a>
            
          </li>
          
          <li class="sub-menu">
            <a href="cerine4.php">
              <i class="fa fa-check-square-o"></i>
              <span>Add requirement</span>
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
</form>

                      <div class="col-md-12">
                      <table align="centered" border="1px" style="width: auto; line-height: 100px;">
                        <tr>
                          <th colspan="9"><h2 align="center" ><font color="#000000"> Details</font></h2>
                            
                          </th>
                        </tr>
                        <t>
                          <th align="center">EmployeeID</th>
                          <th align="center">Name</th>
                          <th align="center">Salary</th>
                          <th align="center">Designation</th>
                          <th align="center">Address</th>
                          <th align="center">Date of join</th>
                          <th align="center">DOB</th>
                          <th align="center">Username</th>
                          <th align="center">Password</th>
                        </t>
                        <?php
						$empid=$_SESSION['eid']; 
                       // if( isset( $empid ) ) {
                         //  $empid = $_GET['empid'];
                           //   }
                              $query1="SELECT * FROM employee where empid='$empid'";
                        $result2=mysqli_query($connection,$query1);
                        while ($row2=mysqli_fetch_array($result2)) {
                          ?>
                          <tr>
                            <td align="center"><?php echo $row2[0];?> </td>
                            <td align="center"><?php echo $row2[8];?> </td>
                            <td align="center"><?php echo $row2[1];?> </td>
                            <td align="center"><?php echo $row2[2];?> </td>
                            <td align="center"><?php echo $row2[3];?> </td>
                            <td align="center"><?php echo $row2[4];?> </td>
                            <td align="center"><?php echo $row2[5];?> </td>
                            <td align="center"><?php echo $row2[7];?> </td>
                            <td align="center"><?php echo $row2[6];?> </td>
                          </tr>
                         <?php  
                        }
                        ?>
                      </table>          </div>
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
