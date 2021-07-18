<?php
$pageTitle = "CSWD | SSCS Records";
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
					<h1>Securing Social Case Study</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">SSCS Form</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<form action="<?= site_url();?>sscsrecord/add_sscsrecord" method="POST" enctype="multipart/form-data" id="sscs_validate">
				<div class="col-12">
					<div class="card card-primary">
						<div class="card-header ">
							<h3 class="card-title">Identifying Information</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<div class="row">
								
								<div class="col-2 form-group">
									<label for="cs_lname">Last Name <span style="color: red">*</span></label>
									<input type="text" class="form-control" placeholder="Last Name" name="cs_lname" autofocus>
								</div>
								<div class="col-2 form-group">
									<label for="cs_fname">First Name <span style="color: red">*</span></label>
									<input type="text" class="form-control" placeholder="First Name" name="cs_fname">
								</div>											
								<div class="col-2 form-group">
									<label for="cs_mname">Middle Name <span style="color: red">*</span></label>
									<input type="text" class="form-control" placeholder="Middle Name" name="cs_mname">
								</div>											
								<div class="col-2 form-group">
									<label for="cs_sex">Sex <span style="color: red">*</span></label>
									<select name="cs_sex" class="form-control">
										<option value="Male" selected>Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
								<div class="col-2 form-group">
									<label for="cs_dob">Date of Birth <span style="color: red">*</span></label>
									<input type="date" class="form-control pull-right" name="cs_dob">
								</div>
								<div class="col-2 form-group">
									<label for="cs_pob">Place of Birth <span style="color: red">*</span></label>
									<input type="text" class="form-control" placeholder="Place of Birth" name="cs_pob">
								</div>
								<div class="col-3 form-group">
									<label for="cs_occupation">Occupation <span style="color: red">*</span></label>
									<input type="text" class="form-control" placeholder="Occupation" name="cs_occupation">
								</div>
								<div class="col-3 form-group">
									<label for="cs_estimatedincome">Estimated Monthly Income <span style="color: red">*</span></label>
									<input type="text" class="form-control" placeholder="Ex: 50,000 - 100,000" name="cs_estimatedincome">
								</div>
								<div class="col-3 form-group" >
									<label for="cs_address">Address / Street # <span style="color: red">*</span></label>
									<input type="text" class="form-control" name="cs_address" placeholder="e.g Quezon Drive 98" >
								</div>
								<div class="col-3 form-group">
									<label for="cs_brgy">Barangay <span style="color: red">*</span></label>
									<select id="rec_mode" class="form-control" name="cs_brgy">
									</select>
								</div>									
								<div class="col-2 form-group">
									<label for="cs_city">City <span style="color: red">*</span></label>
									<input type="text" class="form-control" value="Calapan City" name="cs_city" readonly>
								</div>
								<div class="col-2 form-group">
									<label for="cs_province">Province <span style="color: red">*</span></label>
									<input type="text" class="form-control" value="Oriental Mindoro" name="cs_province" readonly>
								</div>	 
								<div class="col-3 form-group">
									<label for="cs_email">Email Address <span style="color: red">*</span></label>
									<input type="email" class="form-control" name="cs_email" placeholder="existing@existing@gmail.com">
								</div>
								<div class="col-2 form-group">
									<label for="cs_mobilenum">Mobile Number <span style="color: red">*</span></label>
									<div class="input-group">	
										<input type="text" class="form-control" placeholder="Ex:0912.." name="cs_mobilenum">
									</div>
								</div>													
							</div>									
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<div class="col-12">
					<div class="card card-primary">
						<div class="card-header ">
							<h3 class="card-title">Requirements to be Attach</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<div class="row">											
								<div class="col-4 form-group" >
									<label for="cs_clinicalabstract">Clinical Abstract <span style="color: red">*</span></label>
									<input type="file" name="cs_clinicalabstract" id="cs_clinicalabstract" class="form-control" style="padding: 3px">
								</div>
								<div class="col-4 form-group" >
									<label for="cs_clinicalbills">Clinical Bills <span style="color: red">*</span></label>
									<input type="file" name="cs_clinicalbills" id="cs_clinicalbills" class="form-control" style="padding: 3px">
								</div>													
								<div class="col-4 form-group" >
									<label for="cs_medicalinfo">Medical Information <span style="color: red">*</span></label>
									<input type="file" name="cs_medicalinfo" id="cs_medicalinfo" class="form-control" style="padding: 3px">
								</div>													
								<div class="col-4 form-group" >
									<label for="cs_requestofscsr">Request of Social Case Study Report (SCSR) <span style="color: red">*</span></label>
									<input type="file" name="cs_requestofscsr" id="cs_requestofscsr" class="form-control" style="padding: 3px">
								</div>
								<div class="col-4 form-group">
									<label for="cs_requestname">Where to refer the Case Study?<span style="color: red">*</span></label>
									<input type="text" class="form-control" placeholder="Enter Full Name*" name="cs_requestname" >
								</div>																	

							</div>									
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<center>
					<div class="col-4 mt-4 form-group">
						<input type="text" class="form-control form-control-border border-width-2 text-center" placeholder="Printed Name of Applicant" name="cs_signature">
						<label for="cs_signature">Signature Over Printed Name of Applicant <span style="color: red">*</span></label>				
					</div> 										
				</center>								
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