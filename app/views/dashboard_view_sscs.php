<?php
$pageTitle = "CSWD | SSCS Table";
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
          <h1>Data of SSCS</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data of SSCS</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    <div class="col-4">
      <a href="<?= site_url('pmcrecord/viewpmc')?>" class="btn btn-primary"><i class="nav-icon fas fa-plus-square"></i> Add</a>
    </div>
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
                    <th>Attachments</th>
                    <th>Full Name</th>
                    <th>Sex</th>
                    <th>Address</th>
                    <th>Barangay</th>
                    <th>Where to refer the SSCS</th>
                    <th>Request Status</th>
                    <th style="text-align: center;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $row):?>
                   <tr style="text-align: center;">
                    <td>
                      <a href="<?php echo BASE_URL .'uploads/image/sscs_pic/'. $row['cs_clinicalabstract']; ?>" target="_blank">Clinical Abstract</a>
                      <br>
                      <a href="<?php echo BASE_URL .'uploads/image/sscs_pic/'. $row['cs_clinicalbills']; ?>" target="_blank">Clinical Bills</a>
                      <br>
                      <a href="<?php echo BASE_URL .'uploads/image/sscs_pic/'. $row['cs_medicalinfo']; ?>" target="_blank">Medical Information</a>
                      <br>
                      <a href="<?php echo BASE_URL .'uploads/image/sscs_pic/'. $row['cs_requestofscsr']; ?>" target="_blank">Request of SCSR</a>                      
                    </td>
                    <td><?= $row['cs_fname'].' '.$row['cs_mname'].' '.$row['cs_lname']?></td>
                    <td><?= $row['cs_sex']?></td>
                    <td><?= $row['cs_address']?></td>
                    <td><?= $row['cs_brgy']?></td>
                    <td><?= $row['cs_requestname']?></td>
                    <td>
                      <?php if($row['request_status']=="Pending") {?><div class="badge badge-warning">Pending</div><?php }elseif($row['request_status']=="Approved") { ?><div class="badge badge-success">Approved</div> <?php }elseif($row['request_status']=="Disapproved") {?><div class="badge badge-danger">Disapproved</div> <?php }elseif($row['request_status']=="Incomplete") {?><div class="badge badge-info">Incomplete</div><?php } ?>
                    </td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <a href="<?=site_url('sscsrecord/sscs_delrecords/'.$row['cs_id'].'')?>" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></a>
                        <a href="<?=site_url('sscsrecord/edit_sscsrecords/'.$row['cs_id'].'')?>" class="btn btn-success btn-sm"><i class="fa fa-fw fa-edit"></i></a>
                        <a href="<?=site_url('sscsrecord/pdf_view_sscs/'.$row['cs_id'].'')?>" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-fw fa-print"></i></a>
                      </div>                    
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