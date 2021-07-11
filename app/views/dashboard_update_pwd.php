	<?php
	$pageTitle = "CSWD | Update PWD Records";
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
				<form action="<?= site_url('admin/pwddata_update'); ?>" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="pwd_id" value="<?=$data['pwd_id']; ?>">
					<div class="row">
						<div class="col-12">
							<div class="card card-primary">
								<div class="card-header ">
									<h3 class="card-title">Updating Information</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="row">
										<div class="col-2">
											<label for="pwd_lname">Last Name</label>
											<input type="text" class="form-control" value="<?=$data['pwd_lname']; ?>" name="pwd_lname">
										</div>
										<div class="col-2">
											<label for="pwd_fname">First Name</label>
											<input type="text" class="form-control" value="<?=$data['pwd_fname']; ?>" name="pwd_fname">
										</div>											
										<div class="col-2">
											<label for="pwd_mname">Middle Name</label>
											<input type="text" class="form-control" value="<?=$data['pwd_mname']; ?>" name="pwd_mname">
										</div>											
										<div class="col-2">
											<label for="pwd_sex">Sex</label>
											<select name="pwd_sex" class="form-control">
												<option value="<?=$data['pwd_sex']; ?>" selected><?=$data['pwd_sex']; ?></option>
												<option value="none">---SELECT---</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
										</div>
										<div class="col-4">
											<label for="pwd_typedis">Type of Disability</label>
											<select name="pwd_typedis" class="form-control" id="pwd_typedis">
												<option value="<?=$data['pwd_typedis']; ?>" selected><?=$data['pwd_typedis']; ?></option>
												<option value="none" >---SELECT---</option>
												<option value="Communication Disability">Communication Disability</option>
												<option value="Learning Disability">Learning Disability</option>
												<option value="Mental/Pyschosocial Disability">Mental/Pyschosocial Disability</option>
												<option value="Visual">Visual</option>
												<option value="Orthopedic(Musculoskeletal)">Orthopedic(Musculoskeletal)</option>
												<option value="Intellectual Disability">Intellectual Disability</option>
												<option value="Other">Other Type of Disability</option>
											</select>
										</div>											
										<div class="col-3">
											<label for="pwd_typespecify">Other Type of Disability</label>
											<input type="text" class="form-control" value="<?=$data['pwd_typespecify']; ?>" name="pwd_typespecify" id="pwd_typespecify" readonly="">
										</div>											
										<div class="col-2">
											<label for="pwd_causedis">Cause of Disability</label>
											<select name="pwd_causedis" class="form-control" >
												<option value="<?=$data['pwd_causedis']; ?>" selected><?=$data['pwd_causedis']; ?></option>
												<option value="none">---SELECT---</option>
												<option value="Inborn">Inborn</option>
												<option value="Due to Accident">Due to Accident</option>
												<option value="Due to Chronic Illness">Due to Chronic Illness</option>
											</select>
										</div>	
										<div class="col-4">
											<label for="pwd_address">Address/Number & Street</label>
											<input type="text" class="form-control" value="<?=$data['pwd_address']; ?>" name="pwd_address">	
										</div>
										<div class="col-2">
											<label for="pwd_region">Region</label>
											<input type="text" class="form-control" value="<?=$data['pwd_region']; ?>" name="pwd_region" readonly>
										</div>											
										<div class="col-2">
											<label for="pwd_province">Province</label>
											<input type="text" class="form-control" value="<?=$data['pwd_province']; ?>" name="pwd_province" readonly>
										</div>											
										<div class="col-3">
											<label for="pwd_city">City/Municipality</label>
											<input type="text" class="form-control" value="<?=$data['pwd_city']; ?>" name="pwd_city" readonly>
										</div>											
										<div class="col-3">
											<label for="pwd_brgy">Barangay</label>
											<select id="rec_mode" class="form-control" name="pwd_brgy">
												<option value="<?=$data['pwd_brgy']; ?>" selected><?=$data['pwd_brgy']; ?></option>
											</select>
										</div>
										<div class="col-2">
											<label for="pwd_dob">Date of Birth</label>
											<input type="date" class="form-control pull-right" name="pwd_dob" value="<?=$data['pwd_dob']; ?>">
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
										<div class="col-2">
											<label for="pwd_landline">Landline Number</label>
											<input type="text" class="form-control" value="<?=$data['pwd_landline']; ?>" name="pwd_landline">
										</div>
										<div class="col-2">
											<label for="pwd_mobilenum">Mobile Number</label>
											<input type="text" class="form-control" value="<?=$data['pwd_mobilenum']; ?>" name="pwd_mobilenum">
										</div>
										<div class="col-3">
											<label for="pwd_email">Email Address</label>
											<input type="email" class="form-control" value="<?=$data['pwd_email']; ?>" name="pwd_email">
										</div>
										<div class="col-3">
											<label for="pwd_civilstatus">Civil Status</label>
											<select name="pwd_civilstatus" class="form-control">
												<option value="<?=$data['pwd_civilstatus']; ?>" selected><?=$data['pwd_causedis']; ?></option>
												<option value="none">---SELECT---</option>
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
										<div class="col-4">
											<label for="pwd_educational">Educational Attainment</label>
											<select class="form-control" name="pwd_educational">
												<option value="<?=$data['pwd_educational']; ?>" selected><?=$data['pwd_educational']; ?></option>
												<option value="none">---SELECT---</option>
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
										<div class="col-4">
											<label for="pwd_empstatus">Employment Status</label>
											<select class="form-control" name="pwd_empstatus">
												<option value="<?=$data['pwd_empstatus']; ?>" selected><?=$data['pwd_empstatus']; ?></option>
												<option value="none">---SELECT---</option>
												<option value="Employed">Employed</option>
												<option value="Unemployed">Unemployed</option>
												<option value="Resigned">Resigned</option>
												<option value="Retired">Retired</option>
												<option value="Displayed Worker">Displayed Worker</option>
												<option value="Returning Overseas Filipino Worker">Returning Overseas Filipino Worker</option>
											</select>
										</div>											
										<div class="col-4">
											<label for="pwd_empnature">Nature of Employer</label>
											<select class="form-control" name="pwd_empnature">
												<option value="<?=$data['pwd_empnature']; ?>" selected><?=$data['pwd_empnature']; ?></option>
												<option value="none">
												---SELECT---</option>
												<option value="Private">Private</option>
												<option value="Government">Government</option>
											</select>
										</div>											
										<div class="col-4">
											<label for="pwd_emptype">Type of Employment</label>
											<select class="form-control" name="pwd_emptype">
												<option value="<?=$data['pwd_emptype']; ?>" selected><?=$data['pwd_emptype']; ?></option>
												<option value="none">---SELECT---</option>
												<option value="Contractual">Contractual</option>
												<option value="Permanent">Permanent</option>
												<option value="Self-Employed">Self-Employed</option>
												<option value="Seasonal">Seasonal</option>
											</select>
										</div>											
										<div class="col-4">
											<label for="pwd_occupation">Occupation</label>
											<input type="text" class="form-control" value="<?=$data['pwd_occupation']; ?>" name="pwd_occupation">					
										</div>
										<div class="col-4">
											<label for="pwd_cperson">Contact Person</label>
											<input type="text" class="form-control" value="<?=$data['pwd_cperson']; ?>" name="pwd_cperson">					
										</div>
										<div class="col-4">
											<label for="pwd_cnumber">Contact Number</label>
											<input type="text" class="form-control" value="<?=$data['pwd_cnumber']; ?>" name="pwd_cnumber">					
										</div>
										<div class="col-2">
											<label for="pwd_idnum">PWD ID Number</label>
											<input type="text" class="form-control" value="<?=$data['pwd_idnum']; ?>" name="pwd_idnum">
										</div>
										<div class="col-3" >
											<label for="fileToUpload">Uploaded ID Picture</label>
											<p><img src="<?php echo BASE_URL .'uploads/image/pwd_idpic/'. $data['image']; ?>" width="100" height="100" style="border: 1px solid black;padding: 3px"></p>											
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
													<td><input type="text" class="form-control" name="pwdf_lname" value="<?=$data['pwdf_lname']; ?>"></td>
													<td><input type="text" class="form-control" name="pwdf_fname" value="<?=$data['pwdf_fname']; ?>"></td>
													<td><input type="text" class="form-control" name="pwdf_mname" value="<?=$data['pwdf_mname']; ?>"></td>
												</tr>
												<tr>
													<td><strong>Mother's Name:</strong></td>
													<td><input type="text" class="form-control" name="pwdm_lname" value="<?=$data['pwdm_lname']; ?>"></td>
													<td><input type="text" class="form-control" name="pwdm_fname" value="<?=$data['pwdm_fname']; ?>"></td>
													<td><input type="text" class="form-control" name="pwdm_mname" value="<?=$data['pwdm_mname']; ?>"></td>	
												</tr>									
												<tr>
													<td><strong>Guardian's Name </strong><sup>(Relationship)</sup></td>
													<td><input type="text" class="form-control" name="pwdg_lname" value="<?=$data['pwdg_lname']; ?>"></td>
													<td><input type="text" class="form-control" name="pwdg_fname" value="<?=$data['pwdg_fname']; ?>"></td>
													<td><input type="text" class="form-control" name="pwdg_mname" value="<?=$data['pwdg_mname']; ?>"></td>	
												</tr>									
												<tr>
													<td><strong>Accomplished By:</strong></td>
													<td><input type="text" class="form-control" name="pwdab_lname" value="<?=$data['pwdab_lname']; ?>"></td>
													<td><input type="text" class="form-control" name="pwdab_fname" value="<?=$data['pwdab_fname']; ?>"></td>
													<td><input type="text" class="form-control" name="pwdab_mname" value="<?=$data['pwdab_mname']; ?>"></td>

												</tr>
												<tr>
													<td><strong>Name of Reporting Unit:</strong></td>
													<td><input type="text" class="form-control" name="pwdru_lname" value="<?=$data['pwdru_lname']; ?>"></td>
													<td><input type="text" class="form-control" name="pwdru_fname" value="<?=$data['pwdru_fname']; ?>"></td>
													<td><input type="text" class="form-control" name="pwdru_mname" value="<?=$data['pwdru_mname']; ?>"></td>

												</tr>																						
											</tbody>
										</table>									
									</div>
									<center>
										<div class="col-4 mt-4">
											<input type="text" class="form-control form-control-border border-width-2 text-center" value="<?=$data['pwd_signature']; ?>" name="pwd_signature">
											<label for="pwd_signature">Signature Over Printed Name of Applicant</label>				
										</div> 										
									</center>									
								</div>
								<!-- /.card-body -->
							</div>
						<div class="col-md-12">
							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title">Request Validation Status</h3>
								</div>
								<div class="card-body" style="align-items: center;">	
									<div class="row">
										<div class="col-3 form-group">
											<label for="expiration_date">Expirate Date <span style="color: red">*</span></label>
											<input type="date" class="form-control pull-right" name="expiration_date" value="<?php echo date('Y-m-d',strtotime("+6 months")); ?>">
										</div>	
										<div class="col-3">
											<label>Request Status</label>
											<select name="request_status" class="form-control" id="status_req">
												<option value="Pending">Pending from Approval</option>
												<option value="Approved">Assistance Approved</option>
												<option value="Disapproved">Assistance Disapproved</option>
												<option value="Incomplete">Incomplete Requirements</option>	
											</select>
										</div>
										<div class="col-5" id="status_disapproved"  hidden="">
											<label for="sp_dis_msg">Reason for Disapproved <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_dis_msg" placeholder="Enter your Message">
										</div>											

									</div>

								</div>
								<!-- /.card-body -->
							</div>
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