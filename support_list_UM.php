<?php
 require('php_mysql.php');
 mysql_select_db('PathologyLab');
 if(isset($_GET['delete_id']))
 {
 $sql='DELETE FROM USER_MASTER where ID='.$_GET['delete_id'];
 $ret=mysql_query($sql);
 Header("Location:list_UM.php");
 }
?>
