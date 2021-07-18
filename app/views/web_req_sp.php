<!-- Include Header -->
<?php
$pageTitle = "CSWD | Solo Parent Form";
define("ROOT", __DIR__ ."/");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?= $pageTitle;?></title>
  <meta name="description" content="Official Website of Calapan Social Welfare and Development">

  <!--iOS -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <!-- meta tags-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="keywords" content="Light Fixture Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css" integrity="sha512-apX8rFN/KxJW8rniQbkvzrshQ3KvyEH+4szT3Sno5svdr6E/CP0QE862yEeLBMUnCqLko8QaugGkzvWS7uNfFQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/regular.min.css" integrity="sha512-Nqct4Jg8iYwFRs/C34hjAF5og5HONE2mrrUV1JZUswB+YU7vYSPyIjGMq+EAQYDmOsMuO9VIhKpRUa7GjRKVlg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!--Web Fonts -->
  <link href="//fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom CSS -->
  <?php echo load_css(array('css/slickpost')); ?>
  <?php echo load_css(array('css/style')); ?>
  <?php echo load_css(array('css/footer')); ?>
  <?php echo load_css(array('css/preloader')); ?>

<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="<?= site_url(); ?>assets/plugins/slick-1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<!-- <link rel="stylesheet" type="text/css" href="<?= site_url(); ?>assets/plugins/slick-1.8.1/slick/slick-theme.css"/> -->

  <!-- /.Custom JScript -->
<!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= site_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


</head>
<body>

  <!-- PRE LOADER -->
  <div class="pre-loader">
      <div class="floating">
        <img src="<?= SITE_URL()?>assets/img/logo.png" height="120px" width="120px">
      </div>
  </div>

<!-- HEADER -->

  <!-- Navigation -->
  <header>
    <div class="h-banner">
      <img src="<?= SITE_URL()?>assets/img/header_bg.jpg" class="d-block w-100 b-bottom" height="350px"/>
    </div>
  </header>



<div class="wrapper ">
	<div class="welcome-banner h-100 d-inline-block w-100 p-2" style="background-image: url('<?= SITE_URL()?>assets/img/header_bg.jpg'); background-repeat: no-repeat; background-size: cover;">
		<div class="w-100 p-2">
			<div class="jumbotron" style="background-color: white">
				<!-- Scrolling Image -->
				<div class="page-wrapper" style="border: solid #007bff 1px; padding: 10px;">
					<!-- Post Slide -->
					<div class="post-slider">
						<h1 class="slider-title">SOLO PARENT APPLICATION FORM</h1>
						<hr>
		<!-- Main content -->
		<section class="content">
			<div class="container-fluid"> 
				<div class="row">
					<form action="<?= site_url('admin/sp_insert_request'); ?>" method="POST" enctype="multipart/form-data" id="sp_validate">					
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
											<input type="text" class="form-control" name="sp_lastname">
										</div>
										<div class="col-3 form-group">
											<label for="sp_firstname">First Name <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_firstname">
										</div>									
										<div class="col-2 form-group">
											<label for="sp_middlename">Middle Name <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_middlename">
										</div>											
										<div class="col-2 form-group">
											<label for="sp_age">Age</label>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Auto Calculate" name="sp_age" id="age" readonly="">
											</div>	
										</div>
										<div class="col-2 form-group">
											<label for="sp_sex">Sex <span style="color: red">*</span></label>
											<select name="sp_sex" class="form-control">
												<option value="none" selected >---SELECT---</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
										</div>										
										<div class="col-4 form-group">
											<label for="sp_dob">Date of Birth <span style="color: red">*</span></label>
											<input type="date" class="form-control pull-right" name="sp_dob" id="bday">
										</div>
										<div class="col-4 form-group">
											<label for="sp_pob">Place of Birth <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_pob">
										</div>  									    
										<div class="col-4 form-group">
											<label for="sp_address">Address Street/Number <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_address">
										</div>
										<div class="col-4 form-group">
											<label for="sp_brgy">Barangay <span style="color: red">*</span></label>
											<select id="rec_mode" class="form-control" name="sp_brgy">
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
											<input type="text" class="form-control" name="sp_email">
										</div>
										<div class="col-4 form-group">
											<label for="sp_mobilenum">Mobile Number <span style="color: red">*</span></label>
											<div class="input-group">	
												<input type="text" class="form-control" placeholder="Start with 09..." name="sp_mobilenum">
											</div>
										</div>																		
										<div class="col-4 form-group">
											<label for="sp_educational">Highest Educational Attainment <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_educational">
										</div>
										<div class="col-4 form-group">
											<label for="sp_occupation">Occupation <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_occupation">
										</div> 
										<div class="col-4 form-group">
											<label for="sp_monthlyincome">Estimated Monthly Income <span style="color: red">*</span></label>
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
										<div class="col-2 mb-4 form-group">
											<label for="sp_curr_status">Current Status <span style="color: red">*</span></label>
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
											<input type="date" class="form-control pull-right" name="curr_date" value="<?php echo date("Y-m-d"); ?>" readonly>
										</div>
										<div class="col-4 form-group" >
											<label for="sp_signature">Printed Name <span style="color: red">*</span></label>
											<input type="text" class="form-control" name="sp_signature">
										</div>										
										<div class="col-4" >
											<label for="fileToUpload">Upload Any Size ID Picture <span style="color: red">*</span></label>
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
						<center>
							<button type="submit" class="btn btn-primary">Submit Application Form</button>
						</center>
					</div>				
				</form>
			</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->
				</div>       
					<div class="mt-4">
						<center>
						<a href="<?= site_url('website')?>" class="btn btn-primary">Back to Home</a>
						</center>
					</div>
			</div>
		</div>
	</div>  
</div>



<!-- Include Footer -->
<?php
include(ROOT . 'includes/footer.php');
?>