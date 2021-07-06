<?php
$pageTitle = "CSWD | Calendar of Activities";
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
          <h1>Calendar of Activities</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Calendar of Activities</li>
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
          <div class="card card-primary">
            <!-- /.card-header -->
            <div class="card-body">
              <form action="<?= site_url('admin/insert_coa');?>" method="post">
                <div class="row">
                  <div class="col-3">
                    <label for="coa_date">Set Date:</label>
                    <input type="date" class="form-control" name="coa_date">
                  </div>
                  <div class="col-6">
                    <label for="coa_name">Name of the Activities:</label>
                    <div class="input-group ">
                      <input type="text" class="form-control" name="coa_name" placeholder="Enter Name of Activities*">
                      <span class="input-group-append">
                        <button type="submit" name="submit" class="btn btn-info">Add Activities</button>
                      </span>
                    </div> 
                  </div>
                </div> 
                <!-- /.row -->
              </form>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr style="text-align: center;" class="bg-primary">
                    <th>Set Date</th>
                    <th>Activity Name</th>
                    <th style="text-align: center;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $row): ?>
                    <tr style="text-align: center;">
                      <td><?= date('F j, Y',strtotime($row['coa_date']))?></td>
                      <td><?= $row['coa_name']?></td>                      
                      <td><a href="<?=site_url('admin/coa_delrecords/'.$row['coa_id'].'')?>" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i> Delete</a></td>
                    </td>
                  </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>                        
      </div>
      <!-- /.col-->
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