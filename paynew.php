<?php
session_start();
include("connectivity.php"); 


$roomno=$_SESSION['roomno'];
$cin=$_SESSION["cin"];
$username=$_SESSION['username'];
$uid=$_SESSION["uid"];
$cout=$_SESSION["cout"];


$totamot=0;
$id=0;

//echo $roomno;
$uid;
//echo $cout;


//}
// $room=$_GET['roomno'];
//$cin=$_GET['cin'];
//$cout=$_GET['cout']; 
if (!isset($_POST['submit']))
{
  echo "<script>alert('Fill the details!!!!!.')</script>";

}
else
{	
	$amout=1000;
	$cardno=$_POST['cardno'];
	$cvv=$_POST['cvv'];
	
	$year=$_POST['year'];



  $month=$_POST['month'];

  $qr=("select * from room where  rno = " . $roomno);
  $result = mysqli_query($connection,$qr)or die (mysqli_error());

  if(mysqli_num_rows($result )>0)  {
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $amout=$row['amount'];
  //echo $totamot;
  }


  $date1 = strtotime($cin);
  $date2 = strtotime($cout);
  $datediff = $date1 - $date2;

  $diff =abs( round($datediff / (60 * 60 * 24)) );



  $amout *=  $diff ;
 


  $qr=("select * from bank where cardno='$cardno' and cvv='$cvv' and year='$year' and month='$month'");
  $result = mysqli_query($connection,$qr)or die (mysqli_error());

  if(mysqli_num_rows($result )>0) 
  {
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $totamot=$row['amount'];
	//echo $totamot;
	//echo $amout;
  }else
  echo "<script>alert('something gonna wrong!!!!!.')</script>";


  if($totamot>=$amout)
  {

   $balamt=$totamot-$amout;
   echo $balamt;
   $qr=mysqli_query($connection,("update bank set amount='$balamt' where cardno='$cardno' and cvv='$cvv' and year='$year' and month='$month'"))or die (mysqli_error());

   $sql=mysqli_query($connection,("insert into booking(checkindate,checkoutdate,custid,roomno, amount )values('$cin','$cout','$uid','$roomno', '$amout')"))or die (mysqli_error());



   echo "<script>alert('Payment successfully completed.Booking Finished')</script>";

   mysqli_query($connection, $sql);
   exit;

   $id=mysqli_insert_id($connection);
//session_start();
//$_SESSION["id"]=$id;
//	echo $id;
	?><!---<script type="text/javascript">
window.location="index.php"
exit;
</script>--->
<?php	}

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PAyMENT</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

  <link rel="stylesheet" href="css/log1css.css" >
  <link rel="stylesheet" href="css/stylepay.css">

  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>

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
    background-image: url("images/bg_1.jpg");

    /* Add the blur effect */
    filter: blur(8px);
    -webkit-filter: blur(2px);

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    backgroundsize: cover;
  }

  /* Position text- in the middle of the page/image */
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
  <div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
      <li class="nav-item "><a href="log1.php" class="nav-link">Login</a></li>

      <li class="nav-item"><a href="rooms.html" class="nav-link">Rooms</a></li>
      <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
      <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
      <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
    </ul>
  </div>
  <form  method="post" class="credit-card">


    <div class="form-header">
      <h1 class="title title-cust"><font color="#FFFFFF">Credit Card Details</font></h1>
    </div>

    <div class="form-body">
      <!-- Card Number -->
      <input type="text" class="card-number" placeholder="Card Number" name="cardno">

      <!-- Date Field -->
      <div class="date-field">
        <div class="month select-cust">
          <select name="month" style="color:#000">
            <option value="january">January</option>
            <option value="february">February</option>
            <option value="march">March</option>
            <option value="april">April</option>
            <option value="may">May</option>
            <option value="june">June</option>
            <option value="july">July</option>
            <option value="august">August</option>
            <option value="september">September</option>
            <option value="october">October</option>
            <option value="november">November</option>
            <option value="december">December</option>
          </select>
        </div>
        <div class="year select-cust">
         <select name="year" style="color:#000">
          <option>select</option>

          <option value="2016">2016</option>
          <option value="2017">2017</option>
          <option value="2018">2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
          <option value="2024">2024</option>
        </select>
      </div>
    </div>

    <!-- Card Verification Field -->
    <div class="card-verification">
      <div class="cvv-input">
        <input type="text" placeholder="CVV" name="cvv">
      </div>
      <div class="cvv-details color-white">
        <p style="color:#FFF">3 or 4 digits usually found <br> on the signature strip</p>
      </div>
    </div>

    <!-- Buttons -->
    <input type="submit" class="proceed-btn btn-primary" name="submit" ></input>
    
  </div>
  
</form>
</body>
</html>
<?php
// session_destroy();
?>