	<?php
	$pageTitle = "CSWD | Solo Parent Records";
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
						<h1>Updating Application Form for Solo Parent</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Solo Parent Form</li>
						</ol>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid"> 
				<div class="row">
					<form action="<?= site_url('admin/spdata_update'); ?>" method="POST" enctype="multipart/form-data" id="sp_validate">				<input type="hidden" name="sp_id" value="<?=$data['sp_id']; ?>">	
						<!-- left column -->
						<div class="col-md-12">

							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title">Identifying Information</h3>
								</div>

								<div class="card-body">
									<div class="row">
										<div class="col-3 form-group">
											<label for="sp_lastname">Last Name <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_lastname" value="<?=$data['sp_lastname']; ?>">
										</div>
										<div class="col-3 form-group">
											<label for="sp_firstname">First Name <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_firstname" value="<?=$data['sp_firstname']; ?>">
										</div>									
										<div class="col-2 form-group">
											<label for="sp_middlename">Middle Name <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_middlename" value="<?=$data['sp_middlename']; ?>">
										</div>											
										<div class="col-2 form-group">
											<label for="sp_age">Age</label>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Auto Calculate" name="sp_age" id="age" readonly="" value="<?=$data['sp_age']; ?>">
											</div>	
										</div>
										<div class="col-2 form-group">
											<label for="sp_sex">Sex <span style="color: red">*</span></label>
											<select name="sp_sex" class="form-control">
												<option value="<?=$data['sp_sex']; ?>"><?=$data['sp_sex']; ?></option>
												<option value="none">---SELECT---</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
										</div>										
										<div class="col-4 form-group">
											<label for="sp_dob">Date of Birth <span style="color: red">*</span></label>
											<input type="date" class="form-control pull-right" name="sp_dob" id="bday" value="<?=$data['sp_dob']; ?>">
										</div>
										<div class="col-4 form-group">
											<label for="sp_pob">Place of Birth <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_pob" value="<?=$data['sp_pob']; ?>">
										</div>  									    
										<div class="col-4 form-group">
											<label for="sp_address">Address Street/Number <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_address" value="<?=$data['sp_address']; ?>">
										</div>
										<div class="col-4 form-group">
											<label for="sp_brgy">Barangay <span style="color: red">*</span></label>
											<select id="rec_mode" class="form-control" name="sp_brgy">
												<option value="<?=$data['sp_brgy']; ?>" selected><?=$data['sp_brgy']; ?></option>
											</select>
										</div>									
										<div class="col-2 form-group">
											<label for="sp_city">City/Municipality <span style="color: red">*</span></label>
											<input type="text" class="form-control" value="Calapan City" name="sp_city" readonly>
										</div>
										<div class="col-2 form-group">
											<label for="sp_province">Province <span style="color: red">*</span></label>
											<input type="text" class="form-control" value="Oriental Mindoro" name="sp_province" readonly>
										</div>	 
										<div class="col-4 form-group">
											<label for="sp_email">Email Address <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_email" value="<?=$data['sp_email']; ?>">
										</div>
										<div class="col-4 form-group">
											<label for="sp_mobilenum">Mobile Number <span style="color: red">*</span></label>
											<div class="input-group">	
												<input type="text" class="form-control" value="<?=$data['sp_mobilenum']; ?>" name="sp_mobilenum">
											</div>										
										</div>																		
										<div class="col-4 form-group">
											<label for="sp_educational">Highest Educational Attainment <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_educational" value="<?=$data['sp_educational']; ?>">
										</div>
										<div class="col-4 form-group">
											<label for="sp_occupation">Occupation <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_occupation" value="<?=$data['sp_occupation']; ?>">
										</div> 
										<div class="col-4 form-group">
											<label for="sp_monthlyincome">Estimated Monthly Income <span style="color: red">*</span></label>
											<input type="text" class="form-control" value="<?=$data['sp_monthlyincome']; ?>" name="sp_monthlyincome">
										</div>

										<!-- /.row -->
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
								<div class="card-header">
									<h3 class="card-title">I. Family Composition</h3>
								</div>
								<div class="card-body">
									<div class="row">

										<table class="table table-bordered" style="width: 100%">
											<thead>
												<tr class="text-center">
													<th style="width: 15%">Name</th>
													<th style="width: 10%">Relationship</th>
													<th style="width: 6%">Age</th>
													<th style="width: 10%">Status</th>
													<th>Date of Birth</th>
													<th style="width: 15%">Educational Attainment</th>
													<th style="width: 15%">Occupation</th>
													<th style="width: 10%">Monthly Income</th>
												</tr>
											</thead>
											<tbody>
												<!-- SPFC 1-->
												<tr>
													<td>
														<input type="text" class="form-control" name="spfc_fullname" value="<?=$data['spfc_fullname']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_relationship" value="<?=$data['spfc_relationship']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_age" value="<?=$data['spfc_age']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_status" value="<?=$data['spfc_status']; ?>">
													</td>
													<td>
														<input type="date" class="form-control" name="spfc_dob" value="<?=$data['spfc_dob']; ?>">
													</td>										
													<td>
														<input type="text" class="form-control" name="spfc_educational" value="<?=$data['spfc_educational']; ?>">
													</td>	
													<td>
														<input type="text" class="form-control" name="spfc_occupation" value="<?=$data['spfc_occupation']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_monthlyincome" value="<?=$data['spfc_monthlyincome']; ?>">
													</td>									
												</tr>
												<!-- SPFC 2-->
												<tr>
													<td>
														<input type="text" class="form-control"  name="spfc_fullname_two" value="<?=$data['spfc_fullname_two']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_relationship_two" value="<?=$data['spfc_relationship_two']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_age_two" value="<?=$data['spfc_age_two']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_status_two" value="<?=$data['spfc_status_two']; ?>">
													</td>
													<td>
														<input type="date" class="form-control" name="spfc_dob_two" value="<?=$data['spfc_dob_two']; ?>">
													</td>										
													<td>
														<input type="text" class="form-control" name="spfc_educational_two" value="<?=$data['spfc_educational_two']; ?>">
													</td>	
													<td>
														<input type="text" class="form-control" name="spfc_occupation_two" value="<?=$data['spfc_occupation_two']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_monthlyincome_two" value="<?=$data['spfc_monthlyincome_two']; ?>">
													</td>									
												</tr>
												<!-- SPFC 3-->
												<tr>
													<td>
														<input type="text" class="form-control"  name="spfc_fullname_three" value="<?=$data['spfc_fullname_three']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_relationship_three" value="<?=$data['spfc_relationship_three']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_age_three" value="<?=$data['spfc_age_three']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_status_three" value="<?=$data['spfc_status_three']; ?>">
													</td>
													<td>
														<input type="date" class="form-control" name="spfc_dob_three" value="<?=$data['spfc_dob_three']; ?>">
													</td>										
													<td>
														<input type="text" class="form-control" name="spfc_educational_three" value="<?=$data['spfc_educational_three']; ?>">
													</td>	
													<td>
														<input type="text" class="form-control" name="spfc_occupation_three" value="<?=$data['spfc_occupation_three']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_monthlyincome_three" value="<?=$data['spfc_monthlyincome_three']; ?>">
													</td>									
												</tr>
												<!-- SPFC 4-->
												<tr>
													<td>
														<input type="text" class="form-control"  name="spfc_fullname_four" value="<?=$data['spfc_fullname_four']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_relationship_four" value="<?=$data['spfc_relationship_four']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_age_four" value="<?=$data['spfc_age_four']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_status_four" value="<?=$data['spfc_status_four']; ?>">
													</td>
													<td>
														<input type="date" class="form-control" name="spfc_dob_four" value="<?=$data['spfc_dob_four']; ?>">
													</td>										
													<td>
														<input type="text" class="form-control" name="spfc_educational_four" value="<?=$data['spfc_educational_four']; ?>">
													</td>	
													<td>
														<input type="text" class="form-control" name="spfc_occupation_four" value="<?=$data['spfc_occupation_four']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_monthlyincome_four" value="<?=$data['spfc_monthlyincome_four']; ?>">
													</td>									
												</tr>											
												<!-- SPFC 5-->
												<tr>
													<td>
														<input type="text" class="form-control"  name="spfc_fullname_five" value="<?=$data['spfc_fullname_five']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_relationship_five" value="<?=$data['spfc_relationship_five']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_age_five" value="<?=$data['spfc_age_five']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_status_five" value="<?=$data['spfc_status_five']; ?>">
													</td>
													<td>
														<input type="date" class="form-control" name="spfc_dob_five" value="<?=$data['spfc_dob_five']; ?>">
													</td>										
													<td>
														<input type="text" class="form-control" name="spfc_educational_five" value="<?=$data['spfc_educational_five']; ?>">
													</td>	
													<td>
														<input type="text" class="form-control" name="spfc_occupation_five" value="<?=$data['spfc_occupation_five']; ?>">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_monthlyincome_five" value="<?=$data['spfc_monthlyincome_five']; ?>">
													</td>									
												</tr>										
											</tbody>
										</table>
										<div class="col-md-12">

											<h5 class="callout callout-warning"><span style="color: red">*</span>Include family members and other members of the household.</h5>
											<!-- /.card-tools -->
										</div>
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
								<div class="card-header">
									<h3 class="card-title">II. Classification/Circumstances of Being a Solo Parent</h3>
								</div>
								<div class="card-body" style="align-items: center;">	
									<div class="row">
										<div class="col-3 mb-4 form-group">
											<label for="sp_curr_status">Current Status <span style="color: red">*</span></label>
											<select name="sp_curr_status" class="form-control">
												<option value="<?=$data['sp_curr_status']; ?>" selected><?=$data['sp_curr_status']; ?></option>
												<option >----------------------------</option>
												<option value="Widow">Widow</option>
												<option value="Separated">Separated</option>
												<option value="Unmarried">Unmarried</option>
												<option value="Spouse is in Prison">Spouse is in Prison</option>
												<option value="Abandoned">Abandoned</option>
												<option value="Spouse is PWD">Spouse is PWD</option>
												<option value="Legal Guardianship">Legal Guardianship</option>
											</select>
										</div>										
										<div class="col-12">
											<textarea class="form-control" placeholder="Explaine Something Here..." name="sp_circumstances" ></textarea>
										</div>					
									</div>

								</div>
								<!-- /.card-body -->
							</div>
						</div>
						<!--/.col (right) -->

						<div class="col-md-12">
							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title">III. Needs/Problems of the Solo Parent</h3>
								</div>
								<div class="card-body" style="align-items: center;">	
									<div class="row">
										<div class="col-12">
											<textarea class="form-control" placeholder="Explaine Something Here..." name="sp_problems" ></textarea>
										</div>																
									</div>

								</div>
								<!-- /.card-body -->
							</div>
						</div>					   
						<div class="col-md-12">
							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title">IV. Family Resources</h3>
								</div>
								<div class="card-body" style="align-items: center;">	
									<div class="row">
										<div class="col-12">
											<textarea class="form-control" placeholder="Explaine Something Here..." name="sp_family_resources" ></textarea>
										</div>																			
									</div>

								</div>
								<!-- /.card-body -->
							</div>
						</div>
						<div class="col-md-12">
							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title">Signature</h3>
								</div>
								<div class="card-body" style="align-items: center;">	
									<div class="row">
										<div class="col-4">
											<label for="curr_date">Date Today</label>
											<input type="date" class="form-control pull-right" name="curr_date" value="<?php echo date("Y-m-d"); ?>" readonly>
										</div>
										<div class="col-4 form-group" >
											<label for="sp_signature">Printed Name <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_signature" value="<?=$data['sp_signature']; ?>">
										</div>										
										<div class="col-4" >
											<label for="fileToUpload">View of Uploaded Picture <span style="color: red">*</span></label>
											<img src="<?php echo BASE_URL .'uploads/image/sp_idpic/'. $data['image']; ?>" width="150" height="150" style="border: 2px solid black; padding:5px" />
										</div>												
									</div>

								</div>
								<!-- /.card-body -->
							</div>
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
											<input type="date" class="form-control pull-right" name="expiration_date" value="<?php echo date('Y-m-d',strtotime("+12 months")); ?>">
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


					</div>
					<!-- /.row -->
					<div class="card-footer">
						<center>
							<button type="submit" class="btn btn-primary">Update Information</button>
						</center>
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