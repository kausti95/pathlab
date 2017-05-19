<?php 
include('menu.php');
?>
<?php
require('php_mysql.php');
mysql_select_db("PathologyLab");
if(isset($_POST['update_button']))
{ 
 $vvid=$_POST['name'];
$vvtests=$_POST['testn'];
$vvunit=$_POST['unitn'];
$vvdetails=$_POST['details'];
$vvsample=$_POST['sample'];
$vvspecimen=$_POST['specimen'];
$vsql_new="UPDATE PATIENT_TEST_DETAILS SET Test_Type='$vvtests',Patient_Id='$vvid',
Test_Results='$vvdetails',Sample_Number='$vvsample',Specimen_code='$vvspecimen',UNIT='$vvunit' WHERE ID="
.$_GET['edit_id'];
if(mysql_query($vsql_new))
{
?>
<script> 
alert("Data edit was successful");
window.location.href="list_PTD.php";
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
header("Location:list_PTD.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta Page is used to update data to the server >
<title> Update </title>
</head>
<body>
<div align="center">
UPDATE PATIENT's TEST-DETAILS
</div>
<br>
<br>
<div>
<table align="center">
<form method="POST">
<div>
<?if(isset($_GET['edit_id']))
{ ?>
<tr>
<td> Name:
<select  id="name"  name="name"> 
<?php  $mql1='SELECT * from PATIENT_REGISTRATION ';
 $met1=mysql_query($mql1);
while($mow= mysql_fetch_assoc($met1))
 { ?>
<option><?php  echo $mow['Name']; } ?> 
</option> </td>
</tr> </select>
<tr><select  id="tests"  name="tests">
<td> Test performed:
<select  id="testn"  name="testn">
<?php $sql1='SELECT Test_Name from TEST_MASTER';
 $ret1=mysql_query($sql1);
 while($row1=mysql_fetch_assoc($ret1))
 { ?>
<option><?php  echo $row1['Test_Name']; } ?> </option>  </td>
</tr> </select>
<tr>
<?php $qql1='SELECT Test_Results from PATIENT_TEST_DETAILS where ID='.$_GET['edit_id'];
 $qet1=mysql_query($qql1);
 $qow1=mysql_fetch_assoc($qet1); ?>
<td> <input type="text" name="details" placeholder="Test-Results" value="<?php echo $qow1['Test_Results'] ?>" required /> </td>
</tr>
<tr>
<td> Units:
<select  id="unitn"  name="unitn"> 
<?php
$sql2='SELECT Description from UNITS';
 $ret2=mysql_query($sql2);
 while($row2= mysql_fetch_assoc($ret2))
 { ?>
<option><?php  echo $row2['Description']; } ?> </option> </td>
</tr> </select>
<tr>
<?php $qql2='SELECT Sample_Number from PATIENT_TEST_DETAILS where ID='.$_GET['edit_id'];
 $qet2=mysql_query($qql2);
 $qow2=mysql_fetch_assoc($qet2); ?>
<td> <input type="text" name="sample" placeholder="Sample-Number" value="<?php echo $qow2['Sample_Number'] ?>" required /> </td>
</tr>
<tr>
<td> Specimen-Code:
<select  id="specimen"  name="specimen"> 
<?php
$sql3='SELECT Name from SPECIMEN';
 $ret3=mysql_query($sql3);
 while($row3= mysql_fetch_assoc($ret3))
 { ?>
<option><?php  echo $row3['Name']; } ?> </option> </td>
</tr> </select>
<?php } ?> 
<tr>
 <td colspan="2" > <input type="submit" name="update_button" value="Update" />  </td>
 <td colspan="2"> <input type="submit" name="cancel_button" value="Cancel" />  </td>
 </tr>
</form>
</table>
</div>
</div>
</body>
</html>