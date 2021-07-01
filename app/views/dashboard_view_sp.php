<?php
	$pageTitle = "CSWD | Solo Parent Table";
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
            <h1>Data of Solo Parents</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data of Solo Parents</li>
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
                <h3 class="card-title">Solo Parent Records</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="myTable" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr style="text-align: center;">
                    <th>Full Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>DOB</th>
                    <th>POB</th>
                    <th>Address</th>
                    <th>Educational Attainment</th>
                    <th>Occupation</th>
                    <th>Monthly Income</th>
                    <th>Progress</th>
                    <th style="text-align: center;">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php foreach($data as $row):?>
                  	<tr style="text-align: center;">
                  		<td><?=$row['sp_fullname']?></td>
                  		<td><?=$row['sp_age']?></td>
                  		<td><?=$row['sp_sex']?></td>
                  		<td><?= date('M d, Y',strtotime($row['sp_sex'])); ?></td>
                  		<td><?= $row['sp_pob'] ?></td>
                  		<td><?=$row['sp_address']?></td>
                  		<td><?=$row['sp_educational']?></td>
                  		<td><?=$row['sp_occupation']?></td>
                  		<td><?=$row['sp_monthlyincome']?></td>
                  		<td><?php if($row['request_status'] == "approved") {?> <div class="badge badge-success">Approved</div><?php } elseif($row['request_status'] == "pending") { ?><div class="badge badge-warning">Pending</div><?php } elseif ($row['request_status'] == "disapproved") { ?><div class="badge badge-danger">Disapproved</div><?php } elseif ($row['request_status'] == "incomplete") { ?><div class="badge badge-info">Incomplete</div><?php } ?> </td>
                  		<td style="text-align: center;">
                  			<a href="<?=site_url('admin/sp_delrecords/'.$row['sp_id'].'')?>" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></a>
                  			<a href="<?=site_url('admin/edit_records/'.$row['sp_id'].'')?>" class="btn btn-success btn-sm"><i class="fa fa-fw fa-edit"></i></a>
                  			<a href="<?=site_url('admin/pdf_view/'.$row['sp_id'].'')?>" class="btn btn-info btn-sm"><i class="fa fa-fw fa-file"></i>PDF</a></td>
                  		</td>
                  	</tr>
                  	<?php endforeach;?> 
                  </tbody>
                  <tfoot>
                  <tr style="text-align: center;">
                    <th>Full Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>DOB</th>
                    <th>POB</th>
                    <th>Address</th>
                    <th>Educational Attainment</th>
                    <th>Occupation</th>
                    <th>Monthly Income</th>
                    <th>Progress</th>
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