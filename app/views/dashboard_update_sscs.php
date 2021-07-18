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
			<form action="<?= site_url();?>sscsrecord/updating_sscsrecord" method="POST" enctype="multipart/form-data">
				<div class="col-12">
					<div class="card card-primary">
						<div class="card-header ">
							<h3 class="card-title">Identifying Information</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<div class="row">
								<input type="hidden" name="cs_id" value="<?= $data['cs_id']?>">
								<div class="col-2 form-group">
									<label for="cs_lname">Last Name <span style="color: red">*</span></label>
									<input type="text" class="form-control" value="<?= $data['cs_lname']?>" name="cs_lname" >
								</div>
								<div class="col-2 form-group">
									<label for="cs_fname">First Name <span style="color: red">*</span></label>
									<input type="text" class="form-control" value="<?= $data['cs_fname']?>" name="cs_fname">
								</div>											
								<div class="col-2 form-group">
									<label for="cs_mname">Middle Name <span style="color: red">*</span></label>
									<input type="text" class="form-control" value="<?= $data['cs_mname']?>" name="cs_mname">
								</div>											
								<div class="col-2 form-group">
									<label for="cs_sex">Sex <span style="color: red">*</span></label>
									<select name="cs_sex" class="form-control">
										<option selected readonly value="<?= $data['cs_sex']?>"><?= $data['cs_sex']?></option>
										<option value="Male" selected>Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
								<div class="col-2 form-group">
									<label for="cs_dob">Date of Birth <span style="color: red">*</span></label>
									<input type="date" class="form-control pull-right" name="cs_dob" value="<?= $data['cs_dob']?>">
								</div>
								<div class="col-2 form-group">
									<label for="cs_pob">Place of Birth <span style="color: red">*</span></label>
									<input type="text" class="form-control" value="<?= $data['cs_pob']?>" name="cs_pob" >
								</div>
								<div class="col-3 form-group">
									<label for="cs_occupation">Occupation <span style="color: red">*</span></label>
									<input type="text" class="form-control" value="<?= $data['cs_occupation']?>" name="cs_occupation">
								</div>
								<div class="col-3 form-group">
									<label for="cs_estimatedincome">Estimated Monthly Income <span style="color: red">*</span></label>
									<input type="text" class="form-control" value="<?= $data['cs_estimatedincome']?>" name="cs_estimatedincome">
								</div>
								<div class="col-3 form-group" >
									<label for="cs_address">Address / Street # <span style="color: red">*</span></label>
									<input type="text" class="form-control" name="cs_address" value="<?= $data['cs_address']?>" >
								</div>
								<div class="col-3 form-group">
									<label for="cs_brgy">Barangay <span style="color: red">*</span></label>
									<select id="rec_mode" class="form-control" name="cs_brgy">
										<option selected readonly value="<?= $data['cs_brgy']?>"><?= $data['cs_brgy']?></option>
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
									<input type="email" class="form-control" name="cs_email" value="<?= $data['cs_email']?>">
								</div>
								<div class="col-2 form-group">
									<label for="cs_mobilenum">Mobile Number <span style="color: red">*</span></label>
									<div class="input-group">	
										<input type="text" class="form-control" value="<?= $data['cs_mobilenum']?>" name="cs_mobilenum">
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
									<a href="<?php echo BASE_URL .'uploads/image/sscs_pic/'. $data['cs_clinicalabstract']; ?>" target="_blank">View Here</a>
								</div>
								<div class="col-4 form-group" >
									<label for="cs_clinicalbills">Clinical Bills <span style="color: red">*</span></label><br>
									<a href="<?php echo BASE_URL .'uploads/image/sscs_pic/'. $data['cs_clinicalbills']; ?>" target="_blank">View Here</a>
								</div>													
								<div class="col-4 form-group" >
									<label for="cs_medicalinfo">Medical Information <span style="color: red">*</span></label><br>
									<a href="<?php echo BASE_URL .'uploads/image/sscs_pic/'. $data['cs_medicalinfo']; ?>" target="_blank">View Here</a>
								</div>													
								<div class="col-4 form-group" >
									<label for="cs_requestofscsr">Request of Social Case Study Report (SCSR) <span style="color: red">*</span></label><br>
									<a href="<?php echo BASE_URL .'uploads/image/sscs_pic/'. $data['cs_requestofscsr']; ?>" target="_blank">View Here</a>
								</div>
								<div class="col-4 form-group">
									<label for="cs_requestname">Where to refer the Case Study?<span style="color: red">*</span></label>
									<input type="text" class="form-control" value="<?= $data['cs_requestname']?>" name="cs_requestname" >
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
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<div class="row">
								<div class="col-3">
									<label>Request Status</label>
									<select name="request_status" class="form-control" id="status_req">
										<option value="Pending">Pending from Approval</option>
										<option value="Approved">Assistance Approved</option>
										<option value="Disapproved">Assistance Disapproved</option>
										<option value="Incomplete">Incomplete Requirements</option>	
									</select>
								</div>
								<div class="col-4" id="status_disapproved"  hidden="">
									<label for="sp_dis_msg">Reason for Disapproved <span style="color: red">*</span></label>
									<input type="text" class="form-control" name="sp_dis_msg" placeholder="Enter your Message">
								</div>														
							</div>
						</div>							
					</div>						
				</div>						
				<!-- /.col -->					
				<center>
					<div class="col-4 mt-4 form-group">
						<input type="text" class="form-control form-control-border border-width-2 text-center" value="<?= $data['cs_signature']?>" name="cs_signature">
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