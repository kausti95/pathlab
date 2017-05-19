<?php
require('php_mysql.php');
$sql= 'SELECT Name,Date_of_Purchase,Company,Serial_Number FROM MACHINE_MASTER'; 
mysql_select_db("PathologyLab") or die("error");
$ret= mysql_query($sql) or die("Coulndt run query");
while($row= mysql_fetch_assoc($ret)) {
	
//	echo {$row['Name']}. {$row['ID']} . {$row['Date_of_Purchase']} ;
echo $row['Name']."<br>"
     .$row['Company']."<br>";
}	

?>   