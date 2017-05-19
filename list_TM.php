<?php 
include('menu.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<link rel="stylesheet" href="css/bootstrap.css" />
<head>
<title> Tests </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
 <script>
 function edit_id(id)
 {
 if(confirm('Edit?'))
 window.location.href='edit_TM.php?edit_id='+id;
 }
 function delete_id(id)
 {
 if(confirm('Delete?'))
 window.location.href='support_list_TM.php?delete_id=' +id;
 }
 </script>
 <center>
 <body>
 <table align="center">
 <tr>
 <th> Test-name </th>
 <th> Test-Id </th>
 <th> Machine-used </th>
 <th colspan="2"> Edit/Delete </th>
 </tr>
 <?php
 require('php_mysql.php');
 mysql_select_db('PathologyLab') or die('Error!');
 $sql='SELECT * from TEST_MASTER';
 $ret=mysql_query($sql);
 while($row= mysql_fetch_assoc($ret))
 {
 ?>
 
 <tr>
 <td> <?php echo $row['Test_Name']; ?> </td>
 <td> <?php echo $row['Test_Id']; ?> </td>
 <td> <?php echo $row['Machine_Name']; ?> </td>
 <td align="center"> <a href="javascript:edit_id('<?php echo $row['Test_Id']; ?>')">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
 <td align="center"> <a href="javascript:delete_id('<?php echo $row['Test_Id']; ?>')">
  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> </a> </td>
 </tr>
 <?php
 }
 ?>
 <tr>
 <td colspan="4"> <a href="add_TM.php"> <bold> Add new Data </bold> </a> </td>
 </tr>
 </table>
 </body>
 </html>
 