<!-- Include Header -->
<?php
$pageTitle = "CSWD | Information";
define("ROOT", __DIR__ ."/");
include(ROOT . 'includes/header.php');
include(ROOT . 'includes/topnav.php');
?>


<div class="welcome-banner h-100 d-inline-block w-100 p-2" style="background-image: url('<?= SITE_URL()?>assets/img/header_bg.jpg'); background-repeat: no-repeat; background-size: cover;">
	<div class="w-100 p-2">
		<div class="jumbotron">
			<section class="events-content">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div style="border: solid #007bff 1px; padding: 10px;" class="card-body">
								<div class="row">
									<div class="col-md-12 text-center mt-2">
										<img src="<?php echo BASE_URL .'uploads/post/'. $data['image']; ?>" style="width: 60%;height: 70%; box-shadow: 5px 10px 10px -6px black;">
										<h3 class="text-center mt-4">
											<strong><?=$data['info_title']?></strong>
										</h3>
										<h5>CSWD</h5>
										<h6><?= date('F d, Y',strtotime($data['info_date'])); ?></h6>
											
									</div>
									<div class="col-md-12 text-center">
										<p><?=$data['info_information']?></p>
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