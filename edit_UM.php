<?php 
include('menu.php');
?>
<?php
require('php_mysql.php');
mysql_select_db("PathologyLab");

if(isset($_GET['edit_id']))
{
$sql='SELECT FIRST_NAME,LAST_NAME,PHONE,Email_Id,Password FROM USER_MASTER where ID='.$_GET['edit_id'];
$ret=mysql_query($sql);
$row=mysql_fetch_assoc($ret);
}
if(isset($_POST['update_button']))
{
$first_name=$_POST['First_name'];
$last_name=$_POST['Last_name'];
$phone=$_POST['Phone'];
$email=$_POST['Email'];
$pass=$_POST['Pass'];

$sql_new="UPDATE USER_MASTER SET FIRST_NAME='$first_name',LAST_NAME='$last_name',PHONE='$phone',Email_Id='$email',Password='$pass' WHERE ID="
.$_GET['edit_id'];
echo $sql_new;
if(mysql_query($sql_new))
{
?>
<script>
alert("Data edit was successful");
window.location.href="list_UM.php";
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
header("Location:list_UM.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title> Update records </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<center>
<body>
<div>
<form method="POST">
<table align="center">
<tr>
<td><input type="text" name="First_name" placeholder="First Name" value="<?php echo $row['FIRST_NAME']; ?>" required /></td>
 </tr>
<tr>
<td><input type="text" name="Last_name" placeholder="Last Name" value="<?php echo $row['LAST_NAME']; ?>" required /> </td>
</tr>
<tr>
<td> <input type="text" name="Phone" placeholder="Phone Number"value="<?php echo $row['PHONE']; ?>" required /> </td>
</tr>
<tr>
<td> <input type="text" name="Email" placeholder="Email-Id" value="<?php echo $row['Email_Id']; ?>" required /> </td>
</tr>
<tr>
<td><input type="text" name="Pass" placeholder="Password" value="<?php echo $row['Password']; ?>" required /> </td>
</tr>
<tr>
 <td colspan="2" > <input type="submit" name="update_button" value="Update" />  </td>
 <td colspan="2"> <input type="submit" name="cancel_button" value="Cancel" />  </td>
 </tr>
</table>
 </div>

 </body>
 </html>