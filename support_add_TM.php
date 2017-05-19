<?php
$vname=$_POST['Name']; 
$vmachine=$_POST['machine'];

echo $vmachine;

require('php_mysql.php');
mysql_select_db("PathologyLab") or die("error");
$sql="INSERT into TEST_MASTER(Test_Name,Machine_Name) VALUES ('$vname','$vmachine')";
if(mysql_query($sql))
{
?>
<script>
window.alert('Data was inserted');
window.location.href="list_TM.php";
</script>
<?php
}
else
?> 
<script>
alert('Error');
window.location.href="add_TM.php";
</script>
