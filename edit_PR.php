<?php 
include('menu.php');
?>
<?php
require('php_mysql.php');
mysql_select_db("PathologyLab");
echo $_GET['edit_id'];
if(isset($_GET['edit_id']))
{
$sql='SELECT * FROM PATIENT_REGISTRATION where Registration_Number='.$_GET['edit_id'];

$ret=mysql_query($sql);
$row=mysql_fetch_assoc($ret);
}
if(isset($_POST['update_button']))
{
$name=$_POST['Name'];
$age=$_POST['Age'];
$phone=$_POST['Phone_Number'];
$address=$_POST['Address'];
$status=$_POST['status'];
$btype=$_POST['b_type'];

$sql_new="UPDATE PATIENT_REGISTRATION SET Name='$name',Age='$age',PHONE_NUMBER='$phone',Address='$address',Status='$status',Blood_Type='$btype' WHERE ID="
.$_GET['edit_id'];
if(mysql_query($sql_new))
{
?>
<script>
alert("Data edit was successful");
window.location.href="list_PR.php";
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
header("Location:list_PR.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title> Update Records </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<center>
<body>
<div>
<form method="POST">
<table align="center">
<tr>
<td> <input type="text" name="Name" placeholder="Name" value="<?php echo $row['Name']; ?>" required /></td>
    </tr>
<tr>
<td><input type="text" name="Age" placeholder="Age" value="<?php echo $row['Age']; ?>"  required /> </td>
</tr>
<tr>
<td> <input type="text" name="Address" placeholder="Address" value="<?php echo $row['Address']; ?>" required /> </td>
</tr>
<tr>
<td> <input type="text" name="Phone_Number" placeholder="Phone-Number" value="<?php echo $row['PHONE_NUMBER']; ?>" required /> </td>
</tr>
<tr>
<td> Blood-Type:
<input type="radio" name="b_type" value="A+" required />A+ 
<input type="radio" name="b_type" value="A-" required />A- 
<input type="radio" name="b_type" value="B+"  required />B+ 
<input type="radio" name="b_type" value="B-" required />B- 
<input type="radio" name="b_type" value="O+" required />O+
<input type="radio" name="b_type" value="O-" required />O-
<input type="radio" name="b_type" value="AB+" required />AB+ 
<input type="radio" name="b_type" value="AB-" required />AB- 
</td> 
</tr>
<tr>
<td> Status:
<input type="radio" name="status" value="A+" required />Scheduled 
<input type="radio" name="status" value="B+" required />Active
<input type="radio" name="status" value="A+" required />Report-Generated </td>
</tr>

<tr>
 <td colspan="2" > <input type="submit" name="update_button" value="Update" />  </td>
 <td colspan="2"> <input type="submit" name="cancel_button" value="Cancel" />  </td>
 </tr>
</table>
 </div>

 </body>
 </html>