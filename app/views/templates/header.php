<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $pageTitle ?></title>

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
  <!-- Morris charts -->
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/morris.js/morris.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/toastr/toastr.min.css">

  <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css"> -->

  <!-- Morris charts -->
  <link rel="stylesheet" href="<?= site_url(); ?>assets/plugins/morris.js/morris.css">

<?php echo load_css(array('css/preloader')); ?>

<style type="text/css">
  .removeRow
  {
    background: #FF0000;
    color: #FFFFFF;
  }
</style>  
</head>
<body class="hold-transition sidebar-mini sidebar-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?= site_url(); ?>assets/img/logo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand  navbar-primary navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <!-- <a href="" class="nav-link">Home</a> -->
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo BASE_URL .'uploads/image/user_pic/'. $this->session->userdata('image'); ?>" class="user-image img-circle elevation-2" alt="User Image">
            <span class="d-none d-md-inline"></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right mt-2">
            <!-- User image -->
            <li class="user-header" style="background-color: powderblue;">
              <img src="<?php echo BASE_URL .'uploads/image/user_pic/'. $this->session->userdata('image'); ?>" class="img-circle elevation-2" alt="User Image">

              <p>
                <strong><?php echo $this->session->userdata('username'); ?></strong>
                <small><?php echo $this->session->userdata('role'); ?></small>

              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <a href="<?= site_url('account/is_logout'); ?>" class="btn btn-default btn-flat float-right">Sign out</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <?php if($this->session->userdata('role') == "Administrator") :?>
        <a href="<?= site_url(); ?>admin" class="brand-link">
          <img src="<?= site_url();?>assets/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Administrator Panel</span>
        </a>
      <?php elseif($this->session->userdata('role') == "Employee") :?>
        <a href="<?= site_url(); ?>admin" class="brand-link">
          <img src="<?= site_url();?>assets/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Employee Panel</span>
        </a>
      <?php endif; ?>


      <!-- Sidebar -->
      <div class="sidebar mt-2">
        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->

        <?php if($this->session->userdata('role') == "Administrator") :?>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat " data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-header accent-blue"><strong>RECORDS PANEL</strong></li>     
           <li class="nav-item menu-open">
            <a href="<?= site_url(); ?>admin" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>
                Add Records
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url(); ?>admin/sp_addrecords" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Solo Parent</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url(); ?>admin/pwd_addrecords" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add PWD</p>
                </a>
              </li>                            
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Records
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url(); ?>admin/sp_viewrecords" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Solo Parent Records</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url(); ?>admin/pwd_viewrecords" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View PWD Records</p>
                </a>
              </li>              
            </ul>
            <li class="nav-item">
              <a href="<?= site_url('admin/view_reports');?>" class="nav-link">
                <i class="nav-icon fas fa-server"></i>
                <p>
                  Reports
                </p>
              </a>
            </li>             
          </li>
          <li class="nav-header"><strong>WEBSITE PANEL</strong></li>
          <li class="nav-item">
            <a href="<?= site_url(); ?>admin/calendarofact" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar of Activities
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Post / Articles
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('admin/postinfo')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('admin/viewinfo'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Post</p>
                </a>
              </li>                            
            </ul>
          </li>          
          <li class="nav-header"><strong>SETTINGS</strong></li>
          <li class="nav-item">
            <a href="<?= site_url('admin/backupfile'); ?>" class="nav-link">
              <i class="nav-icon fas fa-upload"></i>
              <p>
                Backup Data
              </p>
            </a>
          </li>          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('user/add_user'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('admin/manage_useraccount'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage User</p>
                </a>
              </li>                            
            </ul>
          </li>                   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    <?php elseif ($this->session->userdata('role') == "Employee") :?> 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-header accent-blue"><strong>RECORDS PANEL</strong></li>     
           <li class="nav-item menu-open">
            <a href="<?= site_url(); ?>admin" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>
                Add Records
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url(); ?>admin/sp_addrecords" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Solo Parent</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url(); ?>admin/pwd_addrecords" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add PWD</p>
                </a>
              </li>                            
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Records
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url(); ?>admin/sp_viewrecords" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Solo Parent Records</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url(); ?>admin/pwd_viewrecords" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View PWD Records</p>
                </a>
              </li>              
            </ul>
            <li class="nav-item">
              <a href="<?= site_url('admin/request_adminfile'); ?>" class="nav-link">
                <i class="nav-icon fas fa-upload"></i>
                <p>
                  Upload File Request
                </p>
              </a>
            </li>            
<!--           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-server"></i>
              <p>
                Reports
              </p>
            </a>
          </li> -->             
        </li>
<!--           <li class="nav-header"><strong>WEBSITE PANEL</strong></li>
          <li class="nav-item">
            <a href="<?= site_url(); ?>admin/calendarofact" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar of Activities
              </p>
            </a>
          </li> -->
<!--           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Post / Articles
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('admin/postinfo')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('admin/viewinfo'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Post</p>
                </a>
              </li>                            
            </ul>
          </li>  -->         
<!--           <li class="nav-header"><strong>SETTINGS</strong></li>
          <li class="nav-item">
            <a href="<?= site_url('admin/backupfile'); ?>" class="nav-link">
              <i class="nav-icon fas fa-upload"></i>
              <p>
                Backup Data
              </p>
            </a>
          </li>          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('user/add_user'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('admin/sp_viewaccounts'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage User</p>
                </a>
              </li>                            
            </ul>
          </li>  -->                  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->    
    <?php endif; ?>
  </div>
  <!-- /.sidebar -->
</aside>

