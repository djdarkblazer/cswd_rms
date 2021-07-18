<!-- Include Header -->
<?php
$pageTitle = "CSWD | PWD Form";
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
						<h1 class="slider-title">PERSONS WITH DISABILITY APPLICATION FORM</h1>
						<hr>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="<?= site_url('admin/pwd_insert_request'); ?>" method="POST" enctype="multipart/form-data" id="pwd_validate">
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
                    <div class="col-3 form-group" >
                      <label for="UploadtoResidency">Attach Certification of Residency <span style="color: red">*</span></label>
                      <input type="file" name="UploadtoResidency" id="UploadtoResidency" class="form-control" style="padding: 3px">
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