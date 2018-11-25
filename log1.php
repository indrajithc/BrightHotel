	<?php
	include("connectivity.php");
	session_start();

	if(isset($_POST["submit"]))
	{
      // username and password sent from form 

		$username = mysqli_real_escape_string($connection,$_POST['username']);
		$password = mysqli_real_escape_string($connection,$_POST['password']); 
		$_SESSION['username']=$username;
		$sql = "SELECT loginid FROM login WHERE username = '$username' and password = '$password' and type = 'u'";

		$result = mysqli_query($connection,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //  $active = $row['active'];
		$_SESSION['uid']=$row['loginid'];


		$_SESSION['cin']=$_GET['cin'];
		$count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row for user
		
		if($count == 1)
		{
			 /*session_register("username");
			 $_SESSION['login_user'] = $username;
			 */	$_SESSION['username']=$username;


			 $_SESSION['roomno'] = $_GET['roomno'];
			 $_SESSION['cin'] = $_GET['cin'];
			 // $_SESSION['uid'] = $_GET['uid'];
			 $_SESSION['cout'] = $_GET['cout'];

			 header('location:paynew.php'. "?" . http_build_query($_GET));
			}
			else
			{	
				$sqlp = "SELECT logid FROM log2 WHERE username = '$username' and password = '$password'";
				$result1 = mysqli_query($connection,$sqlp);
				$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
				$count1 = mysqli_num_rows($result1);

      // If result matched $myusername and $mypassword, table row must be 1 row for user

				if($count1 == 1)
				{
				 /*session_register("username");
				 $_SESSION['login_user'] = $username;
				 */	//$_SESSION['username']=$username;
				 $_SESSION['eid']=$row1['logid'];
				 header('location:emp/employee.php' . "?" . http_build_query($_GET));

				// header('location:paynew.php');
				}
				else
				{
					echo "<script>alert('Enetr valid details....')</script>";
				}
			}
		}
		else {
			echo "<script>alert('Enter username and password!!')</script>";
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
		<div class="bg-text">
			<div class="bg-img">
				<div>
					<form class="form-signin" method="POST" action="">
						<h2 class="form-signin-heading">Please Login</h2>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">@</span>
							<input type="text" name="username" class="form-control" placeholder="Username" required>
						</div>
						<label for="inputPassword" class="sr-only">Password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
						<input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="login" ></input>

						<input type="reset" class="btn btn-lg btn-primary btn-block" value="cancel"></input>
						<a  href="registrationpage.php"><h4>Register here</h4></a>
					</form>
				</div>
			</div>
		</div>

	</body>
	</html>
