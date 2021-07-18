<?php
$pageTitle = "CSWD | PMC Records";
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
					<h1>Identifying Information of the Couple</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">PMC Form</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<form action="<?= site_url();?>pmcrecord/add_pmcrecord" method="POST" enctype="multipart/form-data" id="pmc_validate">
				<div class="row">
					<div class="col-12">
						<div class="card card-primary">
							<div class="card-header ">
								<h3 class="card-title">Identifying Information of the Bride</h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<div class="row">										
									<div class="col-2 form-group">
										<label for="pmc_lname">Last Name <span style="color: red">*</span></label>
										<input type="text" class="form-control" placeholder="Last Name" name="pmc_lname" autofocus>
									</div>
									<div class="col-2 form-group">
										<label for="pmc_fname">First Name <span style="color: red">*</span></label>
										<input type="text" class="form-control" placeholder="First Name" name="pmc_fname">
									</div>											
									<div class="col-2 form-group">
										<label for="pmc_mname">Middle Name <span style="color: red">*</span></label>
										<input type="text" class="form-control" placeholder="Middle Name" name="pmc_mname">
									</div>											
									<div class="col-2 form-group">
										<label for="pmc_sex">Sex <span style="color: red">*</span></label>
										<select name="pmc_sex" class="form-control">
											<option value="Female" selected>Female</option>
										</select>
									</div>
									<div class="col-2 form-group">
										<label for="pmc_dob">Date of Birth <span style="color: red">*</span></label>
										<input type="date" class="form-control pull-right" name="pmc_dob">
									</div>
									<div class="col-2 form-group">
										<label for="pmc_pob">Place of Birth <span style="color: red">*</span></label>
										<input type="text" class="form-control" placeholder="Place of Birth" name="pmc_pob">
									</div>
									<div class="col-3 form-group">
										<label for="pmc_occupation">Occupation <span style="color: red">*</span></label>
										<input type="text" class="form-control" placeholder="Occupation" name="pmc_occupation">
									</div>
									<div class="col-3 form-group">
										<label for="pmc_estimatedincome">Estimated Monthly Income <span style="color: red">*</span></label>
										<input type="text" class="form-control" placeholder="Ex: 50,000 - 100,000" name="pmc_estimatedincome">
									</div>																				
								</div>									
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<div class="col-12">
						<div class="card card-primary">
							<div class="card-header">
								<h3 class="card-title">Identifying Information of the Groom</h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<div class="row">										
									<div class="col-2 form-group">
										<label for="pmcg_lname">Last Name <span style="color: red">*</span></label>
										<input type="text" class="form-control" placeholder="Last Name" name="pmcg_lname">
									</div>
									<div class="col-2 form-group">
										<label for="pmcg_fname">First Name <span style="color: red">*</span></label>
										<input type="text" class="form-control" placeholder="First Name" name="pmcg_fname">
									</div>											
									<div class="col-2 form-group">
										<label for="pmcg_mname">Middle Name <span style="color: red">*</span></label>
										<input type="text" class="form-control" placeholder="Middle Name" name="pmcg_mname">
									</div>											
									<div class="col-2 form-group">
										<label for="pmcg_sex">Sex <span style="color: red">*</span></label>
										<select name="pmcg_sex" class="form-control">
											<option value="Male" selected>Male</option>
										</select>
									</div>
									<div class="col-2 form-group">
										<label for="pmcg_dob">Date of Birth <span style="color: red">*</span></label>
										<input type="date" class="form-control pull-right" name="pmcg_dob">
									</div>
									<div class="col-2 form-group">
										<label for="pmcg_pob">Place of Birth <span style="color: red">*</span></label>
										<input type="text" class="form-control" placeholder="Place of Birth" name="pmcg_pob">
									</div>
									<div class="col-3 form-group">
										<label for="pmcg_occupation">Occupation <span style="color: red">*</span></label>
										<input type="text" class="form-control" placeholder="Occupation" name="pmcg_occupation">
									</div>
									<div class="col-3 form-group">
										<label for="pmcg_estimatedincome">Estimated Monthly Income <span style="color: red">*</span></label>
										<input type="text" class="form-control" placeholder="Ex: 50,000-100,000" name="pmcg_estimatedincome">
									</div>																		
								</div>
							</div>							
						</div>						
					</div>						
					<!-- /.col -->
					<div class="col-12">
						<div class="card card-primary">
							<div class="card-header">

							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<div class="row">									
									<div class="col-4 form-group">
										<label for="pmc_address">Address / Street # <span style="color: red">*</span></label>
										<input type="text" class="form-control" name="pmc_address">
									</div>
									<div class="col-4 form-group">
										<label for="pmc_brgy">Barangay <span style="color: red">*</span></label>
										<select id="rec_mode" class="form-control" name="pmc_brgy">
										</select>
									</div>									
									<div class="col-2 form-group">
										<label for="pmc_city">City <span style="color: red">*</span></label>
										<input type="text" class="form-control" value="Calapan City" name="pmc_city" readonly>
									</div>
									<div class="col-2 form-group">
										<label for="pmc_province">Province <span style="color: red">*</span></label>
										<input type="text" class="form-control" value="Oriental Mindoro" name="pmc_province" readonly>
									</div>	 
									<div class="col-3 form-group">
										<label for="pmc_email">Email Address <span style="color: red">*</span></label>
										<input type="email" class="form-control" name="pmc_email">
									</div>
									<div class="col-2 form-group">
										<label for="pmc_mobilenum">Mobile Number <span style="color: red">*</span></label>
										<div class="input-group">	
											<input type="text" class="form-control" placeholder="Ex:0912.." name="pmc_mobilenum">
										</div>
									</div>													
								</div>
							</div>							
						</div>						
					</div>						
					<!-- /.col -->						
					<div class="col-12">
						<div class="card card-primary">
							<div class="card-header">
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<div class="row">									
									<div class="col-4 form-group" >
										<label for="UploadtoPmc">Application of Marriage from CCRT <span style="color: red">*</span></label>
										<input type="file" name="Uploadtopmc" id="Uploadtopmc" class="form-control" style="padding: 3px">
									</div>
									<div class="col-2 form-group">
										<label for="pmc_dom">Date of Marriage <span style="color: red">*</span></label>
										<input type="date" class="form-control pull-right" name="pmc_dom">
									</div>

								</div>
							</div>							
						</div>						
					</div>						
					<!-- /.col -->	
					<div class="col-12">
						<div class="card card-primary">
							<div class="card-header">
							</div>
							<!-- /.card-header -->
							<div class="card-body">

								<div class="row">

									<div class="col-4 mt-4 form-group">
										<input type="text" class="form-control  text-center" placeholder="Printed Name of Applicant" name="pmcb_signature">
										<center>
											<label for="pmcb_signature">Printed Name of the Bride <span style="color: red">*</span></label>
										</center>				
									</div> 
									<div class="col-4 mt-4 form-group">
										<input type="text" class="form-control  text-center" placeholder="Printed Name of Applicant" name="pmcg_signature">
										<center>
											<label for="pmcg_signature">Printed Name of Groom <span style="color: red">*</span></label>
										</center>				
									</div>										

								</div>
							</div>							
						</div>						
					</div>						
					<!-- /.col -->						
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