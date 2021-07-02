
<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.1.0
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= site_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= site_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= site_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= site_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= site_url(); ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= site_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= site_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= site_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= site_url(); ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= site_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= site_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= site_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= site_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= site_url(); ?>/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= site_url(); ?>assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= site_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- SweetAlert2 -->
<script src="<?= site_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= site_url(); ?>assets/plugins/toastr/toastr.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?= site_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= site_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= site_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= site_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= site_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= site_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= site_url(); ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= site_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= site_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= site_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= site_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= site_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= site_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>

<?php echo load_js(array('js/opt_address')); ?>

<script>
    window.onload = function() {
        CKEDITOR.replace( 'editor1' );
    };
</script>

<script type="text/javascript">
  $(document).ready( function () {
      $('#myTable').dataTable( {
          deferRender:    true,
          scroller:       true,
          scrollCollapse: true,
      } );
  } );  
</script>

<script type="text/javascript">
$('#pwd_typedis').change(function() {
  $('#pwd_typespecify').prop('readonly', true);
  if ($(this).val() == 'Other') {
    $('#pwd_typespecify').prop('readonly', false);
  }
});  
</script>


<script type="text/javascript" src="<?= SITE_URL()?>assets/sweetalert-2.1.0/docs/assets/sweetalert/sweetalert.min.js"></script>

<script type="text/javascript" language="javascript">
  $('#bday').change(function(){
    let birthday = new Date($(this).val()).getTime();
    let now = new Date().getTime();
    let dateDiff = Math.floor((((now - birthday)/ 1000)/ (60 * 60 * 24))/ 365.25);

    if(dateDiff == NaN || dateDiff <= 0){
      $('#age').val(0);
    } else {
      $('#age').val(dateDiff);
    }
  });
</script>
<!-- Sweet Alert -->
<script type="text/javascript" language="javascript">
  $(document).ready(function () {
    var Toast = Swal.mixin({
      toast: false,
      position: 'center',
      showConfirmButton: false,
      timer: 3000
    });
    var Toasted = Swal.mixin({
      toast: false,
      position: 'center',
      showConfirmButton: true,
    });    

    <?php if($this->session->flashdata('success')) : ?>
      Toast.fire({
        text: "<?php echo $this->session->flashdata('success') ?>",
        icon: "success",
      });
    <?php endif; ?>
    <?php if($this->session->flashdata('error')) : ?>
      Toast.fire({

        text: "<?php echo $this->session->flashdata('error') ?>",
        icon: "error",
      });
    <?php endif; ?>
    <?php if($this->session->flashdata('delete')) : ?>
      Toast.fire({

        text: "<?php echo $this->session->flashdata('delete') ?>",
        icon: "success",
      });
    <?php endif; ?> 
    <?php if(!empty(validation_errors())) : ?>
      Toasted.fire({
        html: "<?php echo validation_errors(); ?>",
        icon: "warning",
      });
    <?php endif; ?>            
  });
</script>
</body>
</html>
