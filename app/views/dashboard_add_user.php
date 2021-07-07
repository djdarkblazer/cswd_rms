<?php
$pageTitle = "CSWD | User Management";
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
          <h1>User Account</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add User</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <form action="#" method="POST" enctype="multipart/form-data" id="usr_validation" >
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add User Account</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-2 form-group">
                    <label for="lastname">Last Name <span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="lastname">
                  </div>
                  <div class="col-2 form-group">
                    <label for="firstname">First Name <span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="firstname">
                  </div>
                  <div class="col-2 form-group">
                    <label for="middlename">Middle Name <span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="middlename">
                  </div>
                  <div class="col-3 form-group">
                    <label for="email">Email Address <span style="color: red">*</span></label>
                    <input type="email" class="form-control" name="email">
                  </div>                  
                  <div class="col-3 form-group">
                    <label for="username">Username <span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="username">
                  </div>                                    
                  <div class="col-2 form-group">
                    <label for="password">Password <span style="color: red">*</span></label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  <div class="col-2 form-group">
                    <label for="role">Role <span style="color: red">*</span></label>
                    <select name="role" class="form-control">
                      <option value="Administrator">Administrator</option>
                      <option value="Employee">Employee</option>
                    </select>
                  </div>
                  <div class="col-3 form-group" >
                    <label for="fileToUpload">Upload Photo <span style="color: red">*</span></label>
                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" style="padding: 3px" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                  </div>
                  <div class="col-3 form-group">
                    <label>Photo Preview</label>
                    <img id="output" width="150" height="150" style="border: 2px solid black; padding:5px" />
                  </div>                                    
                </div>
                <div class="col-3 form-group">
                  <button type="submit" class="btn btn-primary">Add User</button>
                </div>                   
              </div>
              <!-- /.card-body -->              
            </div>
            <!-- /.card -->            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </form>
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include(ROOT . 'templates/footer.php');
?>