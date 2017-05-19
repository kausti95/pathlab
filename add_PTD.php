<?php 
include('menu.php');
?>
 <?php
 require('php_mysql.php');
 mysql_select_db('PathologyLab') or die('Error!');
 $sql='SELECT Name from PATIENT_REGISTRATION';
 $ret=mysql_query($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta Page is used to add data to the server >
<title> Insert </title>
</head>
<body>
<div align="center">
<h1> ADD A NEW PATIENT's TEST-DETAILS </h1>
</div>
<br>
<br>
<div>
<table align="center">
<tr>
<td align="right"> <a href="list_PTD.php">Return to Home Page </a> </td>
</tr>
<form action="support_add_PTD.php" method="POST">
<div>
<tr>
<td> Name:
<select  id="name"  name="name"> 
<?php while($row= mysql_fetch_assoc($ret))
 { ?>
<option value="<?php  echo $row['Name']; ?>"><?php  echo $row['Name']; } ?> </option> </td>
</tr> </select>
<tr>
<td>Test performed: <select  id="tests"  name="tests"> 
<?php $sql1='SELECT Test_Name from TEST_MASTER';
 $ret1=mysql_query($sql1);
 while($row1=mysql_fetch_assoc($ret1))
 { ?>
<option value="<?php echo $row1['Test_Name']; ?>"><?php  echo $row1['Test_Name']; } ?> </option>  </td>
</tr> </select>
<tr>
<td> <input type="text" name="details" placeholder="Test-Details" required /> </td>
</tr>
<tr>
<td> Units:
<select  id="unit"  name="unit"> 
<?php
$sql2='SELECT Description from UNITS';
 $ret2=mysql_query($sql2);
 while($row2= mysql_fetch_assoc($ret2))
 { ?>
<option value="<?php  echo $row2['Description']; ?>"><?php  echo $row2['Description']; } ?> </option> </td>
</tr> </select>
<tr>
<td> <input type="text" name="sample" placeholder="Sample-Number" required /> </td>
</tr>
<tr>
<td> Specimen-Code:
<select  id="specimen"  name="specimen"> 
<?php
$sql3='SELECT Name from SPECIMEN';
 $ret3=mysql_query($sql3);
 while($row3= mysql_fetch_assoc($ret3))
 { ?>
<option value="<?php  echo $row3['Name']; ?>"><?php  echo $row3['Name']; } ?> </option> </td>
</tr> </select>
<tr>
<td><input type="submit" name="save_button" value="SAVE" /> </td>
</tr>
</form>
</table>
</div>
</div>
<!-- *Validation*
<script>
function validate()
{
var x=document.myform.name.value;
if(isNaN(x)==false)
{return false;
window.alert("Not a valid input");
}
if(
-->
</body>
</html>























