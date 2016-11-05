<?php
include("data.php");
if(isset($_POST['submit']))
{
session_start();
$vehicle_no = $_POST["vehicle_no"];
$license_no = $_POST["license_no"];

$sql = "select * from license,vehicle where License_no ='".$name."' and  Vehicle_no ='".$vehicle_no."' ";
$result=mysql_query($sql);
$count = mysqli_num_rowsows($result);
if($count==1)
{    
     while($row=mysqi_fetch_row($result))
    {    
                   $_SESSION['License_no'] = $_POST['Vehicle_no'];
            header("C:\wamp\www\TOW\data.php");
       }
}
else
{
    header("C:\wamp\www\TOW\data.php");
}
}
?>				