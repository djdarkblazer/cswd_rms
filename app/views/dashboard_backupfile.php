<?php
$pageTitle = "CSWD | Backup Data File";
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
          <h1>Backup Data File</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Backup Data File</li>
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
            <div class="card-header">
              <h3 class="card-title">Backup Data File</h3>
            
            </div>

            <!-- /.card-header -->
            <form action="<?= site_url('admin/backupfile_now'); ?>" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <label for="backup_name">File Name</label>
                    <input type="text" class="form-control" name="backup_name" autofocus="">
                  </div>                                                                 
                  <div class="col-4" >
                    <label for="fileToUpload">Upload File</label>
                    <div class="input-group">

                      <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" style="padding: 3px">
                      <span class="input-group-append">
                        <button type="submit" class="btn btn-primary">Backup File</button>
                      </span>
                    </div>
                  </div>                                       
                </div>

              </div>
            </form>
            <!-- /.card-body -->



            <!-- /.card-header -->
            <div class="card-body">
              <table id="myTable" class="table table-bordered table-striped dataTable dtr-inline"  width="100%">
                <thead >
                  <tr style="text-align: center;">
                    <th>Date</th>
                    <th>File Name</th>
                    <th>Data File</th>
                    <th style="text-align: center;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $row):?>
                    <tr style="text-align: center;">
                      <td><?= date('M d, Y',strtotime($row['backup_date'])); ?></td>
                      <td><?=$row['backup_name']?></td>
                      <td><?=$row['backup_file']?></td>
                      <td>
                        <div class="btn-group">
                          <a href="<?=site_url('admin/delete_backup/'.$row['backup_id'].'')?>" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                          <a href="<?=site_url('admin/download_backup/'.$row['backup_id'].'')?>" class="btn btn-success"><i class="fa fa-fw fa-download"></i></a>                    
                        </div>                      
                      </td>                  
                    </tr> 
                  </tbody>
                <?php endforeach;?>
                <tfoot>
                  <tr style="text-align: center;">
                    <th>Date</th>
                    <th>File Name</th>
                    <th>Data File</th>
                    <th style="text-align: center;">Action</th>
                  </tr>
                </tfoot>
              </table>
            </div>
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