<?php 
  
  // connection
  include_once( 'connectivity.php' );
    if( isset( $_POST['submit'] ) ) {
      
      
      $password = $_POST['password'];
      $name = $_POST['name'];
      
      $address = $_POST['address'];
      $dob = $_POST['dob'];
      $dateofjoin = $_POST['dateofjoin'];
      $designation = $_POST['designation'];
      $salary = $_POST['salary'];
      $username = $_POST['username'];
      $sql="insert into employee(name,salary,designation,address,dateofjoin,dob,username,password) values('$name','$salary','$designation','$address','$dateofjoin','$dob','$username','$password')";
    if(mysqli_query($connection, $sql))
      {
        echo "Records inserted successfully.";
      } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
    }
    }
    mysqli_close($connection);


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
              <span>Employee </span>
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
      <section class="wrapper">
        
        <!-- BASIC FORM VALIDATION -->
        
        <!-- /row -->
        <!-- FORM VALIDATION -->
       
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Employee Registration</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                  <div class="form-group ">
                    <label for="name" class="control-label col-lg-2">Name</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="name" name="name" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="address" class="control-label col-lg-2">Address</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="address" name="address" required></textarea>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="name" class="control-label col-lg-2">Date of Birth</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="dob" name="dob" type="date" />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="designation" class="control-label col-lg-2">Designation</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="designation" name="designation" required="">
                        <option value="Manager">Manager</option>
                        <option value="Room Boy">Room Boy</option>
                        <option value="Reciptionist">Reciptionist</option>
                        <option value="porters">porters</option>
                        <option value="supervisor">supervisor</option>
                        <option value="Accountant">Accountant</option>
                        <option value="Ass. Manager">Ass. Manager</option>
                      </select>
                    </div>
                  </div>
                <div class="form-group ">
                    <label for="salary" class="control-label col-lg-2">Salary</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="salary" name="salary" type="text" />
                    </div>
                  </div>
                <div class="form-group ">
                    <label for="name" class="control-label col-lg-2">Date of Join</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="dateofjoin" name="dateofjoin" type="date" />
                    </div>
                </div>

                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Username</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="username" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Password</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="password" type="password" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="confirm_password" class="control-label col-lg-2">Confirm Password</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="confirm_password" name="confirm_password" type="password" />
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <input class="btn btn-theme"  name="submit" type="submit"></input>
                      <button class="btn btn-theme04" type="button">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
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
        <a href="form_validation.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/form-validation-script.js"></script>

</body>

</html>
