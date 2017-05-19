<?php 
include('menu.php');
?>
<?php
require('php_mysql.php');
mysql_select_db("PathologyLab");

if(isset($_GET['edit_id']))
{
$sql='SELECT * FROM MACHINE_MASTER where ID='.$_GET['edit_id'];
$ret=mysql_query($sql);
$row=mysql_fetch_assoc($ret);
}
if(isset($_POST['update_button']))
{
$name=$_POST['Name'];
$id=$_POST['ID'];
$date=$_POST['Date'];
$company=$_POST['Company'];
$srno=$_POST['Serial'];

$sql_new="UPDATE MACHINE_MASTER SET Name='$name',ID='$id',Date_of_Purchase='$date',Company='$company',Serial_Number='$srno' WHERE ID="
.$_GET['edit_id'];
if(mysql_query($sql_new))
{
?>
<script>
alert("Data edit was successful");
window.location.href="list_M.php";
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
header("Location:list_M.php");
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
<td><input type="text" name="Name" placeholder="First Name" value="<?php echo $row['Name']; ?>" required /></td>
 </tr>
<tr>
<td><input type="text" name="ID" placeholder="ID" value="<?php echo $row['ID']; ?>" required /> </td>
</tr>
<tr>
<td> <input type="text" name="Date" placeholder="Date of Purchase"value="<?php echo $row['Date_of_Purchase']; ?>" required /> </td>
</tr>
<tr>
<td> <input type="text" name="Company" placeholder="Company" value="<?php echo $row['Company']; ?>" required /> </td>
</tr>
<tr>
<td><input type="text" name="Serial" placeholder="Serial Number" value="<?php echo $row['Serial_Number']; ?>" required /> </td>
</tr>
<tr>
 <td colspan="2" > <input type="submit" name="update_button" value="Update" />  </td>
 <td colspan="2"> <input type="submit" name="cancel_button" value="Cancel" />  </td>
 </tr>
</table>
 </div>

 </body>
 </html>