<?php
$pageTitle = "CSWD | Admin Request";
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
          <h1>Admin Request File</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Admin Request Data File</li>
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
            <form action="<?= site_url('requestuploads/admin_backupfile_now'); ?>" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="col-2">
                    <label for="ru_date">Date Today</label>
                    <input type="date" class="form-control pull-right" name="ru_date" value="<?php echo date("Y-m-d"); ?>" readonly>
                  </div>
                  <div class="col-3">
                    <label for="ru_username">Username</label>
                    <div class="input-group ">
                      <div class="input-group-prepend ">
                        <span class="input-group-text ">
                          <select id="enable_check">
                            <option value="Enable">Enable</option>
                            <option value="Disable" selected="Disable">Disable</option>
                          </select>
                        </span>
                      </div>
                      <input id="enable_user" type="text" class="form-control" name="ru_username" value="<?php echo $this->session->userdata('username')?>" readonly>
                    </div>                   
                  </div>                                      
                  <div class="col-3">
                    <label for="ru_empname">Employee Name</label>
                    <input type="text" class="form-control" name="ru_empname" autofocus="">
                  </div>                                                                                    
                  <div class="col-4" >
                    <label for="fileToUpload">Upload File</label>
                    <div class="input-group">
                      <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" style="padding: 3px">
                      <span class="input-group-append">
                        <button type="submit" class="btn btn-primary">Upload File</button>
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
                    <th>Username</th>
                    <th>File Name</th>
                    <th>Employee Name</th>
                    <th>Request For</th>
                    <th>Request Status</th>
                    <th style="text-align: center;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $row):?>
                    <tr style="text-align: center;">
                      <td><?= date('F d, Y',strtotime($row['ru_date'])); ?></td>
                      <td><?= $row['ru_username']?></td>
                      <td><?= $row['ru_uploaded']?></td>
                      <td><?= $row['ru_empname']?></td>
                      <td><?= $row['ru_reqfor']?></td>
                      
                      <td><?php if($row['ru_status']=="Pending") {?><div class="badge badge-warning">Pending</div><?php }else if ($row['ru_status']=="Approved") {?><div class="badge badge-success">Approved</div><?php } ?></td>     
                      <td>
                        <div class="btn-group btn-group-sm">
                          <a href="<?=site_url('requestuploads/edit_fetch_file/'.$row['ru_id'].'')?>" class="btn btn-success"><i class="fa fa-fw fa-edit"></i></a>                          
                          <a href="<?=site_url('requestuploads/delete_reqfileadmin/'.$row['ru_id'].'')?>" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                          <a href="<?=site_url('requestuploads/download_reqfile/'.$row['ru_id'].'')?>" class="btn btn-info"><i class="fa fa-fw fa-download">                          
                          </i></a>                 
                        </div>                      
                      </td>                  
                    </tr> 
                  </tbody>
                <?php endforeach;?>
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