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
<h1> ADD A NEW MACHINE </h1>
</div>
<br>
<br>
<div>
<table align="center">
<tr>
<td align="right"> <a href="list_M.php" class="btn btn-primary btn-lg btn-block">Return to Home Page </a> </td>
</tr>
<form action="support_add_M.php" method="POST">
<div>
<tr>
<td><input type="text" name="Name" placeholder="First Name" required /></td>
    </tr>
<tr>
<td><input type="text" name="ID" placeholder="ID" required /> </td>
</tr>
<tr>
<td> <input type="text" name="Date" placeholder="Date of Purchase" required /> </td>
</tr>
<tr>
<td> <input type="text" name="Company" placeholder="Company" required /> </td>
</tr>
<tr>
<td><input type="text" name="Serial" placeholder="Serial Number" required /> </td>
</tr>
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























