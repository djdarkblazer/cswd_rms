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
					<div class="col-12">
						<div class="card card-primary">
							<div class="card-header ">
								<h3 class="card-title">Identifying Information</h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<div class="row">
									<div class="col-2">
										<label for="pwd_lname">Last Name</label>
										<input type="text" class="form-control" placeholder="Last Name" name="pwd_lname">
									</div>
									<div class="col-2">
										<label for="pwd_fname">First Name</label>
										<input type="text" class="form-control" placeholder="First Name" name="pwd_fname">
									</div>											
									<div class="col-2">
										<label for="pwd_mname">Middle Name</label>
										<input type="text" class="form-control" placeholder="Middle Name" name="pwd_mname">
									</div>											
									<div class="col-2">
										<label for="pwd_sex">Sex</label>
										<select name="pwd_sex" class="form-control">
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>																						
								</div>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- /.Main content -->

	</div>
	<!-- /.content-wrapper -->
	<?php
	include(ROOT . 'templates/footer.php');
	?>