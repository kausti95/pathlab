<?php 
include('menu.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title> Index </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.css" />
 </head>
 <script>
 function edit_id(id)
 {
 if(confirm('Edit?'))
 window.location.href='edit_M.php?edit_id='+id;
 }
 function delete_id(id)
 {
 if(confirm('Delete?'))
 window.location.href='support_list_M.php?delete_id=' +id;
 }
 </script>
 <center>
 <body>
 <table align="center" class="table table-striped">
 <tr>
 <th> Name </th>
 <th> Date of Purchase </th>
 <th> Company </th>
 <th> Serial Number <th>
 <th colspan="2"> Edit/Delete </th>
 </tr>
 <?php
 require('php_mysql.php');
 mysql_select_db('PathologyLab') or die('Error!');
 $sql='SELECT Name,ID,Date_of_Purchase,Company,Serial_Number from MACHINE_MASTER';
 $ret=mysql_query($sql);
 while($row= mysql_fetch_assoc($ret))
 {
 ?>
 
 <tr>
 <td> <?php echo $row['Name']; ?> </td>
 <td> <?php echo $row['Date_of_Purchase']; ?> </td>
 <td> <?php echo $row['Company']; ?> </td>
 <td> <?php echo $row['Serial_Number'] ; ?> </td>
 <td align="center"> <a href="javascript:edit_id('<?php echo $row['ID']; ?>')">
 <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> </td>
 <td align="center"> <a href="javascript:delete_id('<?php echo $row['ID']; ?>')">
  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a> </td>
 </tr>
 <?php
 }
 ?>
 <tr>
 <td colspan="6"> <a href="add_M.php"> <bold> Add new Data </bold> </a> </td>
 </tr>
 </table>
 </body>
 </html>
 