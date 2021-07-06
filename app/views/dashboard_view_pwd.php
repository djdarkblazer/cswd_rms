<?php
$pageTitle = "CSWD | PWD Table";
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
          <h1>Data of Person with Disability</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data of Person with Disability</li>
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
            <div class="card-body">
              <table id="myTable" class="table table-bordered table-striped dataTable dtr-inline"  width="100%">
                <thead >
                  <tr style="text-align: center;" class="bg-primary">
                    <th>ID Picture</th>
                    <th>Full Name</th>
                    <th>Sex</th>
                    <th>DOB</th>
                    <th>Type of Disability</th>
                    <th>Specific Disability</th>
                    <th>Address</th>
                    <th>Request Status</th>
                    <th style="text-align: center;">Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php foreach($data as $row):?>
                   <tr style="text-align: center;">
                    <td><img src="<?php echo BASE_URL .'uploads/image/pwd_idpic/'. $row['image']; ?>" width="100" height="100"></td>
                    <td><?= $row['pwd_fname']; ?> <?= $row['pwd_mname']; ?> <?= $row['pwd_lname']; ?></td>
                    <td><?= $row['pwd_sex']; ?></td>
                    <td><?= date('M d, Y',strtotime($row['pwd_dob'])); ?></td>
                    <td><?= $row['pwd_typedis']; ?></td>
                    <td><?= $row['pwd_typespecify']; ?></td>
                    <td><?= $row['pwd_address']; ?>, Brgy.<?= $row['pwd_brgy']; ?>, <?= $row['pwd_city']; ?>, <?= $row['pwd_province']; ?></td>
                    <td><?php if($row['request_status']=="Pending") {?><div class="badge badge-warning">Pending</div><?php }elseif($row['request_status']=="Approved") { ?><div class="badge badge-success">Approved</div> <?php }elseif($row['request_status']=="Disapproved") {?><div class="badge badge-danger">Disapproved</div> <?php }elseif($row['request_status']=="Incomplete") {?><div class="badge badge-info">Incomplete</div><?php } ?></td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <a href="<?=site_url('admin/pwd_delrecords/'.$row['pwd_id'].'')?>" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></a>
                        <a href="<?=site_url('admin/edit_pwd_records/'.$row['pwd_id'].'')?>" class="btn btn-success btn-sm"><i class="fa fa-fw fa-edit"></i></a>
                        <a href="<?=site_url('admin/pdf_view_pwd/'.$row['pwd_id'].'')?>" class="btn btn-info btn-sm" target="_blank"><i class="fa fa-fw fa-print"></i></a>                     
                      </div>                      
                    </td>
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