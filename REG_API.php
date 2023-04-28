<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="mini";
$tbl_name="employee";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
$id=$_GET['id'];
$user=$_GET['uname'];
$pass=$_GET['psw'];
$pno=$_GET['pno'];
    $q="SELECT Username from employee where Username='$user'";
    $cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
    $ret=mysqli_num_rows($cq);
    if($ret>=1)
    {
        echo "User not found";
    }
    else
    {
        $query="INSERT INTO employee(Email,Username,Password,pno) VALUES('$id','$user','$pass',$pno)";
        
        mysqli_query($conn,$query) or die(mysqli_error($conn));
        echo "User Registered";
    }

mysqli_close($conn);

?>

