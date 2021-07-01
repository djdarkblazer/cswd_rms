	<?php
	$pageTitle = "CSWD | PWD Records";
	define("ROOT", __DIR__ ."/");
	include(ROOT . 'templates/header.php');
	?>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1>Application Form for PWD</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">PWD Form</li>
						</ol>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid"> 
				<div class="row">
					<form action="<?= site_url('admin/pwd_insert'); ?>" method="POST" enctype="multipart/form-data">					
						<!-- left column -->
						<div class="col-md-12">
							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title">Identifying Information</h3>
								</div>
								<div class="card-body">
									<div class="row">
										
									</div>                               
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
						<!--/.col (left) -->

						<!-- right column -->
						<div class="col-md-12">

							<div class="card card-primary">
								<div class="card-body">
									<div class="row">
										<!-- /.row -->		
									</div>

								</div>
								<!-- /.card-body -->
							</div>
						</div>
						<!--/.col (right) -->

						<!-- right column -->
						<div class="col-md-12">

							<div class="card card-primary">
								<div class="card-body" style="align-items: center;">	
									<div class="row">
										
									</div>

								</div>
								<!-- /.card-body -->
							</div>
						</div>
						<!--/.col (right) -->

						<div class="col-md-12">
							<div class="card card-primary">
								<div class="card-body" style="align-items: center;">
									<div class="row">				
									</div>

								</div>
								<!-- /.card-body -->
							</div>
						</div>					   					
					</div>
					<!-- /.row -->
					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Submit Application Form</button>
					</div>				
				</form>
			</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->

	</div>
	<!-- /.content-wrapper -->
	<?php
	include(ROOT . 'templates/footer.php');
	?>