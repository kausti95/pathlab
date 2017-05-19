<?php
$vname=$_POST['Name']; 
$vadd=$_POST['Address'];
$vphone=$_POST['Phone_Number'];
$vage=$_POST['Age'];
$vblood=$_POST['b_type'];
$vstatus=$_POST['status'];
require('php_mysql.php');
mysql_select_db("PathologyLab") or die("error");
$sql="INSERT into PATIENT_REGISTRATION(Name,Address,PHONE_NUMBER,Age,Blood_Type,Status) VALUES ('$vname','$vadd','$vphone','$vage','$vblood','$vstatus')";
if(mysql_query($sql))
{
?>
<script>
window.alert('Data was inserted');
window.location.href="list_PR.php";
</script>
<?php
}
else
?>
<script> 
alert ('Error');
window.location.href="add_PR.html";

</script>
