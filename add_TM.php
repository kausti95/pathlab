<?php
require('php_mysql.php');
 mysql_select_db('PathologyLab');
 $sql='SELECT Name FROM MACHINE_MASTER';
  $ret=mysql_query($sql);

?>
<?php 
include('menu.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta Page is used to add data to the server >
<title> Insert </title>
</head>
<body>
<div align="center">
<h1>ADD A NEW TEST</h1>
</div>
<br>
<br>
<div>
<table align="center">
<tr>
<td align="right"> <a href="list_TM.php">Return to Home Page </a> </td>
</tr>
<form action="support_add_TM.php" method="POST">
<div>
<tr>
<td><input type="text" name="Name" placeholder="Test-Name" required /></td>
    </tr>
<tr>
<td> Machine-Used:
<select  id="machine"  name="machine"> 
<?php while($row= mysql_fetch_assoc($ret))
 { ?>
<option value="<?php  echo $row['Name']; ?>"><?php  echo $row['Name']; } ?> </option> </td>
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























