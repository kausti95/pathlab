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
<h1> ADD A NEW PATIENT </h1>
</div>
<div>
<table align="center">
<tr>
<td align="center"><a href="list_PR.php" >Return to Home Page </a> </td>
<br>
<br>
</tr>
<form action="support_add_PR.php" method="POST">
<div>
<tr>
<td><input type="text" name="Name" placeholder="Name" required /></td>
    </tr>
<tr>
<td><input type="text" name="Age" placeholder="Age" required /> </td>
</tr>
<tr>
<td> <input type="text" name="Address" placeholder="Address" required /> </td>
</tr>
<tr>
<td> <input type="text" name="Phone_Number" placeholder="Phone-Number" required /> </td>
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























