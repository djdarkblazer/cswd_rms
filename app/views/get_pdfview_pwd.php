<?php
$pageTitle = "CSWD | PWD Form";
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $pageTitle ?></title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		body{
			margin: 0;
			padding: 0;
		}  	
		.h-style{
			align-items: center;
			text-align: center;
			display: block;
			margin-top: 10px;
		}
		hr{
			border: 1px solid black;
		}
		.logo-pic{
			float: left;
			margin-left: 50px;
			margin-top: -150px;
		}		
		.id-pic{
			float: right;
			margin-right: 50px;
			border: 2px solid black;
			padding: 3px;
			margin-top: -140px;
		}
		.id-num{
			float: right;
			margin-right: 30px;
			padding: 3px;
			margin-top: -20px;
		}		
		.basicinfo{
			padding-left: 20px;
		}	
		td,th{
			font-size: 80%;
		}			  	
	</style>
</head>
<body onload="window.print()">
	<?php foreach($data as $rows) :?>
		<div class="h-style">
			
			<h6>CALAPAN CITY SOCIAL WELFARE AND DEVELOPMENT</h6>	
			<p>Republic of the Philippines<br>Province of Oriental Mindoro<br>Calapan City</p>
			<h5>PERSONS WITH DISABILITY APPLICATION FORM</h5>
		</div>
		<div class="logo-pic">
			<img src="<?= site_url()?>assets/img/logo.png" height="150" width="150">
		</div>
		<div class="id-pic">
			<img src="<?php echo BASE_URL .'uploads/image/pwd_idpic/'. $rows['image']; ?>" width="120" height="120">
		</div>
		<div class="id-num">
				
		</div>

		<hr>


		<div class="basic-info">
			<table class="table table-bordered " width="100%">
				<tbody>
					<tr>
						<td width="150"><strong>Last Name</strong></td>
						<td> <?= $rows['pwd_lname']?></td>
					</tr>
					<tr>
						<td width="150"><strong>First Name</strong></td>
						<td> <?= $rows['pwd_fname']?></td>
					</tr>
					<tr>
						<td width="150"><strong>Middle Name</strong></td>
						<td> <?= $rows['pwd_mname']?></td>
					</tr>
					<tr>
						<td width="170"><strong>Sex</strong></td>
						<td> <?= $rows['pwd_sex']?></td>
					</tr>					
					<tr>
						<td width="170"><strong>Type of Disability</strong></td>
						<td> <?= $rows['pwd_typedis']?></td>
					</tr>
					<tr>
						<td width="170"><strong>Other Specific Disability</strong></td>
						<td> <?= $rows['pwd_typespecify']?></td>
					</tr>
					<tr>
						<td width="170"><strong>Birthday</strong></td>
						<td> <?= date('M d, Y',strtotime($rows['pwd_dob'])); ?></td>
					</tr>										
					<tr>
						<td width="150"><strong>Cause of Disability</strong></td>
						<td> <?= $rows['pwd_causedis']?></td>
					</tr>
					<tr>
						<td width="250"><strong>Address - Number & Street</strong></td>
						<td> <?= $rows['pwd_address']?></td>
					</tr>
					<tr>
						<td width="150"><strong>Region</strong></td>
						<td> <?= $rows['pwd_region']?></td>
					</tr>
					<tr>
						<td width="170"><strong>City / Municipality</strong></td>
						<td> <?= $rows['pwd_city']?></td>
					</tr>															
					<tr>
						<td width="150"><strong>Barangay</strong></td>
						<td> Brgy.<?= $rows['pwd_brgy']?></td>
					</tr>
					<tr>
						<td width="170"><strong>Landline Number</strong></td>
						<td> <?= $rows['pwd_landline']?></td>
					</tr>	
					<tr>
						<td width="170"><strong>Mobile Number</strong></td>
						<td> <?= $rows['pwd_mobilenum']?></td>
					</tr>
					<tr>
						<td width="170"><strong>Email</strong></td>
						<td> <?= $rows['pwd_email']?></td>
					</tr>
					<tr>
						<td width="170"><strong>Civil Status</strong></td>
						<td> <?= $rows['pwd_civilstatus']?></td>
					</tr>
					<tr>
						<td width="170"><strong>Education Attainment</strong></td>
						<td> <?= $rows['pwd_educational']?></td>
					</tr>
					<tr>
						<td width="170"><strong>Employment Status</strong></td>
						<td> <?= $rows['pwd_empstatus']?></td>
					</tr>
					<tr>
						<td width="170"><strong>Nature of Employee</strong></td>
						<td> <?= $rows['pwd_empnature']?></td>
					</tr>
					<tr>
						<td width="170"><strong>Type of Employee</strong></td>
						<td> <?= $rows['pwd_emptype']?></td>
					</tr>
					<tr>
						<td width="170"><strong>Occupation</strong></td>
						<td> <?= $rows['pwd_occupation']?></td>
					</tr>
					<tr>
						<td width="170"><strong>Contact Person</strong></td>
						<td> <?= $rows['pwd_cperson']?></td>
					</tr>
					<tr>
						<td width="170"><strong>Contact Number</strong></td>
						<td> <?= $rows['pwd_cnumber']?></td>
					</tr>									
				</tbody>
			</table>
		</div>
		<table class="table table-bordered" style="width: 100%">
			<thead>
				<tr class="text-center">
					<th>PWD ID Number: <strong><u><?= $rows['pwd_idnum']?></u></strong></th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="250"><strong>Father's Name:</strong></td>
					<td> <?= $rows['pwdf_lname']?></td>
					<td> <?= $rows['pwdf_fname']?></td>
					<td> <?= $rows['pwdf_mname']?></td>
				</tr>
				<tr>
					<td><strong>Mother's Name:</strong></td>
					<td> <?= $rows['pwdm_lname']?></td>
					<td> <?= $rows['pwdm_fname']?></td>
					<td> <?= $rows['pwdm_mname']?></td>
				</tr>									
				<tr>
					<td><strong>Guardian's Name </strong><sup>(Relationship)</sup></td>
					<td> <?= $rows['pwdg_lname']?></td>
					<td> <?= $rows['pwdg_fname']?></td>
					<td> <?= $rows['pwdg_mname']?></td>	
				</tr>									
				<tr>
					<td><strong>Accomplished By:</strong></td>
					<td> <?= $rows['pwdab_lname']?></td>
					<td> <?= $rows['pwdab_fname']?></td>
					<td> <?= $rows['pwdab_mname']?></td>

				</tr>
				<tr>
					<td><strong>Name of Reporting Unit:</strong></td>
					<td> <?= $rows['pwdru_lname']?></td>
					<td> <?= $rows['pwdru_fname']?></td>
					<td> <?= $rows['pwdru_mname']?></td>

				</tr>																			
			</tbody>
		</table>
		<center>
			<div class="col-4" style="margin-top: 30px">
				<strong><u><?= $rows['pwd_signature']?></u></strong>
				<label for="pwd_signature">Signature Over Printed Name of Applicant</label>				
			</div> 										
		</center>				
	<?php endforeach;?>
</body>
</html>