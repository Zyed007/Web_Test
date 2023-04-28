<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="mini";
$tbl_name="employee";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
$select_db=mysqli_select_db($conn,$db_name)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysql_error($conn));
$count=mysqli_num_rows($result);
$data=array();
while($row=mysqli_fetch_assoc($result))
{
    {
            $data[]= $row;        
    }
}
echo "<pre>";
echo print_r($data);
echo "<pre>";
?>
