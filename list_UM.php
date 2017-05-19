
<?php 
include('menu.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<link rel="stylesheet" href="css/bootstrap.css" />
<head>
<title> User Profile </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
 <script>
 function edit_id(id)
 {
 if(confirm('Edit?'))
 window.location.href='edit_UM.php?edit_id='+id;
 }
 function delete_id(id)
 {
 if(confirm('Delete?'))
 window.location.href='support_list_UM.php?delete_id=' +id;
 }
 </script>
 <center>
 <body>
 <table align="center">
 <tr>
 <th> First Name </th>
 <th> Last Name	</th>
 <th> Phone-Number </th>
 <th> Email</th>
 <th> Password </th>
 <th> Edit/Delete </th>
 </tr>
 <?php
 require('php_mysql.php');
 mysql_select_db('PathologyLab') or die('Error!');
 session_start();
 $sql='SELECT * from USER_MASTER where Email_Id='.'\''.$_SESSION['user_id'].'\'';
 $ret=mysql_query($sql);
 while($row= mysql_fetch_assoc($ret))
 {
 ?>
 
 <tr>
 <td> <?php echo $row['FIRST_NAME']; ?> </td>
 <td> <?php echo $row['LAST_NAME']; ?> </td>
 <td> <?php echo $row['PHONE']; ?> </td>
 <td> <?php echo $row['Email_Id'] ; ?> </td>
 <td> <?php echo $row['Password'] ; ?> </td>
 <td align="center"> <a href="javascript:edit_id('<?php echo $row['ID']; ?>')">
 <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </a> </td>
 <td align="center"> <a href="javascript:delete_id('<?php echo $row['ID']; ?>')">
  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> </a> </td>
 </tr>
 <?php
 }
 ?>
 </table>
 </body>
 </html>
 