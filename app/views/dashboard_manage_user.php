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
            <li class="breadcrumb-item active">User Accounts</li>
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

              <table id="myTable" class="table table-bordered"  width="100%">
                <thead>
                  <tr style="text-align: center;" class="bg-primary">
                    <th>Image</th>
                    <th>Full Name</th>
                    <th>Role</th>
                    <th>Email Address</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php foreach($data as $row): ?>
                   <tr style="text-align: center;">
                    <td><img src="<?php echo BASE_URL .'uploads/image/user_pic/'. $row['image']; ?>" width="100" height="100"></td>     
                    <td><?= $row['firstname'].' '.$row['middlename'].' '.$row['lastname']?></td>
                    <td><?= $row['role']?></td>
                    <td><?= $row['email']?></td>
                    <td><?= $row['username']?></td>
                    <td><?php if ($row['status']=="Activated") {?><div class="badge badge-success">Activated</div><?php } elseif($row['status']=="Deactivated") {?><div class="badge badge-danger">Deactivated</div><?php } ?></td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <a href="<?=site_url('admin/del_multiuser/'.$row['id'].'')?>" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></a>
                        <a href="" class="btn btn-success btn-sm"><i class="fa fa-fw fa-edit"></i></a>                    
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