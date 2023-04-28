<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="mini";
$tbl_name="administrator";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");

if(isset($_GET['uname']) && isset($_GET['psw']))
{	
	$user=$_GET['uname'];
	$password=$_GET['psw'];
	$ab="SELECT * FROM administrator WHERE Username='$user' and password='$password'";
	$result=mysqli_query($conn,$ab) or die(mysqli_error($conn));
	$cnt=mysqli_num_rows($result);
	if($cnt == true)
	{ 
		$_SESSION['uname']=$user;
		echo "you are sucessfully loged in";
		}
		else 
		{
		echo "WRong Credentials";
		}
	}
	
		ob_end_flush(); 
		?> 
