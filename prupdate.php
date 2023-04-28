<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="mini";
$tbl_name="employee";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
$select_db=mysqli_select_db($conn,$db_name) or die (mysqli_error($conn));
$ab=$_POST['eid'];
if(isset($_POST['update']))
    {
        $eid=$_POST['eid'];
        $email=$_POST['Email'];
        $user=$_POST['Username'];
        $password=$_POST['password'];
        $pno=$_POST['pno'];
        $res2="UPDATE $tbl_name set eid='$eid',Email='$email', Username='$user', password='$password', pno='$pno' where eid='$eid'";
        $result=mysqli_query($conn,$res2) or die (mysqli_error($conn));
        header("Location:disp1.php");
    }
?>

<?php
$ab1=$_POST['eid'];
$res1="select * from $tbl_name where eid='$ab1'";
$result1=mysqli_query($conn,$res1) or die (mysqli_error($conn));
$cn=mysqli_num_rows($result1);
if($cn==false)
    {
        header("Location:dsn1.php");
    }
else
    {
        while($row=mysqli_fetch_array($result1))
        {
            $eid=$row['EID'];
            $email=$row['Email'];
            $user=$row['Username'];
            $password=$row['password'];
            $pno=$row['pno'];
        }
    }   
?>

<html>
    <head>
        <title>Update data</title>
        <link rel="stylesheet" type="text/css" href="css/reg.css">
    </head>
    <body>
    <div class="container">
    <h1 ALIGN="center">Update</h1>
    <p ALIGN="center">Update The Employee Details.</p>
        <br/><br/>
        <form name="form1" method="post" action="">
        <div class="m">    
        
                
                    <label for="eid"><b>EID</b></label>
                    <input type="text" name="eid" value="<?php echo $eid;?>" >
                    <br>                
                
                    <label for="Email"><b>Email ID</b></label>
                    <input type ="text" name="Email" value="<?php echo $email;?>" >
                    <br>
                
                    <label for="Username"><b>Username</b></label>
                    <input type ="text" name="Username" value="<?php echo $user;?>" >
                    <br>

                    <label for="password"><b>Password</b></label>
                    <input type ="text" name="password" value="<?php echo $password;?>" >
                    <br>
                
                    <label for="pno"><b>PhoneNo</b></label>
                    <input type ="text" name="pno" value="<?php echo $pno;?>" >
                    <br>

                    
                    <button name="update" type="submit" class="registerbtn" value="Update">Update</button>
                    </div>
        </form>
        
    </body>
</html>