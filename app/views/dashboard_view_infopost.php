<?php
$pageTitle = "CSWD | View Post";
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
          <h1>View Post</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">View Post</li>
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
              <h3 class="card-title">View Post</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="myTable" class="table table-bordered table-striped dataTable dtr-inline"  width="100%">
                <thead >
                  <tr style="text-align: center;">
                    <th>Display Picture</th>
                    <th>Set Date</th>
                    <th>Title</th>
                    <th>Information</th>
                    <th style="text-align: center;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $row):?>
                    <tr style="text-align: center;">
                      <td><img src="<?php echo BASE_URL .'uploads/post/'. $row['image']; ?>" width="100" height="100"></td>
                      <td><?= date('M d, Y',strtotime($row['info_date'])); ?></td>
                      <td><?=$row['info_title']?></td>
                      <td><?=$row['info_information']?></td>
                      <td>
                        <div class="btn-group btn-group-sm">
                          <a href="" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach;?> 
                </tbody>
                <tfoot>
                  <tr style="text-align: center;">
                    <th>Display Picture</th>
                    <th>Set Date</th>
                    <th>Title</th>
                    <th>Information</th>
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