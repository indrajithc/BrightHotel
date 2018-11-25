<?php 
session_start(); 
include_once("connectivity.php");
echo $_POST['roomno'];
$b= $_POST['roomno'];



?>
<?php

if(isset($_GET['sub']))
{
	$_SESSION["roomno"]=$_GET['roomno'];
	$_SESSION["cin"]=$_GET['cin'];
	$_SESSION["cout"]=$_GET['cout'];
}   
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
    background-image: url("log11.jpg");

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
   width:350px;
   padding: 20px;
   text-align: center;
   height: 350px;
 }
</style>
</head>

<body>
  <div class="bg-image"></div>
  <div class="bg-text" style=" display: inline-table; ">
    <div class="bg-img">
      <div>

        <form  class="form-signin" method="get" action="log1.php">
          <h2 class="form-signin-heading">Booking Details</h2>
          <div class="input-group">
            <label for="roomno" class="control-label col-lg-2">RoomNumber</label>
          </div>
          <input type="text" id="roomno" name="roomno" value="<?php echo $b ?>" style="color:#000"/>




          <div class="input-group">
            <label for="cin" class="control-label col-lg-2">check_in_date</label>
          </div>
          <input class=" form-control" id="cin" name="cin" type="date"required />  

          <div class="input-group">
            <label for="cin" class="control-label col-lg-2">check_out_date</label>
          </div>                  
          <input class=" form-control" id="cout" name="cout" type="date" required/>

          <input type="submit" class="btn btn-lg btn-primary btn-block" value="Booknow" name="sub"  style="margin-top: 3rem;" /></input>
          <!--<a href="paynew.php">BOOK NOW</a>--->



        </form>



      </div>
    </div>
  </div>
</body>
</html>