
<?php 
include('menu.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<link rel="stylesheet" href="css/bootstrap.css" />
<head>
<title> Patient Test-Details </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
 <script>
 function print_report(id)
 {
 if(confirm("Print?"))
 window.location.href='rpt.php?print_report='+id;
 }
 function edit_id(id)
 {
 if(confirm('Edit?'))
 window.location.href='edit_PTD.php?edit_id='+id;
 }
 function delete_id(id)
 {
 if(confirm('Delete?'))
 window.location.href='support_list_PTD.php?delete_id=' +id;
 }
 </script>
 <center>
 <body>
 <table align="center">
 <tr>
 <th> Patient-ID </th>
 <th> Test-Type </th>
 <th> Unit</th>
 <th> Test-Results </th>
 <th> Sample-Number </th>
 <th> Specimen </th>
 <th colspan="3"> Edit/Delete/Print </th>
 </tr>
 <?php
 require('php_mysql.php');
 mysql_select_db('PathologyLab') or die('Error!');
 $sql='SELECT * from PATIENT_TEST_DETAILS';
 $ret=mysql_query($sql);
 while($row= mysql_fetch_assoc($ret))
 {
 ?>
 
 <tr>
 <td> <?php echo $row['Patient_ID']; ?> </td>
 <td> <?php echo $row['Test_Type']; ?> </td>
 <td> <?php echo $row['UNIT']; ?> </td>
 <td> <?php echo $row['Test_Results'] ; ?> </td>
 <td> <?php echo $row['Sample_Number'] ; ?> </td>
 <td> <?php echo $row['Specimen_Code'] ; ?> </td>
 <td align="center"> <a href="javascript:edit_id('<?php echo $row['ID']; ?>')">
 <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </a> </td>
 <td align="center"> <a href="javascript:delete_id('<?php echo $row['ID']; ?>')">
  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> </a> </td>
  <td align="center"> <a href="javascript:print_report('<?php echo $row['ID']; ?>')"> 
 <span class="glyphicon glyphicon-print" aria-hidden="true"> </a> </span></td>
 </tr>
 <?php
 }
 ?>
 <tr>
 <td colspan="9"> <a href="add_PTD.php"> <bold> Add Data </bold> </a> </td>
 </tr>
 </table>
 </body>
 </html>
 

