<!----?php
<span class="error">  echo $nameErr;?></span><span class="error">  echo $aErr;?></span>
// define variables and set to empty values
$nameErr =  "";
$name =  "";
$aErr =  "";$phErr =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
		  if (empty($_POST["name"]))
		   {
			$nameErr = "Name is required";
		  } else 
		  {
			$name = test_input($_POST["name"]);
		  }
			 
			 if (strlen($_POST["phno"])<10)
		   {
			$phErr = "number size not match";
		  } else 
		  {
			$phno = test_input($_POST["phno"]);
		  }
			  if ((strlen($_POST["adhaar"])>13 || strlen($_POST["adhaar"])<12))
		   {
			$aErr = "Adhaar size not matched";
		  } else 
		  {
			$adhaar = test_input($_POST["adhaar"]);
		  }
		  
		  
 }
			  function test_input($data)
			   {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
				}
  ---->
  <script>
function valid()
{
	if(document.getElementById("name").value=="")
		{
			alert("Enter name");
			document.getElementById("name").focus();
			return false;
			
		}
		if(document.getElementById("address").value=="")
		{
			alert("Enter address");
			document.getElementById("address").focus();
			return false;
			
		}
		
		
		if(document.getElementById("phno").value.length<"10")
		{
			alert("Enter valid phone number:");
			document.getElementById("phno").focus();
			return false;
			
		}
		if(document.getElementById("phno").value.length>"10")
		{
			alert("Enter correct phno");
			document.getElementById("phno").focus();
			return false;
			
		}		

		if(document.getElementById("adhaar").value=="")
		{
			alert("Enter adhaar ");
			document.getElementById("adhaar").focus();
			return false;
			
		}
		if(document.getElementById("adhaar").value.length<"12")
		{
			alert("Enter valid adhaar number:");
			document.getElementById("adhaar").focus();
			return false;
			
		}
		if(document.getElementById("adhaar").value.length>"12")
		{
			alert("Enter correct adhaar");
			document.getElementById("adhaar").focus();
			return false;
			
		}		

		if(document.getElementById("email").value=="")
		{
			alert("Enter email id");
			document.getElementById("email").focus();
			return false;
			
		}
		var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

     var emailid=document.getElementById("email").value;

     var matchArray = emailid.match(emailPat);

     if (matchArray == null)

    {

               alert("Your Email ID seems incorrect. Enter Correct Email ID.");

               document.getElementById("email").focus();

               return false;
	}
		
		
		if(document.getElementById("password").value=="")
		{
			alert("Enter password");
			document.getElementById("password").focus();
			return false;
			
		}
		if(document.getElementById("conpassword").value=="")
		{
			alert("Enter confirm password");
			document.getElementById("conpassword").focus();
			return false;
			
		}
		if(document.getElementById("conpassword").value!=document.getElementById("conpassword").value)
		{
			alert("passwords mismatch");
			document.getElementById("conpassword").focus();
			return false;
			
		}
		
}
		
</script>

  <?php
include_once("connectivity.php");
$id;

if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phno=$_POST['phno'];
	$address=$_POST['address'];
	$adhaar=$_POST['adhaar'];
	$password=$_POST['password'];
	$conpassword=$_POST['conpassword'];
	if($password==$conpassword)
	{
	$sql=("insert into register(name,address,phno,adhaar,email,password)values('$name','$address','$phno','$adhaar','$email','$password')");
				mysqli_query($connection, $sql);
 
	
	$id=mysqli_insert_id($connection);
session_start();
$_SESSION["id"]=$id;
	echo $id;
	$sqlp=("insert into login(username,password,type,loginid)values('$email','$password','u','$id')");
				mysqli_query($connection, $sqlp);
	header('Location:registrationpage.php');
exit;
		
	}
	}
			mysqli_close($connection);


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="css/regcss.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">		




function valid()
{
	if(document.getElementById("name").value=="")
		{
			alert("Enter name");
			document.getElementById("name").focus();
			return false;
			
		}
		if(document.getElementById("address").value=="")
		{
			alert("Enter address");
			document.getElementById("address").focus();
			return false;
			
		}
		
		
		if(document.getElementById("phno").value.length<"10")
		{
			alert("Enter valid phone number:");
			document.getElementById("phno").focus();
			return false;
			
		}
		if(document.getElementById("phno").value.length>"10")
		{
			alert("Enter correct phno");
			document.getElementById("phno").focus();
			return false;
			
		}		

		if(document.getElementById("adhaar").value=="")
		{
			alert("Enter adhaar ");
			document.getElementById("adhaar").focus();
			return false;
			
		}
		if(document.getElementById("adhaar").value.length<"12")
		{
			alert("Enter valid adhaar number:");
			document.getElementById("adhaar").focus();
			return false;
			
		}
		if(document.getElementById("adhaar").value.length>"12")
		{
			alert("Enter correct adhaar");
			document.getElementById("adhaar").focus();
			return false;
			
		}		

		if(document.getElementById("email").value=="")
		{
			alert("Enter email id");
			document.getElementById("email").focus();
			return false;
			
		}
		var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

     var emailid=document.getElementById("email").value;

     var matchArray = emailid.match(emailPat);

     if (matchArray == null)

    {

               alert("Your Email ID seems incorrect. Enter Correct Email ID.");

               document.getElementById("email").focus();

               return false;
	}
		
		
		if(document.getElementById("password").value=="")
		{
			alert("Enter password");
			document.getElementById("password").focus();
			return false;
			
		}
		if(document.getElementById("conpassword").value=="")
		{
			alert("Enter confirm password");
			document.getElementById("conpassword").focus();
			return false;
			
		}
		if(document.getElementById("conpassword").value!=document.getElementById("conpassword").value)
		{
			alert("passwords mismatch");
			document.getElementById("conpassword").focus();
			return false;
			
		}
		
}
		
</script>

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
  background-image: url("image1.jpg");
  
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
  color: chocolate;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width:500px;
  padding: 18px;

  height: 550px;
}
tr{ line-height: 10px;

}
.error {
    color: #FF0000;
}
</style>

</head>


<body>

    <div class="bg-image">
    </div>
  <div class="bg-text">
  
<div class="bg-img">

<div>
<h4 style="color:#FFF"><center>REGISTRATION FORM</center></h4>
<form name="frmRegistration" method="post" >
<table border="0" height="auto" width="500" align="center" class="demo-table">

<tr>
<td style="color:#FFF">Name</td>
<td><input type="text"  name="name"></td>

</tr>

<tr>
<td style="color:#FFF">Address</td>
<td style="color:#FFF"><textarea name="address" cols="30" rows="5" style="background-color:#333" required></textarea></td>
</tr>
<tr>
<td style="color:#FFF">Contact Number</td>
<td><input type="text" class="demoInputBox" name="phno"  ></td> 
</tr>


<tr>
<td style="color:#FFF">Aadhaar number</td>
<td><input type="text" class="demoInputBox" name="adhaar"  required></td>
</tr>
<tr>
<td style="color:#FFF">Email</td>
<td><input type="text" class="demoInputBox" name="email"  required></td>
</tr>


<tr>
<td style="color:#FFF">Password</td>
<td><input type="password" class="demoInputBox" name="password" value="" required></td>
</tr>
<tr>
<td style="color:#FFF">Confirm Password</td>
<td><input type="password" class="demoInputBox" name="conpassword" value=""required></td>
</tr>


<tr><br>

</tr>
<tr>
  <td style="alignment-baseline: after-edge;">
    <input type="submit" class="btn btn-primary " name="submit" onclick="return valid()";>
</td>
<td align="center">
<input class="btn btn-primary " type="Reset"></button>
</td>
</tr>
</table>

</form>
</div>
</div>
</body>

</html>
