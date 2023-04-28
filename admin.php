<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="mini";
$tbl_name="administrator";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");

if(isset($_POST['uname']) && isset($_POST['psw']))
{	
	$user=$_POST['uname'];
	$password=$_POST['psw'];
	$ab="SELECT * FROM administrator WHERE Username='$user' and password='$password'";
	$result=mysqli_query($conn,$ab) or die(mysqli_error($conn));
	$cnt=mysqli_num_rows($result);
	if($cnt == true)
	{ 
		$_SESSION['uname']=$user;
		header('Location:main.php');
		}
		else 
		{
		echo '<script language="javascript">';
		echo 'alert("Wrong Credentials Entered");';
		echo 'window.location.href="admin.php";';
		echo '</script>';
		}
	}
	
		ob_end_flush(); 
		?> 

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<link rel="stylesheet" type="text/css" href="css/reg.css">
<title>Home</title>
<div  class="img2" style="background-image: url('images/bg-01.jpg');">
  <div class="container">
    <h1 ALIGN="center">Admin Login</h1>
    <p ALIGN="center">Please Enter your credentials</p>
    <hr>
    <div class="m">
 
<form name="login"  action="" method="POST">
    <div class="b">
   <label for="uname"><b class="b">Username</b></label>
    <input type="text" placeholder="Enter username" name="uname" required>
  </br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
</br>
</div>
    <button type="submit" class="registerbtn">Login</button>
  </div>
</form>
</div>
  <div class="container signin">
    <p>New User Sign Up..!!! <a href="si.html">Sign in</a>.</p>
      </div>
</div>

</body>
</html>
