<?php
$pageTitle = "CSWD | PMC Form";
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $pageTitle.'_'.date('M d, Y') ?></title>

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
			<h5>CONDUCT OF PRE-MARRIAGE COUNSELING FORM</h5>
		</div>
		<div class="logo-pic">
			<img src="<?= site_url()?>assets/img/logo.png" height="150" width="150">
		</div>
		<hr>
		<div class="basic-info">
			<h5>Bride's Information</h5>
			<div class="form-group" style="display: flex;">
				<p style="margin-left: 50px;"><strong>Full Name:</strong><br><?= $rows['pmc_fname'].' '.$rows['pmc_mname'].' '.$rows['pmc_lname']?></p>
				<p style="margin-left: 50px;"><strong>Sex:</strong><br><?= $rows['pmc_sex']?></p>

				<p style="margin-left: 50px;"><strong>Date of Birth:</strong><br><?= date('F d, Y',strtotime($rows['pmc_dob']))?></p>
				<p style="margin-left: 50px;"><strong>Place of Birth:</strong><br><?= $rows['pmc_pob']?></p>
				<p style="margin-left: 50px;"><strong>Occupation:</strong><br><?= $rows['pmc_occupation']?></p>
				<p style="margin-left: 50px;"><strong>Estimated Monthly Income:</strong><br>₱<?= $rows['pmc_estimatedincome']?></p>
			</div>			
		</div>
		<div class="basic-info">
			<h5>Groom's Information</h5>
			<div class="form-group" style="display: flex;">
				<p style="margin-left: 50px;"><strong>Full Name:</strong><br><?= $rows['pmcg_fname'].' '.$rows['pmcg_mname'].' '.$rows['pmcg_lname']?></p>
				<p style="margin-left: 50px;"><strong>Sex:</strong><br><?= $rows['pmcg_sex']?></p>

				<p style="margin-left: 50px;"><strong>Date of Birth:</strong><br><?= date('F d, Y',strtotime($rows['pmcg_dob']))?></p>
				<p style="margin-left: 50px;"><strong>Place of Birth:</strong><br><?= $rows['pmcg_pob']?></p>
				<p style="margin-left: 50px;"><strong>Occupation:</strong><br><?= $rows['pmcg_occupation']?></p>
				<p style="margin-left: 50px;"><strong>Estimated Monthly Income:</strong><br>₱<?= $rows['pmcg_estimatedincome']?></p>
			</div>			
		</div>
		<hr>
		<div class="basic-info">
			<div class="form-group" style="display: flex;">
				<p style="margin-left: 50px;"><strong>Address:</strong><br><?= $rows['pmc_address']?></p>
				<p style="margin-left: 50px;"><strong>Barangay:</strong><br><?= $rows['pmc_brgy']?></p>
				<p style="margin-left: 50px;"><strong>City:</strong><br><?= $rows['pmc_city']?></p>
				<p style="margin-left: 50px;"><strong>Province:</strong><br><?= $rows['pmc_province']?></p>
				<p style="margin-left: 50px;"><strong>Email Address:</strong><br><?= $rows['pmc_email']?></p>
				<p style="margin-left: 50px;"><strong>Contact Number:</strong><br><?= $rows['pmc_mobilenum']?></p>								
			</div>			
		</div>
		<div class="basic-info">
			<div class="form-group" style="display: relative;">
				<p style="margin-left: 50px;"><strong>Do you have an Application of Marriage from CCRT?</strong><br><?php if(!empty($rows['pmc_aomimage'])) {?>Yes, I have.<?php } else { ?>No.<?php } ?></p>		
			</div>			
		</div>		
		<div class="basic-info">
			<div class="form-group" style="display: relative;">
				<p style="margin-left: 50px;"><strong>Date of Marriage:</strong><br><?= date('F d, Y',strtotime($rows['pmc_dom']))?></p>			
			</div>			
		</div>	
		<hr>

		<br>
		<div class="basic-info">
			<div class="form-group" style="display: relative;">
				<p style="margin-left: 50px;"><strong>Your Schedule for Counseling is on :</strong><br><?= date('F d, Y',strtotime($rows['schedule_status']))?></p>			
			</div>			
		</div>
		<br>
	<div class="footer">
		<strong>
			<p>I hereby certify that the information given aboeve are true and correct. I further understand that any misinterpretation that may have made will subject me to criminal and civil liabilities provided for by existing laws.</p>
		</strong>
	</div>					
		<!--  -->
		<center>
			<br>
			<br>
			<div class="col-4" style="margin-top: 30px; float: left;">
				<strong><u><?= $rows['pmcb_signature']?></u></strong>
				<label for="pmcb_signature">Signature Over Printed Name of Bride</label>				
			</div>
			<div class="col-4" style="margin-top: 30px; float: right;">
				<strong><u><?= $rows['pmcg_signature']?></u></strong>
				<label for="pmcg_signature">Signature Over Printed Name of Groom</label>				
			</div> 			 										
		</center>				
	<?php endforeach;?>
</body>
</html>