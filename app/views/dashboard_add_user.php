<?php
$pageTitle = "CSWD | User Management";
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
          <h1>User Account</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add User</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <form action="<?= site_url('admin/insert_info_post'); ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add User Account</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-4">
                    <label for="fullname">Full Name <span style="color: red">*</span></label>
                    <input type="text" class="form-control" placeholder="Full Name" name="fullname">
                  </div>                  

                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add User</button>
                </div>  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </form>
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include(ROOT . 'templates/footer.php');
?>