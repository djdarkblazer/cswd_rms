<?php
$pageTitle = "CSWD | Admin Update";
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
          <h1>Admin Update File</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Admin Update Data File</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <div class="card">

            <!-- /.card-header -->
            <form action="<?= site_url('requestuploads/admin_updating_file'); ?>" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <input type="hidden" name="ru_id" value="<?= $data['ru_id'];?>">

                  <div class="col-2">
                    <label for="ru_date">Date Uploaded</label>
                    <input type="date" class="form-control pull-right" name="ru_date" value="<?php echo date("Y-m-d"); ?>" readonly>
                  </div>
                  <div class="col-2">
                    <label for="ru_username">Username</label>
                    <input type="text" class="form-control" name="ru_username" readonly value="<?= $data['ru_username']?>">
                  </div>                                      
                  <div class="col-2">
                    <label for="ru_empname">Employee Name</label>
                    <input type="text" class="form-control" name="ru_empname" value="<?= $data['ru_empname']?>" readonly>
                  </div>
                  <div class="col-2">
                    <label for="ru_reqfor">Request is</label>
                    <select class="form-control" name="ru_reqfor">
                      <option value="Hand Signed">Hand Signed</option>
                      <option value="E-Signed">E-Signed</option>
                      <option value="For Review">For Review</option>
                    </select>
                  </div>
                  <div class="col-2">
                    <label for="ru_status">Request Status</label>
                    <select class="form-control" name="ru_status">
                      <option value="Approved">Approved</option>
                      <option value="Disapproved">Disapproved</option>
                      <option value="Pending">Pending</option>
                    </select>
                  </div>                                                                                                     
                  <div class="col-4 mt-2" >
                    <label for="fileToUpload">Upload File</label>
                    <div class="input-group">
                      <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" style="padding: 3px">
                      <span class="input-group-append">
                        <button type="submit" class="btn btn-primary">Update File</button>
                      </span>
                    </div>
                    <p class="col-12 mt-2"><strong>File Name:</strong> <?= $data['ru_uploaded']?></p>
                  </div>                                       
                </div>                                       
                </div>
              </div>
            </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include(ROOT . 'templates/footer.php');
?>