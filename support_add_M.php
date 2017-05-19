<?php
$vname=$_POST['Name']; 
$vid=$_POST['ID'];
$vdate=$_POST['Date'];
$vcompany=$_POST['Company'];
$vserial=$_POST['Serial'];
require('php_mysql.php');
mysql_select_db("PathologyLab") or die("error");
$sql="INSERT into MACHINE_MASTER(Name,Date_of_Purchase,Company,Serial_Number) VALUES ('$vname','$vdate','$vcompany','$vserial')";
if(mysql_query($sql))
{
?>
<script>
window.alert('Data was inserted');
window.location.href="list_M.php";
</script>
<?php
}
else 
?>
<script>
window.alert('Error');
window.location.href="add_M.html";
</script>
