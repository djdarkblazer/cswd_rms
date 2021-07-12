<?php
$pageTitle = "CSWD | Dashboard";
define("ROOT", __DIR__ ."/");
include(ROOT . '/templates/header.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" >
  <!-- Content Header (Page header) -->
<?php if($this->session->userdata('role') == "Administrator") :?>  
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DASHBOARD</h1>
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
<section class="content" >
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?= $data['total']?></h3>
                <p>Total<br>Client Request</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $data['approved']?></h3>
                <p>Approved<br>Request</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-check"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $data['napproved']?></h3>
                <p>Disapproved<br>Request</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-times"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $data['pending']?></h3>
                <p>Pending<br>Request</p>
              </div>
              <div class="icon">
                <i class="fas fa-spinner"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $data['incomplete']?></h3>
                <p>Incomplete<br>Requirements</p>
              </div>
              <div class="icon">
                <i class="fas fa-times-circle"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->          
        </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
          <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Donut Chart for Solo Parent and PWD</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="sales-chart" style="height: 250px; width: auto;"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (LEFT) -->
          <div class="col-md-6">
            <!-- LINE CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Line Chart for Solo Parent & PWD (2021)</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="bar-chart" style="height: 250px; width: auto;"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col (RIGHT) -->          
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
<?php elseif($this->session->userdata('role') == "Employee") :?>
<div class="container-fluid" mt-2>
    <center>
      <h1><strong>EMPLOYEE DASHBOARD</strong></h1>
    </center>
    <center>
<h1 class="slider-title"><img src="<?= SITE_URL('assets/img/logo.png'); ?>" alt="cswdlogo" width="500" height="500" style="margin-right: 5px;  border-radius: 50%;">      
    </center>
</div>

<?php endif; ?>


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->  
<?php
include(ROOT . '/templates/footer.php');
?>