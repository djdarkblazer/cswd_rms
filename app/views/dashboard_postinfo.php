<?php
$pageTitle = "CSWD | Post Information Panel";
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
          <h1>Post Information Panel</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Post Information Panel</li>
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
                <h3 class="card-title">Add Post  </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-2">
                    <label for="info_date">Set Date</label>
                    <input type="date" class="form-control pull-right" name="info_date">
                  </div>
                  <div class="col-3">
                    <label for="info_title">Set Title</label>
                    <input type="text" class="form-control" name="info_title" autofocus="">
                  </div>                                                                 
                  <div class="col-3" >
                    <label for="fileToUpload">Display Picture</label>
                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" style="padding: 3px">
                  </div>
                  <div class="col-12 mt-4">
                    <textarea class="form-control" name="info_information" id="editor1"></textarea>
                  </div>                                         
                </div>
                <div class="card-footer">

                  <button type="submit" class="btn btn-primary">Add Post</button>

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