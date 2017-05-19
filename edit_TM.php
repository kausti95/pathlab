<?php 
include('menu.php');
?>
<?php
require('php_mysql.php');
mysql_select_db("PathologyLab");

if(isset($_GET['edit_id']))
{
$sql='SELECT * FROM TEST_MASTER where Test_Id='.$_GET['edit_id'];
$ret=mysql_query($sql);
$row=mysql_fetch_assoc($ret);
}
if(isset($_POST['update_button']))
{
$name=$_POST['Name'];
$date=$_POST['machine'];

$sql_new="UPDATE TEST_MASTER SET Test_Name='$name',Machine_Name='$date' WHERE Test_Id=".$_GET['edit_id'];
if(mysql_query($sql_new))
{
?>
<script>
alert("Data edit was successful");
window.location.href="list_TM.php";
</script>
<?php
}
else 
{
?>
<script>
alert("Error!");
</script>
<?php
}
}
if(isset($_POST['cancel_button']))
{
header("Location:list_TM.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title> Edit data </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<center>
<body>
<div>
<form method="POST">
<table align="center">
<tr>
<td> <input type="text" name="Name" placeholder="Name" value="<?php echo $row['Test_Name']; ?>" required /></td>
 </tr>
 <tr>
<td> Machine-Used:
<select  id="machine"  name="machine"> 
<?php  $sql_newer='SELECT Name FROM MACHINE_MASTER';
$ret_new=mysql_query($sql_newer);
while($row_new= mysql_fetch_assoc($ret_new))
 { ?>
<option value="<?php  echo $row_new['Name']; ?>"><?php  echo $row_new['Name']; } ?> </option> </td>
</tr></select>
<tr>
 <td colspan="2" > <input type="submit" name="update_button" value="Update" />  </td>
 <td colspan="2"> <input type="submit" name="cancel_button" value="Cancel" />  </td>
 </tr>
</table>
 </div>

 </body>
 </html>