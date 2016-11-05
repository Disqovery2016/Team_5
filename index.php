<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

    <title>TRAFFY</title>

<script type="text/javascript">
function change(){
    
    var lno = document.getElementById("lno").value;
    var vno = document.getElementById("vno").value;
    //alert(uname);
    if(lno === "")
    {    
        document.getElementById('u').innerHTML = 'Plese Enter lno';
    }
    else
    {
        document.getElementById('u').innerHTML = '';
    }
}
function changep(){
       var vno = document.getElementById("vno").value;
    if(vno === "")
    {
        document.getElementById('p').innerHTML = 'Plese enter vno';
    }
    else
    {
        document.getElementById('p').innerHTML = '';
    }
}
</script>
</head>
<body><center>
        <form action="find.html" method="post">
<table width="503" height="117" border="0">
  <tr>
    <td width="117">l no</td>
    <td width="160"><input type="text" id="lno" name="lno" onblur="change()"/></td>
    <td width="260"><label id="u"> </label></td>
  </tr>
  <tr>
    <td>v no</td>
    <td><input type="vno" name="vno" id="vno" onblur="changep()" /></td>
    <td width="260"><label id="p"> </label></td>
  </tr>
   <tr>
    <td><input type="reset"  /></td>
    <td><input type="submit" value="submit" id="submit"  name="submit"/>
    
    </td>
  </tr>
</table>
</form>
</center>
<?php  
include("data.php");

if(isset($filter_input['submit']))
{
session_start();
$vno = $filter_input["vno"];
$lno = $filter_input["lno"];

$sql = "select * from license,vehicle where License_no ='".$lno."' and  Vehicle_no ='".$vno."' ";
$result= mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($count===1)
{    
     while($row=mysqi_fetch_row($result))
    {    
                   $_SESSION['License_no'] = $filter_input['Vehicle_no'];
            header("C:\wamp\www\TOW\data.php");
       }
}
else
{
    header("C:\wamp\www\TOW\data.php");
}
}

?>  
</body>
</html>				




