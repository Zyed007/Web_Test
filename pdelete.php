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
$result=mysqli_query($conn,$sql) or die(mysqli_error($connection));
if(isset($_POST['Submit']))
    {
        $eid=$_POST['eid'];
        $sel="select * from employee where eid='$eid'";
        $cq=mysqli_query($conn,$sel) or die(mysqli_error($conn));
        $ret=mysqli_num_rows($cq);
        if($ret==false)
            {
        echo '<script language="javascript">';
		echo 'alert("projects not exist");';
		echo 'window.location.href="pdelete.php";';
		echo '</script>';    
            }
        else
            {
                $sel="delete from employee where eid='$eid'";
                $cq=mysqli_query($conn,$sel) or die(mysqli_error($conn));
                
        echo '<script language="javascript">';
		echo 'alert("Employee Deleted");';
		echo 'window.location.href="main.php";';
		echo '</script>';   
    }
}
Mysqli_close($conn);
?>


<html>
    <head>
        <body style="background-color:#E5E5E5">
            <title>Delete</title>
    </head>
    <form action=""method="post">
        <table border="0" align="center">
        <tbody>
<tr>
<td><label for="eid">Enter eid to be deleted:</label></td>
<td><input id="eid" maxlength="50" name="eid" type="text" /></td>
</tr>
<tr>
<td align="right"><input name="Submit" type="Submit" value="Delete"/>&nbsp;<input type="reset" onClick="refresh()"></p></td>
</tr>
</tbody>
</table>
</form>
</html>	