<!-- Include Header -->
<?php
$pageTitle = "CSWD | Assistance Forms";
define("ROOT", __DIR__ ."/");
include(ROOT . 'includes/header.php');
include(ROOT . 'includes/topnav.php');
?>

<div class="wrapper">
	<div class="welcome-banner h-100 d-inline-block w-100 p-2" style="background-image: url('<?= SITE_URL()?>assets/img/header_bg.jpg'); background-repeat: no-repeat; background-size: cover;">
		<div class="w-100 p-2">
			<div class="jumbotron">
				<!-- Scrolling Image -->
				<div class="page-wrapper">
					<!-- Post Slide -->
					<div class="post-slider">
						<h1 class="slider-title"><img class="logo-float " src="<?= SITE_URL('assets/img/logo.png'); ?>" alt="cswdlogo" width="100" height="100" style="margin-right: 5px;  border-radius: 50%;">CSWD APPLICATION FORM</h1>

						<i class="fas fa-chevron-left prev"></i>
						<i class="fas fa-chevron-right next"></i>

						<div class="post-wrapper">
							<div class="post">
								<img class="slider-image" src="<?= SITE_URL('assets/img/soloparent.jpg')?>" alt="cswdlogo">
								<div class="post-info">
									<h4><a href="<?= site_url('website/view_req_sp')?>">Solo Parent</a></h4>
									<i class="fas fa-file"> CSWD Form</i>
									&nbsp;
									<i class="fas fa-calendar"> <?php echo date("F d, Y"); ?></i>
								</div>
							</div>
							<div class="post">
								<img class="slider-image" src="<?= SITE_URL('assets/img/pwd2.png')?>" alt="cswdlogo">
								<div class="post-info">
									<h4><a href="<?= site_url('website/view_req_pwd')?>">Persons with Disability</a></h4>
									<i class="fas fa-file"> CSWD Form</i>
									&nbsp;
									<i class="fas fa-calendar"> <?php echo date("F d, Y"); ?></i>
								</div>
							</div>                            
						</div>

					</div>
					<!-- //Post -->
				</div>       

			</div>
		</div>
	</div>  
</div>



<!-- Include Footer -->
<?php
include(ROOT . 'includes/footer.php');
?>