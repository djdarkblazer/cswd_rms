<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CSWD | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= site_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= site_url(); ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= site_url(); ?>/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page" style="margin-top: 10%">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
        <img class="awards" src="<?= site_url()?>assets/img/logo.png" height="50px" width="50px">
        <br>
      <a class="h1" href="<?= SITE_URL('account/Register'); ?>"><b><span style="color: #EF3A25;">CSWD</span> <br><span style="color: #2990C3;">REGISTRATION</span></a></b>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="<?= site_url('account/Registration'); ?>" method="post">

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>                     
        <div class="row">
          <div class="col-8">
              <a href="<?= site_url('account/login'); ?>" class="text-center">I already have a membership</a>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
          </div>
          <!-- /.col -->
        </div>

      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?= site_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= site_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= site_url(); ?>/assets/dist/js/adminlte.min.js"></script>
<script type="text/javascript" src="<?= site_url()?>assets/sweetalert-2.1.0/docs/assets/sweetalert/sweetalert.min.js"></script>
<!-- Sweet Alert -->
  <script>
    $(document).ready(function () {
      <?php if($this->session->flashdata('success')) : ?>
        swal({
          title: "Succesfull",
          text: "<?= $this->session->flashdata('success') ?>",
          icon: "success",
          button: "Done",
        });
      <?php endif; ?>
      <?php if($this->session->flashdata('error')) : ?>
        swal({
          title: "Error Occured",
          text: "<?= $this->session->flashdata('error') ?>",
          icon: "error",
          button: "Done",
        });
      <?php endif; ?> 
      <?php if(!empty(validation_errors())) : ?>
        swal({
          html: true,
          title: "Error",
          text: "<?php echo validation_errors(); ?>",
          icon: "warning",
          button: "Done",
        });
      <?php endif; ?>      
    });
  </script>
</body>
</html>
