<?php
$pageTitle = "CSWD | PWD Reports";
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
          <h1>PWD Reports</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">PWD Reports</li>
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
            <!-- /.card-header -->
            <form action="<?= site_url('reports/fetch_pwd_records'); ?>" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="col-4" >
                    <label for="pwd_brgy">Barangay <span style="color: red">*</span></label>
                    <div class="input-group">
                      <select id="rec_mode" class="form-control" name="pwd_brgy">
                      </select>
                      <span class="input-group-append">
                        <button type="submit" class="btn btn-primary">Get Data</button>
                      </span>                      
                    </div>                    
                  </div>                                                                      
                </div>
                <div class="mt-4">
                  <a href="<?= site_url('reports/get_report_pwd'); ?>" class="btn btn-primary" target="_blank">Generate Reports</a>
                </div>                
              </div>
            </form>
            <!-- /.card-body -->


            <div class="card-body">
              <table id="myTable" class="table table-bordered table-striped dataTable dtr-inline"  width="100%">
                <thead >
                  <tr style="text-align: center;" class="bg-primary">
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Barangay</th>
                    <th>Type of Disability</th>
                    <th>Specific Disability</th>
                    <th>Valid Until</th>
                    <th>Request Status</th>
                  </tr>
                </thead>
                <tbody>
                 <?php foreach($data as $row):?>
                   <tr style="text-align: center;">
                    <td><?= $row['pwd_fname']; ?> <?= $row['pwd_mname']; ?> <?= $row['pwd_lname']; ?></td>
                    <td><?=$row['pwd_address'].', '.$row['pwd_city'].', '.$row['pwd_province']?></td>
                    <td><?=$row['pwd_brgy']?></td>
                    <td><?= $row['pwd_typedis']; ?></td>
                    <td><?= $row['pwd_typespecify']; ?></td>
                    <td><?= date('M d, Y',strtotime($row['expiration_date'])); ?></td>
                    <td><?php if($row['request_status']=="Pending") {?><div class="badge badge-warning">Pending</div><?php }elseif($row['request_status']=="Approved") { ?><div class="badge badge-success">Approved</div> <?php }elseif($row['request_status']=="Disapproved") {?><div class="badge badge-danger">Disapproved</div> <?php }elseif($row['request_status']=="Incomplete") {?><div class="badge badge-info">Incomplete</div><?php } ?></td>
                  </td>
                </tr>
              <?php endforeach;?> 
            </tbody>
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