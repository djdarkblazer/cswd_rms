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
			<form action="<?= site_url();?>sscsrecord/request_sscsrecord" method="POST" enctype="multipart/form-data" id="sscs_validate">
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
						
					<!-- //Post -->
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