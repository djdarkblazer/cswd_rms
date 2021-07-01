<?php
	$pageTitle = "CSWD | Solo Parent Form";
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
  		margin-top: 2px;
  	}
  	hr{
  		border: 1px solid black;
  	}
  	.id-pic{
  		float: right;
  		margin-right: 50px;
  		border: 2px solid black;
  		padding: 3px; 
  	}
  	.basicinfo{
  		padding-left: 20px;
  	}
  	.footer{
  		text-align: justify;
  		margin-left: 20px;
  		margin-right: 20px;
  		margin-top: 50px;
  	}
  	.signature{
  		margin-top: 50px;
  	}
  </style>
</head>
<body>
	<div class="h-style">
		<img src="<?= site_url()?>assets/img/logo.png" height="70px" width="70px">
		<h5>CALAPAN CITY SOCIAL WELFARE AND DEVELOPMENT</h5>	
		<p>Republic of the Philippines<br>Province of Oriental Mindoro<br>Calapan City</p>
	</div>
	<hr>
	<div class="id-pic">
		<img src="<?= site_url()?>assets/dist/img/avatar.png" alt="idpicture" height="150" width="150">
	</div>
	<?php foreach($data as $rows) :?>
	<div class="basicinfo">
		<div class="form-group" style="display: flex;">
		<h6 style="margin-right: 100px; ">Name: <?= $rows['sp_fullname']?></h6>
		<h6 style="margin-right: 100px;">Age: <?= $rows['sp_age']?></h6>
		<h6 style="margin-right: 50px;">Sex: <?= $rows['sp_sex']?></h6>
		</div>
		<div class="form-group" style="display: flex;">
		<h6 style="margin-right: 100px;">Address: <?= $rows['sp_address']?></h6>
		<h6>Place of Birth: <?= $rows['sp_pob']?></h6>
		</div>
		<h6>Highest Educational Attainment: <?= $rows['sp_educational']?></h6>
				<br>
		<div class="form-group" style="display: flex;">
		<h6 style="margin-right: 300px;">Occupation: <?= $rows['sp_occupation']?></h6>

		<h6>Monthly Income: ₱<?= $rows['sp_monthlyincome']?></h6>
		</div>

	</div>
	<br>
	<h5 style="margin-left: 10px;">I. Family Composition</h5>
		<table class="table table-bordered" width="100%">
			<thead>
				<tr style="text-align: center;">
					<th>Name</th>
					<th>Relationship</th>
					<th>Age</th>
					<th>Status</th>
					<th>Date of Birth</th>
					<th>Educational Attainment</th>
					<th>Occupataion</th>
					<th>Monthly Income</th>
				</tr>
			</thead>
			<tbody>
				<tr style="text-align: center;">
					<td><?= $rows['spfc_fullname']?></td>
					<td><?= $rows['spfc_relationship']?></td>
					<td><?= $rows['spfc_age']?></td>
					<td><?= $rows['spfc_status']?></td>
					<td><?= $rows['spfc_dob']?></td>
					<td><?= $rows['spfc_educational']?></td>
					<td><?= $rows['spfc_occupation']?></td>
					<td><?= $rows['spfc_monthlyincome']?></td>
				</tr>
				<tr style="text-align: center;">
					<td><?= $rows['spfc_fullname_two']?></td>
					<td><?= $rows['spfc_relationship_two']?></td>
					<td><?= $rows['spfc_age_two']?></td>
					<td><?= $rows['spfc_status_two']?></td>
					<td><?= $rows['spfc_dob_two']?></td>
					<td><?= $rows['spfc_educational_two']?></td>
					<td><?= $rows['spfc_occupation_two']?></td>
					<td><?= $rows['spfc_monthlyincome_two']?></td>
				</tr>
				<tr style="text-align: center;">
					<td><?= $rows['spfc_fullname_three']?></td>
					<td><?= $rows['spfc_relationship_three']?></td>
					<td><?= $rows['spfc_age_three']?></td>
					<td><?= $rows['spfc_status_three']?></td>
					<td><?= $rows['spfc_dob_three']?></td>
					<td><?= $rows['spfc_educational_three']?></td>
					<td><?= $rows['spfc_occupation_three']?></td>
					<td><?= $rows['spfc_monthlyincome_three']?></td>
				</tr>
				<tr style="text-align: center;">
					<td><?= $rows['spfc_fullname_four']?></td>
					<td><?= $rows['spfc_relationship_four']?></td>
					<td><?= $rows['spfc_age_four']?></td>
					<td><?= $rows['spfc_status_four']?></td>
					<td><?= $rows['spfc_dob_four']?></td>
					<td><?= $rows['spfc_educational_four']?></td>
					<td><?= $rows['spfc_occupation_four']?></td>
					<td><?= $rows['spfc_monthlyincome_four']?></td>
				</tr>
				<tr style="text-align: center;">
					<td><?= $rows['spfc_fullname_five']?></td>
					<td><?= $rows['spfc_relationship_five']?></td>
					<td><?= $rows['spfc_age_five']?></td>
					<td><?= $rows['spfc_status_five']?></td>
					<td><?= $rows['spfc_dob_five']?></td>
					<td><?= $rows['spfc_educational_five']?></td>
					<td><?= $rows['spfc_occupation_five']?></td>
					<td><?= $rows['spfc_monthlyincome_five']?></td>
				</tr>																							
			</tbody>
		</table>
		<p style="margin-left: 10px;">*Include family members and other members of the household</p>
		<br>
	<h5 style="margin-left: 10px;">II. Classification/Circumstances of Being a Solo Parent</h5>
	<h6 style="margin-left: 10px;">Current Status: <?= $rows['sp_curr_status']?></h6>
	<br>
	<p style="margin-left: 10px; border: 1px solid black" ><?= $rows['sp_circumstances']?></p>
	<br>
	<h5 style="margin-left: 10px;">III. Needs/Problems of the Solo Parent</h5>
	<p style="margin-left: 10px; border: 1px solid black" ><?= $rows['sp_problems']?></p>
	<br>
	<h5 style="margin-left: 10px;">IV. Family Resources</h5>
	<p style="margin-left: 10px; border: 1px solid black" ><?= $rows['sp_family_resources']?></p>

	<div class="footer">
		<strong>
			<p>I hereby certify that the information given aboeve are true and correct. I further understand that any misinterpretation that may have made will subject me to criminal and civil liabilities provided for by existing laws.</p>
		</strong>
	</div>
	<div class="container signature">

		<h6 style="float: left;"><?= $rows['curr_date']?><br><br>Date</h6>	
			
	</div>
	<div class="container">
		<h6 style="float: right"><?= $rows['sp_signature']?><br><br>Signature/Thumb mark over<br>Printed Name </h6>
	</div>
<?php endforeach;?>
</body>
</html>