<?php
include('menu.php');
require('php_mysql.php');
mysql_select_db("PathologyLab");
?>

<html>
<body>
<style type="text/css">
.shape{    
	border-style: solid; border-width: 0 70px 40px 0; float:right; height: 0px; width: 0px;
	-ms-transform:rotate(360deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(360deg); /* Safari and Chrome */
	transform:rotate(360deg);
}
.offer{
	background:#fff; border:1px solid #ddd; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: 15px 0; overflow:hidden;
}
.offer:hover {
    -webkit-transform: scale(1.1); 
    -moz-transform: scale(1.1); 
    -ms-transform: scale(1.1); 
    -o-transform: scale(1.1); 
    transform:rotate scale(1.1); 
    -webkit-transition: all 0.4s ease-in-out; 
-moz-transition: all 0.4s ease-in-out; 
-o-transition: all 0.4s ease-in-out;
transition: all 0.4s ease-in-out;
    }
.shape {
	border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-radius{
	border-radius:7px;
}
.offer-danger {	border-color: #d9534f; }
.offer-danger .shape{
	border-color: transparent #d9534f transparent transparent;
}
.offer-success {	border-color: #5cb85c; }
.offer-success .shape{
	border-color: transparent #5cb85c transparent transparent;
}
.offer-default {	border-color: #999999; }
.offer-default .shape{
	border-color: transparent #999999 transparent transparent;
}
.offer-primary {	border-color: #428bca; }
.offer-primary .shape{
	border-color: transparent #428bca transparent transparent;
}
.offer-info {	border-color: #5bc0de; }
.offer-info .shape{
	border-color: transparent #5bc0de transparent transparent;
}
.offer-warning {	border-color: #f0ad4e; }
.offer-warning .shape{
	border-color: transparent #f0ad4e transparent transparent;
}

.shape-text{
	color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
	-ms-transform:rotate(30deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(30deg); /* Safari and Chrome */
	transform:rotate(30deg);
}	
.offer-content{
	padding:0 20px 10px;
}
@media (min-width: 487px) {
  .container {
    max-width: 750px;
  }
  .col-sm-6 {
    width: 50%;
  }
}
@media (min-width: 900px) {
  .container {
    max-width: 970px;
  }
  .col-md-4 {
    width: 33.33333333333333%;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1170px;
  }
  .col-lg-3 {
    width: 25%;
  }
  }
}
</style>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-success">
				<div class="shape">
					<div class="shape-text">
						top								
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Machines
					</h3>						
					<p>Number of Machines available:
					<?php
					$sql="SELECT COUNT(*) AS NOM FROM MACHINE_MASTER";
					$ret=mysql_query($sql);
					$row=mysql_fetch_assoc($ret); 
						?>
						<br>
						<?php echo $row['NOM'];?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-radius offer-primary">
				<div class="shape">
					<div class="shape-text">
						top								
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Patients
					</h3>						
					<p>Number of Patients:
					<?php
					$sql="SELECT COUNT(*) AS NOM FROM PATIENT_REGISTRATION";
					$ret=mysql_query($sql);
					$row=mysql_fetch_assoc($ret); 
						?>
						<br>
						<?php echo $row['NOM'];?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-warning">
				<div class="shape">
					<div class="shape-text">
						top							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Tests
					</h3>						
					<p>Number of Tests performed:
					<?php
					$sql="SELECT COUNT(*) AS NOM FROM MACHINE_MASTER";
					$ret=mysql_query($sql);
					$row=mysql_fetch_assoc($ret); 
						?>
						<br>
						<?php echo $row['NOM'];?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-radius offer-danger">
				<div class="shape">
					<div class="shape-text">
						top							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Users
					</h3>						
					<p>Number of Users registered:
					<?php
					$sql="SELECT COUNT(*) AS NOM FROM MACHINE_MASTER";
					$ret=mysql_query($sql);
					$row=mysql_fetch_assoc($ret); 
						?>
						<br>
						<?php echo $row['NOM'];?>
					</p>
				</div>
			</div>
		</div>	
	</div>
</div>
</body>
</html>
