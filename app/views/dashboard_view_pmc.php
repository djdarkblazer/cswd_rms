<?php
$pageTitle = "CSWD | PMC Table";
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
          <h1>Data of PMC</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data of PMC</li>
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
                    <th>Application of Marriage</th>
                    <th>Bride's Name</th>
                    <th>Groom's Name</th>
                    <th>Address</th>
                    <th>Barangay</th>
                    <th>Date of Marriage</th>
                    <th>Request Status</th>
                    <th style="text-align: center;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $row):?>
                   <tr style="text-align: center;">
                    <td><a href="<?php echo BASE_URL .'uploads/image/pmc_pic/'. $row['pmc_aomimage']; ?>" target="_blank"><img src="<?php echo BASE_URL .'uploads/image/pmc_pic/'. $row['pmc_aomimage']; ?>" width="100" height="100"></a>
                    </td>
                    <td><?= $row['pmc_fname'].' '.$row['pmc_mname'].' '.$row['pmc_lname']?></td>
                    <td><?= $row['pmcg_fname'].' '.$row['pmcg_mname'].' '.$row['pmcg_lname']?></td>
                    <td><?= $row['pmc_address']?></td>
                    <td><?= $row['pmc_brgy']?></td>
                    <td><?= date('F d, Y',strtotime($row['pmc_dom']))?></td>
                    <td><?php if($row['request_status']=="Pending") {?><div class="badge badge-warning">Pending</div><?php }elseif($row['request_status']=="Approved") { ?><div class="badge badge-success">Approved</div> <?php }elseif($row['request_status']=="Disapproved") {?><div class="badge badge-danger">Disapproved</div> <?php }elseif($row['request_status']=="Incomplete") {?><div class="badge badge-info">Incomplete</div><?php } ?></td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <a href="<?=site_url('pmcrecord/pmc_delrecords/'.$row['pmc_id'].'')?>" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></a>
                        <a href="<?=site_url('pmcrecord/edit_pmcrecords/'.$row['pmc_id'].'')?>" class="btn btn-success btn-sm"><i class="fa fa-fw fa-edit"></i></a>
                        <a href="<?=site_url('pmcrecord/pdf_view_pmc/'.$row['pmc_id'].'')?>" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-fw fa-print"></i></a>
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