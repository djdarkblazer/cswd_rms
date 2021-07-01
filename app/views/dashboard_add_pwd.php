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
									<div class="col-4">
										<label for="pwd_typedis">Type of Disability</label>
										<select name="pwd_typedis" class="form-control" id="pwd_typedis">
											<option value="Communication Disability">Communication Disability</option>
											<option value="Learning Disability">Learning Disability</option>
											<option value="Mental/Pyschosocial Disability">Mental/Pyschosocial Disability</option>
											<option value="Visual">Visual</option>
											<option value="Orthopedic(Musculoskeletal)">Orthopedic(Musculoskeletal)</option>
											<option value="Intellectual Disability">Intellectual Disability</option>
											<option value="Other">Other</option>
										</select>
									</div>											
									<div class="col-3">
										<label for="pwd_typespecify">Other Type of Disability</label>
										<input type="text" class="form-control" value="none" name="pwd_typespecify" id="pwd_typespecify" readonly="">
									</div>											
									<div class="col-2">
										<label for="pwd_causedis">Cause of Disability</label>
										<select name="pwd_causedis" class="form-control" >
											<option value="Inborn">Inborn</option>
											<option value="Due to Accident">Due to Accident</option>
											<option value="Due to Chronic Illness">Due to Chronic Illness</option>
										</select>
									</div>	
									<div class="col-4">
										<label for="pwd_address">Address/Number & Street</label>
										<input type="text" class="form-control" placeholder="E.g. Quezon Drive Street" name="pwd_address">	
									</div>
									<div class="col-2">
										<label for="pwd_region">Region</label>
										<input type="text" class="form-control" placeholder="Region*" name="pwd_region">
									</div>											
									<div class="col-2">
										<label for="pwd_province">Province</label>
										<input type="text" class="form-control" placeholder="Province*" name="pwd_province">
									</div>											
									<div class="col-3">
										<label for="pwd_city">City/Municipality</label>
										<input type="text" class="form-control" placeholder="City/Municipality*" name="pwd_city">
									</div>											
									<div class="col-3">
										<label for="pwd_brgy">Barangay</label>
										<select class="form-control"name="pwd_brgy" id="opt_brgy">
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