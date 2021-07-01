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
						<h1>Application Form for Solo Parent</h1>
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
					<form action="<?= site_url('admin/sp_insert'); ?>" method="POST" enctype="multipart/form-data">>					
						<!-- left column -->
						<div class="col-md-12">

							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title">Identifying Information</h3>
								</div>

								<div class="card-body">
									<div class="row">

										<div class="col-4">
											<label for="sp_fullname">Full Name</label>
											<input type="text" class="form-control" placeholder="Full Name*" name="sp_fullname">
										</div>
										<div class="col-2">
											<label for="sp_age">Age</label>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Auto Calculate" name="sp_age" id="age" readonly="">
											</div>										
										</div>
										<div class="col-2">
											<label for="sp_sex">Sex</label>
											<select name="sp_sex" class="form-control">
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
										</div>
										<div class="col-4">
											<label for="sp_dob">Date of Birth</label>
											<input type="date" class="form-control pull-right" name="sp_dob" id="bday">
										</div>
										<div class="col-4">
											<label for="sp_pob">Place of Birth</label>
											<input type="text" class="form-control" placeholder="Place of Birth*" name="sp_pob">
										</div>  									    
										<div class="col-4">
											<label for="sp_address">Address</label>
											<input type="text" class="form-control" placeholder="Address*" name="sp_address">
										</div> 
										<div class="col-4">
											<label for="sp_email">Email Address</label>
											<input type="text" class="form-control" placeholder="Email Address*" name="sp_email">
										</div>
										<div class="col-4">
											<label for="sp_mobilenum">Mobile Number</label>
											<div class="input-group">											
												<input type="text" class="form-control" placeholder="Mobile Number*" name="sp_mobilenum">

											</div>										
										</div>																		
										<div class="col-4">
											<label for="sp_educational">Highest Educational Attainment</label>
											<input type="text" class="form-control" placeholder="Highest Educational Attainment*" name="sp_educational">
										</div>
										<div class="col-4">
											<label for="sp_occupation">Occupation</label>
											<input type="text" class="form-control" placeholder="Occupation*" name="sp_occupation">
										</div> 
										<div class="col-4">
											<label for="sp_monthlyincome">Estimated Monthly Income</label>
											<input type="text" class="form-control" placeholder="(Ex. 20,000 - 50,000)*" name="sp_monthlyincome">
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
														<input type="text" class="form-control" name="spfc_fullname" value="">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_relationship" value="">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_age" value="0">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_status" value="">
													</td>
													<td>
														<input type="date" class="form-control" name="spfc_dob" value="<?php echo date("Y-m-d"); ?>">
													</td>										
													<td>
														<input type="text" class="form-control" name="spfc_educational" value="">
													</td>	
													<td>
														<input type="text" class="form-control" name="spfc_occupation" value="">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_monthlyincome" value="">
													</td>									
												</tr>
												<!-- SPFC 2-->
												<tr>
													<td>
														<input type="text" class="form-control"  name="spfc_fullname_two" value="">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_relationship_two" value="">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_age_two" value="0">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_status_two" value="">
													</td>
													<td>
														<input type="date" class="form-control" name="spfc_dob_two" value="<?php echo date("Y-m-d"); ?>">
													</td>										
													<td>
														<input type="text" class="form-control" name="spfc_educational_two" value="">
													</td>	
													<td>
														<input type="text" class="form-control" name="spfc_occupation_two" value="">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_monthlyincome_two" value="">
													</td>									
												</tr>
												<!-- SPFC 3-->
												<tr>
													<td>
														<input type="text" class="form-control"  name="spfc_fullname_three" value="">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_relationship_three" value="">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_age_three" value="0">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_status_three" value="">
													</td>
													<td>
														<input type="date" class="form-control" name="spfc_dob_three" value="<?php echo date("Y-m-d"); ?>">
													</td>										
													<td>
														<input type="text" class="form-control" name="spfc_educational_three" value="">
													</td>	
													<td>
														<input type="text" class="form-control" name="spfc_occupation_three" value="">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_monthlyincome_three" value="">
													</td>									
												</tr>
												<!-- SPFC 4-->
												<tr>
													<td>
														<input type="text" class="form-control"  name="spfc_fullname_four" value="">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_relationship_four" value="">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_age_four" value="0">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_status_four" value="">
													</td>
													<td>
														<input type="date" class="form-control" name="spfc_dob_four" value="<?php echo date("Y-m-d"); ?>">
													</td>										
													<td>
														<input type="text" class="form-control" name="spfc_educational_four" value="">
													</td>	
													<td>
														<input type="text" class="form-control" name="spfc_occupation_four" value="">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_monthlyincome_four" value="">
													</td>									
												</tr>											
												<!-- SPFC 5-->
												<tr>
													<td>
														<input type="text" class="form-control"  name="spfc_fullname_five" value="">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_relationship_five" value="">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_age_five" value="0">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_status_five" value="">
													</td>
													<td>
														<input type="date" class="form-control" name="spfc_dob_five" value="<?php echo date("Y-m-d"); ?>">
													</td>										
													<td>
														<input type="text" class="form-control" name="spfc_educational_five" value="">
													</td>	
													<td>
														<input type="text" class="form-control" name="spfc_occupation_five" value="">
													</td>
													<td>
														<input type="text" class="form-control" name="spfc_monthlyincome_five" value="">
													</td>									
												</tr>										
											</tbody>
										</table>
										<div class="col-md-12">

											<h5 class="callout callout-warning">*Include family members and other members of the household.</h5>
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
										<div class="col-2 mb-4">
											<label for="sp_curr_status">Current Status</label>
											<select name="sp_curr_status" class="form-control">
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
											<input type="date" class="form-control pull-right" name="curr_date" value="<?php echo date("Y-m-d"); ?>">
										</div>
										<div class="col-4" >
											<label for="sp_signature">PRINTED NAME</label>
											<input type="text" class="form-control" placeholder="PRINTED NAME*" name="sp_signature">
										</div>										
										<div class="col-4" >
											<label for="fileToUpload">Upload Any Size ID Picture</label>
											<input type="file" name="fileToUpload" id="fileToUpload" class="form-control" style="padding: 3px">
										</div>												
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