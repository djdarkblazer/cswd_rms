<!-- Include Header -->
<!-- Include Header -->
<?php
$pageTitle = "CSWD | Events";
define("ROOT", __DIR__ ."/");
include(ROOT . 'includes/header.php');
include(ROOT . 'includes/topnav.php');
?>


<div class="welcome-banner h-100 d-inline-block w-100 p-2" style="background-image: url('<?= SITE_URL()?>assets/img/header_bg.jpg'); background-repeat: no-repeat; background-size: cover;">
	<div class="w-100 p-2">
		<div class="jumbotron" >
			<section class="events-content" >
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div style="border: solid #007bff 1px; padding: 10px;" class="card-body">
								<h3 style="margin-bottom: 50px;" class="text-center"><strong>CSWD CALENDAR OF ACTIVITIES 2020-2021</strong></h3>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-striped table-bordered">
											<thead>
												<tr><th style="text-align: center" class="text-green">DATE</th>
													<th style="text-align: center" class="text-green">ACTIVITY</th>
												</tr></thead>
												<tbody>
													<?php foreach($data as $row): ?>
													<tr>
														<td style="text-align: center">
															<h4><?= date('F j, Y',strtotime($row['coa_date']))?></h4>
														</td>
														<td style="text-align: center">
															<h4><?= $row['coa_name']?></h4>
														</td>
													</tr>
													<?php endforeach;?>
												</tbody>
											</table>										
										</div>
									</div>								
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>




	<!-- Include Footer -->
	<?php
	include(ROOT . 'includes/footer.php');
	?>        