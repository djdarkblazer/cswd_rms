<?php
$pageTitle = "CSWD | SSCS Form";
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
			<h5>SECURING SOCIAL CASE STUDY REPORT FORM</h5>
		</div>
		<div class="logo-pic">
			<img src="<?= site_url()?>assets/img/logo.png" height="150" width="150">
		</div>
		<hr>
		<div class="basic-info">
			<h5>Basic Information</h5>
			<div class="form-group" style="display: flex;">
				<p style="margin-left: 50px;"><strong>Full Name:</strong><br><?= $rows['cs_fname'].' '.$rows['cs_mname'].' '.$rows['cs_lname']?></p>
				<p style="margin-left: 50px;"><strong>Sex:</strong><br><?= $rows['cs_sex']?></p>

				<p style="margin-left: 50px;"><strong>Date of Birth:</strong><br><?= date('F d, Y',strtotime($rows['cs_dob']))?></p>
				<p style="margin-left: 50px;"><strong>Place of Birth:</strong><br><?= $rows['cs_pob']?></p>
	
				<p style="margin-left: 50px;"><strong>Occupation:</strong><br><?= $rows['cs_occupation']?></p>
				<p style="margin-left: 50px;"><strong>Estimated Monthly Income:</strong><br>₱<?= $rows['cs_estimatedincome']?></p>
				</div>
			<div class="form-group" style="display: flex;">				
				<p style="margin-left: 50px;"><strong>Address:</strong><br><?= $rows['cs_address']?></p>
				<p style="margin-left: 50px;"><strong>Barangay:</strong><br><?= $rows['cs_brgy']?></p>
				<p style="margin-left: 50px;"><strong>City:</strong><br><?= $rows['cs_city']?></p>
				<p style="margin-left: 50px;"><strong>Province:</strong><br><?= $rows['cs_province']?></p>
				</div>
				<div class="form-group" style="display: flex;">	
				<p style="margin-left: 50px;"><strong>Email Address:</strong><br><?= $rows['cs_email']?></p>
				<p style="margin-left: 50px;"><strong>Contact Number:</strong><br><?= $rows['cs_mobilenum']?></p>
			</div>							
		</div>
		<hr>
		<div class="basic-info">
			<h5>Requirements Information</h5>
			<div class="form-group" style="display: relative;">
				<p style="margin-left: 50px;"><strong>Do you have a Clinical Abstract?</strong><br><?php if(!empty($rows['cs_clinicalabstract'])) {?>Yes, I have.<?php } else { ?>No.<?php } ?></p>
				<p style="margin-left: 50px;"><strong>Do you have a Clinical Bills ?</strong><br><?php if(!empty($rows['cs_clinicalbills'])) {?>Yes, I have.<?php } else { ?>No.<?php } ?></p>
				<p style="margin-left: 50px;"><strong>Do you have a Medical Information ?</strong><br><?php if(!empty($rows['cs_medicalinfo'])) {?>Yes, I have.<?php } else { ?>No.<?php } ?></p>
				<p style="margin-left: 50px;"><strong>Do you have a Request from Social Case Study Report (SCSR)  ?</strong><br><?php if(!empty($rows['cs_requestofscsr'])) {?>Yes, I have.<?php } else { ?>No.<?php } ?></p>
				<p style="margin-left: 50px;"><strong>To which/where you will refer this Social Case Study?</strong><br><?= $rows['cs_requestname']?></p>		
			</div>			
		</div>		
		<hr>		
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
			<div class="col-4" style="margin-top: 30px;">
				<strong><u><?= $rows['cs_signature']?></u></strong>
				<label>Signature Over Printed Name of Groom</label>				
			</div> 			 										
		</center>				
	<?php endforeach;?>
</body>
</html>