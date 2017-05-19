<?php
require('php_mysql.php');
$flag= false;
$sql= 'SELECT * FROM USER_MASTER';
mysql_select_db("PathologyLab") or die("error");

$ret= mysql_query($sql) or die("Coulndt run query");


while($row= mysql_fetch_assoc($ret)) 
{
if($_POST['emailid'] == $row['Email_Id'] && $row['Password'] == $_POST['password'])
{
	$flag= true;
break;
}
}
if($flag==true)
{
session_start();
$_SESSION['user_id']=$row['Email_Id'];
header("Location: dashboard.php");
}
else
?>
<script> 
alert("Login failed");
window.location.href="login.html";
</script>
 

