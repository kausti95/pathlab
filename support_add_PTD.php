<?php 
require('php_mysql.php');
 mysql_select_db('PathologyLab') or die('Error!');
 $sql='SELECT Registration_Number from PATIENT_REGISTRATION WHERE Name='.'\''.$_POST['name'].'\'';
 $vid=mysql_query($sql);
$vtests=$_POST['tests'];
$vunit=$_POST['unit'];
$vdetails=$_POST['details'];
$vsample=$_POST['sample'];
$vspecimen=$_POST['specimen'];
$sql1="INSERT into PATIENT_TEST_DETAILS(Patient_ID,Test_Type,Test_Results,UNIT,Sample_Number,Specimen_Code) VALUES ('$vid','$vtests','$vdetails','$vunit','$vsample','$vspecimen')";
if(mysql_query($sql1))
{
?>
<script>
window.alert('Data was inserted');
window.location.href="list_PTD.php";
</script>
<?php
}
else
?>
<script>
alert ("Error!");
window.location.href="add_PTD.php";
</script>