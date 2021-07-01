<?php
	$pageTitle = "CSWD | User Account";
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
            <h1>User Accounts</h1>
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
                <h3 class="card-title">User Accounts</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-striped table-bordered table-hover" width="99%">
                  <thead>
                  <tr style="text-align: center;">
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email Address</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Created Date</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php foreach($data as $row):?>
                  	<tr style="text-align: center;">
                      <td><?= $row['username'] ?></td>
                      <td><?= $row['password'] ?></td>
                      <td><?= $row['email'] ?></td>
                      <td><?= $row['role'] ?></td>
                      <td><div class="badge badge-success"><?= $row['status'] ?></div></td>
                      <td><?= $row['created_date'] ?></td>
                  	</tr>
                  	<?php endforeach;?> 
                  </tbody>
                  <tfoot>
                  <tr style="text-align: center;">
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email Address</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Created Date</th>
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