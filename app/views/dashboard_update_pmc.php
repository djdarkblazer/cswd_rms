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
					<h1>Updating Information of the Couple</h1>
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
			<form action="<?= site_url();?>pmcrecord/updating_pmcrecord" method="POST" enctype="multipart/form-data">
				
				<div class="row">
					<div class="col-12">
						<div class="card card-primary">
							<div class="card-header ">
								<h3 class="card-title">Identifying Information of the Bride</h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<div class="row">										<input type="hidden" name="pmc_id" value="<?= $data['pmc_id'];?>">
									<div class="col-2 form-group">
										<label for="pmc_lname">Last Name <span style="color: red">*</span></label>
										<input type="text" class="form-control" value="<?= $data['pmc_lname'];?>" name="pmc_lname">
									</div>
									<div class="col-2 form-group">
										<label for="pmc_fname">First Name <span style="color: red">*</span></label>
										<input type="text" class="form-control" value="<?= $data['pmc_fname'];?>" name="pmc_fname">
									</div>											
									<div class="col-2 form-group">
										<label for="pmc_mname">Middle Name <span style="color: red">*</span></label>
										<input type="text" class="form-control" value="<?= $data['pmc_mname'];?>" name="pmc_mname">
									</div>											
									<div class="col-2 form-group">
										<label for="pmc_sex">Sex <span style="color: red">*</span></label>
										<select name="pmc_sex" class="form-control">
											<option value="Female" selected>Female</option>
										</select>
									</div>
									<div class="col-2 form-group">
										<label for="pmc_dob">Date of Birth <span style="color: red">*</span></label>
										<input type="date" class="form-control pull-right" name="pmc_dob" value="<?= $data['pmc_dob'];?>">
									</div>
									<div class="col-2 form-group">
										<label for="pmc_pob">Place of Birth <span style="color: red">*</span></label>
										<input type="text" class="form-control" value="<?= $data['pmc_pob'];?>" name="pmc_pob">
									</div>
									<div class="col-3 form-group">
										<label for="pmc_occupation">Occupation <span style="color: red">*</span></label>
										<input type="text" class="form-control" value="<?= $data['pmc_occupation'];?>" name="pmc_occupation">
									</div>
									<div class="col-3 form-group">
										<label for="pmc_estimatedincome">Estimated Monthly Income <span style="color: red">*</span></label>
										<input type="text" class="form-control" value="<?= $data['pmc_estimatedincome'];?>" name="pmc_estimatedincome">
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
										<input type="text" class="form-control" value="<?= $data['pmcg_lname'];?>" name="pmcg_lname">
									</div>
									<div class="col-2 form-group">
										<label for="pmcg_fname">First Name <span style="color: red">*</span></label>
										<input type="text" class="form-control" value="<?= $data['pmcg_fname'];?>" name="pmcg_fname">
									</div>											
									<div class="col-2 form-group">
										<label for="pmcg_mname">Middle Name <span style="color: red">*</span></label>
										<input type="text" class="form-control" value="<?= $data['pmcg_mname'];?>" name="pmcg_mname">
									</div>											
									<div class="col-2 form-group">
										<label for="pmcg_sex">Sex <span style="color: red">*</span></label>
										<select name="pmcg_sex" class="form-control">
											<option value="Male" selected>Male</option>
										</select>
									</div>
									<div class="col-2 form-group">
										<label for="pmcg_dob">Date of Birth <span style="color: red">*</span></label>
										<input type="date" class="form-control pull-right" name="pmcg_dob" value="<?= $data['pmcg_dob'];?>">
									</div>
									<div class="col-2 form-group">
										<label for="pmcg_pob">Place of Birth <span style="color: red">*</span></label>
										<input type="text" class="form-control" value="<?= $data['pmcg_pob'];?>" name="pmcg_pob">
									</div>
									<div class="col-3 form-group">
										<label for="pmcg_occupation">Occupation <span style="color: red">*</span></label>
										<input type="text" class="form-control" value="<?= $data['pmcg_occupation'];?>" name="pmcg_occupation">
									</div>
									<div class="col-3 form-group">
										<label for="pmcg_estimatedincome">Estimated Monthly Income <span style="color: red">*</span></label>
										<input type="text" class="form-control" value="<?= $data['pmcg_estimatedincome'];?>" name="pmcg_estimatedincome">
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
										<input type="text" class="form-control" name="pmc_address" value="<?= $data['pmc_address'];?>">
									</div>
									<div class="col-4 form-group">
										<label for="pmc_brgy">Barangay <span style="color: red">*</span></label>
										<select id="rec_mode" class="form-control" name="pmc_brgy">
											<option value="<?= $data['pmc_brgy'];?>" selected readonly><?= $data['pmc_brgy'];?>
										</option>
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
									<input type="email" class="form-control" name="pmc_email" value="<?= $data['pmc_email'];?>">
								</div>
								<div class="col-2 form-group">
									<label for="pmc_mobilenum">Mobile Number <span style="color: red">*</span></label>
									<div class="input-group">	
										<input type="text" class="form-control" value="<?= $data['pmc_mobilenum'];?>" name="pmc_mobilenum">
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
								<div class="col-2 form-group">
									<label for="pmc_dom">Date of Marriage <span style="color: red">*</span></label>
									<input type="date" class="form-control pull-right" name="pmc_dom" value="<?= $data['pmc_dom'];?>">
								</div>
								<div class="col-2 form-group">
									<label for="schedule_status">Schedule for Counseling <span style="color: red">*</span></label>
									<input type="date" class="form-control pull-right" name="schedule_status">
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
									<input type="text" class="form-control  text-center" value="<?= $data['pmcb_signature'];?>" name="pmcb_signature">
									<center>
										<label for="pmcb_signature">Printed Name of the Bride <span style="color: red">*</span></label>
									</center>				
								</div> 
								<div class="col-4 mt-4 form-group">
									<input type="text" class="form-control  text-center" value="<?= $data['pmcg_signature'];?>" name="pmcg_signature">
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