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
				<form action="<?= site_url('admin/pwd_insert'); ?>" method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-12">
							<div class="card card-primary">
								<div class="card-header ">
									<h3 class="card-title">Identifying Information</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="row">
										<div class="col-2 form-group">
											<label for="pwd_lname">Last Name <span style="color: red">*</span></label>
											<input type="text" class="form-control" placeholder="Last Name" name="pwd_lname" autofocus>
										</div>
										<div class="col-2 form-group">
											<label for="pwd_fname">First Name <span style="color: red">*</span></label>
											<input type="text" class="form-control" placeholder="First Name" name="pwd_fname">
										</div>											
										<div class="col-2 form-group">
											<label for="pwd_mname">Middle Name <span style="color: red">*</span></label>
											<input type="text" class="form-control" placeholder="Middle Name" name="pwd_mname">
										</div>											
										<div class="col-2 form-group">
											<label for="pwd_sex">Sex <span style="color: red">*</span></label>
											<select name="pwd_sex" class="form-control">
												<option value="none" selected >---SELECT---</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
										</div>
										<div class="col-4 form-group">
											<label for="pwd_typedis">Type of Disability <span style="color: red">*</span></label>
											<select name="pwd_typedis" class="form-control" id="pwd_typedis">
												<option value="none" selected >---SELECT---</option>
												<option value="Communication Disability">Communication Disability</option>
												<option value="Learning Disability">Learning Disability</option>
												<option value="Mental/Pyschosocial Disability">Mental/Pyschosocial Disability</option>
												<option value="Visual">Visual</option>
												<option value="Orthopedic(Musculoskeletal)">Orthopedic(Musculoskeletal)</option>
												<option value="Intellectual Disability">Intellectual Disability</option>
												<option value="Other">Other Type of Disability</option>
											</select>
										</div>											
										<div class="col-3 form-group" >
											<label for="pwd_typespecify">Other Type of Disability <span style="color: red">*</span></label>
											<input type="text" class="form-control" value="none" name="pwd_typespecify" id="pwd_typespecify" readonly>
										</div>											
										<div class="col-2 form-group">
											<label for="pwd_causedis">Cause of Disability <span style="color: red">*</span></label>
											<select name="pwd_causedis" class="form-control" >
												<option value="none" selected >---SELECT---</option>
												<option value="Inborn">Inborn</option>
												<option value="Due to Accident">Due to Accident</option>
												<option value="Due to Chronic Illness">Due to Chronic Illness</option>
											</select>
										</div>	
										<div class="col-4 form-group">
											<label for="pwd_address">Address/Number & Street <span style="color: red">*</span></label>
											<input type="text" class="form-control" placeholder="E.g. Quezon Drive Street" name="pwd_address">	
										</div>
										<div class="col-2 form-group">
											<label for="pwd_region">Region <span style="color: red">*</span></label>
											<input type="text" class="form-control" value="MIMAROPA" name="pwd_region" readonly>
										</div>											
										<div class="col-2 form-group">
											<label for="pwd_province">Province <span style="color: red">*</span></label>
											<input type="text" class="form-control" value="Oriental Mindoro" name="pwd_province" readonly>
										</div>											
										<div class="col-3 form-group">
											<label for="pwd_city">City/Municipality <span style="color: red">*</span></label>
											<input type="text" class="form-control" value="Calapan City" name="pwd_city" readonly>
										</div>											
										<div class="col-3 form-group">
											<label for="pwd_brgy">Barangay <span style="color: red">*</span></label>
											<select id="rec_mode" class="form-control" name="pwd_brgy">
											</select>
										</div>
										<div class="col-2 form-group">
											<label for="pwd_dob">Date of Birth <span style="color: red">*</span></label>
											<input type="date" class="form-control pull-right" name="pwd_dob">
										</div>																			
									</div>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
						<!-- /.col -->
						<div class="col-12">
							<div class="card">
								<div class="card-header">
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="row">
										<div class="col-2 form-group">
											<label for="pwd_landline">Landline Number <span style="color: red">*</span></label>
											<input type="text" class="form-control" placeholder="Ex. (043) 286-7440" name="pwd_landline">
										</div>
										<div class="col-2 form-group">
											<label for="pwd_mobilenum">Mobile Number <span style="color: red">*</span></label>
											<input type="text" class="form-control" placeholder="Ex. 09123456789" name="pwd_mobilenum">
										</div>
										<div class="col-3 form-group">
											<label for="pwd_email">Email Address <span style="color: red">*</span></label>
											<input type="email" class="form-control" placeholder="example@example.com" name="pwd_email">
										</div>
										<div class="col-3 form-group">
											<label for="pwd_civilstatus">Civil Status <span style="color: red">*</span></label>
											<select name="pwd_civilstatus" class="form-control">
												<option value="none" selected >---SELECT---</option>
												<option value="Single">Single</option>
												<option value="Married">Married</option>
												<option value="Widow/er">Widow/er</option>
												<option value="Separated">Separated</option>
												<option value="Co-Hibernation">Co-Hibernation</option>
											</select>
										</div>																			
									</div>
								</div>							
							</div>						
						</div>
						<!-- /.col -->
						<div class="col-12">
							<div class="card">
								<div class="card-header ">
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="row">
										<div class="col-4 form-group">
											<label for="pwd_educational">Educational Attainment <span style="color: red">*</span></label>
											<select class="form-control" name="pwd_educational">
												<option value="none" selected >---SELECT---</option>
												<option value="Elementary Level">Elementary Level</option>
												<option value="Elementary Graduate">Elementary Graduate</option>
												<option value="High School Level">High School Level</option>
												<option value="High School Graduate">High School Graduate</option>
												<option value="College Level">College Level</option>
												<option value="College Graduate">College Graduate</option>
												<option value="Post Graduate">Post Graduate</option>
												<option value="Vocational">Vocational</option>
												<option value="none">NONE</option>
											</select>
										</div>											
										<div class="col-4 form-group">
											<label for="pwd_empstatus">Employment Status <span style="color: red">*</span></label>
											<select class="form-control" name="pwd_empstatus">
												<option value="none" selected >---SELECT---</option>
												<option value="Employed">Employed</option>
												<option value="Unemployed">Unemployed</option>
												<option value="Resigned">Resigned</option>
												<option value="Retired">Retired</option>
												<option value="Displayed Worker">Displayed Worker</option>
												<option value="Returning Overseas Filipino Worker">Returning Overseas Filipino Worker</option>
											</select>
										</div>											
										<div class="col-4 form-group">
											<label for="pwd_empnature">Nature of Employer <span style="color: red">*</span></label>
											<select class="form-control" name="pwd_empnature">
												<option value="none" selected >---SELECT---</option>
												<option value="Private">Private</option>
												<option value="Government">Government</option>
											</select>
										</div>											
										<div class="col-4 form-group">
											<label for="pwd_emptype">Type of Employment <span style="color: red">*</span> </label>
											<select class="form-control" name="pwd_emptype">
												<option value="none" selected >---SELECT---</option>
												<option value="Contractual">Contractual</option>
												<option value="Permanent">Permanent</option>
												<option value="Self-Employed">Self-Employed</option>
												<option value="Seasonal">Seasonal</option>
											</select>
										</div>											
										<div class="col-4 form-group">
											<label for="pwd_occupation">Occupation <span style="color: red">*</span></label>
											<input type="text" class="form-control" placeholder="Occupation*" name="pwd_occupation">					
										</div>
										<div class="col-4 form-group">
											<label for="pwd_cperson">Contact Person <span style="color: red">*</span></label>
											<input type="text" class="form-control" placeholder="Full Name of Contact Person*" name="pwd_cperson">					
										</div>
										<div class="col-4 form-group">
											<label for="pwd_cnumber">Contact Number <span style="color: red">*</span></label>
											<input type="text" class="form-control" placeholder="An Active Contact Number*" name="pwd_cnumber">					
										</div>
										<div class="col-2 form-group">
											<label for="pwd_idnum">PWD ID Number <span style="color: red">*</span></label>
											<input type="text" class="form-control" placeholder="PWD ID Number*" name="pwd_idnum">
										</div>
										<div class="col-3 form-group" >
											<label for="fileToUpload">Attach 1x1 ID Picture <span style="color: red">*</span></label>
											<input type="file" name="fileToUpload" id="fileToUpload" class="form-control" style="padding: 3px">
										</div>						
									</div>
								</div>							
							</div>						
						</div>

						<div class="col-12">
							<div class="card">
								<!-- /.card-header -->
								<div class="card-body">
									<div class="row">
										<table class="table table-bordered" style="width: 100%">
											<thead>
												<tr>
													<th></th>
													<th>Last Name</th>
													<th>First Name</th>
													<th>Middle Name</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><strong>Father's Name:</strong></td>
													<td><input type="text" class="form-control" name="pwdf_lname"></td>
													<td><input type="text" class="form-control" name="pwdf_fname"></td>
													<td><input type="text" class="form-control" name="pwdf_mname"></td>
												</tr>
												<tr>
													<td><strong>Mother's Name:</strong></td>
													<td><input type="text" class="form-control" name="pwdm_lname"></td>
													<td><input type="text" class="form-control" name="pwdm_fname"></td>
													<td><input type="text" class="form-control" name="pwdm_mname"></td>	
												</tr>									
												<tr>
													<td><strong>Guardian's Name </strong><sup>(Relationship)</sup></td>
													<td><input type="text" class="form-control" name="pwdg_lname"></td>
													<td><input type="text" class="form-control" name="pwdg_fname"></td>
													<td><input type="text" class="form-control" name="pwdg_mname"></td>	
												</tr>									
												<tr>
													<td><strong>Accomplished By:</strong></td>
													<td><input type="text" class="form-control" name="pwdab_lname"></td>
													<td><input type="text" class="form-control" name="pwdab_fname"></td>
													<td><input type="text" class="form-control" name="pwdab_mname"></td>

												</tr>
												<tr>
													<td><strong>Name of Reporting Unit:</strong></td>
													<td><input type="text" class="form-control" name="pwdru_lname"></td>
													<td><input type="text" class="form-control" name="pwdru_fname"></td>
													<td><input type="text" class="form-control" name="pwdru_mname"></td>

												</tr>																						
											</tbody>
										</table>									
									</div>
									<center>
										<div class="col-4 mt-4 form-group">
											<input type="text" class="form-control form-control-border border-width-2 text-center" placeholder="Printed Name of Applicant" name="pwd_signature">
											<label for="pwd_signature">Signature Over Printed Name of Applicant <span style="color: red">*</span></label>				
										</div> 										
									</center>									
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>										

						<!-- /.row -->
					</div>
					<div class="card-footer">
						<center>
							<button type="submit" class="btn btn-primary">Submit Application Form</button>
						</center>
					</div>					
				</form>					
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- /.Main content -->

	</div>
	<!-- /.content-wrapper -->
	<?php
	include(ROOT . 'templates/footer.php');
?>