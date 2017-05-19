<?php
	require('php_mysql.php');
mysql_select_db("PathologyLab");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Report</title>

<link rel="stylesheet" href="css/bootstrap.css" />

<link href="css/basic.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript">     
	function PrintDiv() {    
	   var divToPrint = document.getElementById('print_div');
	   var popupWin = window.open('', '_blank', 'width=300,height=300');
	   popupWin.document.open();
	   popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
		popupWin.document.close();
			}
 </script>
 
</head>

<body >
<div style="float:right;">
<button title="Print Report" type="button"  onclick="PrintDiv();" name="prnt"> <span class="glyphicon glyphicon-print" aria-hidden="true"></span></button>
</div>

<div width="100%" id="print_div" style="text-align:center">	

<br><br>
<h2 align="center" style="text-decoration:underline">PATIENT-REPORT</h2>	

<table width="100%">

		<tr>
				<td>
					<?php
					$sql=mysql_query("SELECT * FROM `PATIENT_TEST_DETAILS` WHERE ID=".$_GET['print_report']);
					if(mysql_num_rows($sql)>0)
					{?>
						<table style="border-style:solid;border-color:#000000;border-width:thin; width:100%">
							<tr style="font-weight:bold;background-color: lightblue;">
								<td colspan="1">Patient-Id</td>
								<td colspan="1">Test-Type</td>
								<td colspan="1">Test-Results</td>
								<td colspan="1">Unit</td>
								<td colspan="1">Sample-Number</td>
								<td colspan="1">Specimen-Code</td>
								
							</tr>
							
							<?php $count=0;?>
					<?php
					
						while($res=mysql_fetch_assoc($sql))
						{	
							if(($count++)%2==0)
							{
								$color='lightcyan';
							}else
							{
								$color='white';
							}
						?>
							<tr style="background-color:<?php echo $color ?>">
							    <td><?php echo $res["Patient_ID"];?></td>
								<td><?php echo $res["Test_Type"];?></td>
								<td><?php echo $res["Test_Results"];?></td>
									<td><?php echo $res["UNIT"];?></td>
										<td><?php echo $res["Sample_Number"];?></td>
											<td><?php echo $res["Specimen_Code"];?></td>
							</tr>
					<?php }?>
						</table>
					<?php
					}else
						{?>	
						<table width="100%">
						<tr>
							<td>No record Found</td>
						</tr>
						</table>
						<?php
						} 
					?>
						
						
						<table align="right" style="font-weight:bold">
							<tr>
								<td>Date :</td><td><?php date_default_timezone_set("Asia/Kolkata"); echo date('d/M/Y ', time()).date("h:i:sa"); ?></td>
							</tr>
						</table>
						
				</td>
			</tr>
			
			
	
</table>
</div>

</body>
</html>
