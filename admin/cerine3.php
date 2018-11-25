<?php 
  
  // connection
  
  $hostname="localhost";
$username="root";
$password="";
$databaseName="hotel";
$connect=mysqli_connect($hostname,$username,$password,$databaseName);
 $query="SELECT empid FROM employee";
$query2="SELECT rno FROM room";
$result1=mysqli_query($connect,$query);
$result2=mysqli_query($connect,$query2);

    if( isset( $_POST['submit'] ) ) {
      
      $duty = $_POST['duty'];
      $date = $_POST['date'];
      $employeeid = $_POST['employeeid'];
      $room = $_POST['room'];
  
      echo $sql="Insert into duty(empid,rno,task,date) values('$employeeid','$room','$duty','$date')";
    if(mysqli_query($connect, $sql))
      {
        echo "Records inserted successfully.";
      } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
    }
    }
    mysqli_close($connect);


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
      <section class="wrapper">
        
        <!-- BASIC FORM VALIDATION -->
        
        <!-- /row -->
        <!-- FORM VALIDATION -->
       
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Assign Duty</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                  <div class="form-group ">
                    <label for="employeeid" class="control-label col-lg-2">Employee id</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="employeeid" name="employeeid" required="">
                        <?php while($row1=mysqli_fetch_array($result1)):;?>
                          <option><?php echo $row1[0];?></option>
                        
                       <?php endwhile;?>

                        
                        
                      </select>
                    </div>
                  </div>
                  
                  
                  <div class="form-group ">
                    <label for="duty" class="control-label col-lg-2">Duty</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="duty" name="duty" required></textarea>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="room" class="control-label col-lg-2">Rooms</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="room" name="room" required="">
                        <?php while($row2=mysqli_fetch_array($result2)):;?>
                          <option><?php echo $row2[0];?></option>
                        
                       <?php endwhile;?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="name" class="control-label col-lg-2">Date </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="date" name="date" type="date" />
                    </div>
                </div>
                  
                
                 
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <input class="btn btn-theme" type="submit" name="submit"></button>
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
