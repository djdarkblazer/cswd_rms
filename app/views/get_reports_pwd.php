<?php
$pageTitle ="CSWD | PWD Reports"
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
		margin-top: 2px;
	}
	hr{
		border: 1px solid black;
	}
	.id-pic{
		float: right;
		margin-right: 50px;
		border: 3px solid black;
		padding: 3px; 
	}
	.basicinfo{
		padding-left: 20px;
	}
	.footer{
		text-align: justify;
		margin-left: 20px;
		margin-right: 20px;
		margin-top: 30px;
	}
	.signature{
		margin-top: 50px;
	}
</style>
</head>
<body onload="window.print();">
	<div class="h-style">
		<img src="<?= site_url()?>assets/img/logo.png" height="70px" width="70px">
		<h6>CALAPAN CITY SOCIAL WELFARE AND DEVELOPMENT</h6>	
		<p>Republic of the Philippines<br>Province of Oriental Mindoro<br>Calapan City</p>
		<h5>Person With Disability  Reports</h5>
	</div>
	<hr>	
	<div class="basicinfo">
		<h6>Date : <?= date('F d, Y'); ?></h6>
		<br>
		<h6>Total Client From Barangay : <?= $data['total']?></h6>
	</div>
	<hr>
	<table class="table table-bordered" width="100%">
		<thead>
			<tr style="text-align: center;">
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Barangay</th>
                    <th>Type of Disability</th>
                    <th>Specific Disability</th>
                    <th>Valid Until</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($data['data'] as $row):?>
				<tr style="text-align: center;">
                    <td><?= $row['pwd_fname']; ?> <?= $row['pwd_mname']; ?> <?= $row['pwd_lname']; ?></td>
                    <td><?=$row['pwd_address'].', '.$row['pwd_city'].', '.$row['pwd_province']?></td>
                    <td><?=$row['pwd_brgy']?></td>
                    <td><?= $row['pwd_typedis']; ?></td>
                    <td><?= $row['pwd_typespecify']; ?></td>
                    <td><?= date('M d, Y',strtotime($row['expiration_date'])); ?></td>
				</tr>
				<?php endforeach;?>				
		</tbody>
	</table>

</body>
</html>