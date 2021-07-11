
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
<!-- Morris.js charts -->
<script src="<?= site_url(); ?>assets/plugins/raphael/raphael.min.js"></script>
<script src="<?= site_url(); ?>assets/plugins/morris.js/morris.min.js"></script>

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<script src="<?= site_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= site_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- FastClick -->
<script src="<?= site_url(); ?>assets/plugins/fastclick/lib/fastclick.js"></script>
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
<!-- jquery-validation -->
<script src="<?= site_url(); ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= site_url(); ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>

<!-- Custom Script -->
<?php echo load_js(array('js/opt_address')); ?>
<?php echo load_js(array('js/user_validation')); ?>
<?php echo load_js(array('js/sp_validation')); ?>
<?php echo load_js(array('js/multi_delete')); ?>
<!-- //Custom Script -->


<script>
  CKEDITOR.replace( 'editor1',{
    extraPlugins : 'colorbutton',
  });
  CKEDITOR.replace( 'editor1',{
    extraPlugins : 'easyimage',
  }); 
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
  $('#status_req').change(function() {
    $('#status_disapproved').prop('hidden', true);
    if ($(this).val() == 'Disapproved') {
      $('#status_disapproved').prop('hidden', false);
    }
  });  
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
      toast: true,
      position: 'top-right',
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

<script type="text/javascript">
    //DONUT CHART
    new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: ["cyan", "#f56954", "yellow","#007bff","red"],
      data: [
      {label: "Approved", value: <?= $data['approved'];?>},
      {label: "Disapproved", value: <?= $data['napproved'];?>},
      {label: "Pending", value: <?= $data['pending'];?>},
      {label: "Total Client", value: <?= $data['total'];?>},
      {label: "Incomplete", value: <?= $data['incomplete'];?>},
      ],
      hideHover: 'auto'
    });

    //BAR CHART
    new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
      {y: <?= date('Y'); ?>, a: <?= $data['total'];?>, b: <?= $data['approved'];?>,c: <?= $data['napproved'];?>,d: <?= $data['pending'];?>, e: <?= $data['incomplete'];?>},

      ],
      barColors: ['#007bff', '#f56954','lime', '#00a65a','violet'],
      xkey: 'y',
      ykeys: ['a', 'b','c','d','e'],
      labels: ['Total Client','Approved', 'Disapproved','Pending','Incomplete'],
      hideHover: 'auto'
    });    
  </script> 
</body>
</html>
