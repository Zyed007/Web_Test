<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="mini";
$tbl_name="administrator";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
$user = $_SESSION['uname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="css/staff.css">
    
</head>
<body class="home" >
	<h1 class="a"  >Welcome <?php echo $user ?>  </h1>
	<h1 ALIGN="center">Modify  Details</h1>
			<div ALIGN="center" class="buttons">
			<ul>
					
					<li><a href="consign.html">Employee Register</a></li>
					<li><a href="pdisplay.php">Employee Details</a></li>
					<li><a href="pupdate.php">Employee Update</a></li>
					<li><a href="pdelete.php">Employee Delete</a></li>
					<li><a href="admin.php">LOGOUT</a></li>
				</ul>
			</div>
	
</body>
</html>