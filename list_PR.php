
<?php 
include('menu.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<link rel="stylesheet" href="css/bootstrap.css" />
<head>
<title> Patient Details </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
 <script>
 function edit_id(id)
 {
 if(confirm('Edit?'))
 window.location.href='edit_PR.php?edit_id='+id;
 }
 function delete_id(id)
 {
 if(confirm('Delete?'))
 window.location.href='support_list_PR.php?delete_id=' +id;
 }
 </script>
 <center>
 <body>
 <table align="center">
 <tr>
 <th> Name </th>
 <th> Age </th>
 <th> Blood Type </th>
 <th> Registration-Number </th>
 <th> Status </th>
 <th> Address </th>
 <th> Phone-Number </th>
 <th colspan="2"> Edit/Delete </th>
 </tr>
 <?php
 require('php_mysql.php');
 mysql_select_db('PathologyLab') or die('Error!');
 $sql='SELECT * from PATIENT_REGISTRATION';
 $ret=mysql_query($sql);
 while($row= mysql_fetch_assoc($ret))
 {
 ?>
 
 <tr>
 <td> <?php echo $row['Name']; ?> </td>
 <td> <?php echo $row['Age']; ?> </td>
 <td> <?php echo $row['Blood_Type']; ?> </td>
 <td> <?php echo $row['Registration_Number'] ; ?> </td>
 <td> <?php echo $row['Status'] ; ?> </td>
 <td> <?php echo $row['Address'] ; ?> </td>
 <td> <?php echo $row['PHONE_NUMBER'] ; ?> </td>
 <td align="center"> <a href="javascript:edit_id('<?php echo $row['Registration_Number']; ?>')">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </a> </td>
 <td align="center"> <a href="javascript:delete_id('<?php echo $row['Registration_Number']; ?>')">
 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> </a> </td>
 </tr>
 <?php
 }
 ?>
 <tr>
 <td colspan="9"> <a href="add_PR.php"> <bold> Add Data </bold> </a> </td>
 </tr>
 </table>
 </body>
 </html>
 