<!-- Footer --> 
<footer class="footer-dark">
  <div class="container">
    <div  class="row"> 
      <div class="col-sm-6 col-md-3 item"> 
        <h3>Page</h3> 
        <ul>
          <li><i class="fa fa-file" aria-hidden="true"></i><a href="<?= SITE_URL('website/services'); ?>"> Services</a></li> 
          <li><i class="fa fa-file" aria-hidden="true"></i><a href="<?= SITE_URL('website/events'); ?>"> Events</a></li> 
          <li><i class="fa fa-file" aria-hidden="true"></i><a href="<?= SITE_URL('website/assistance'); ?>"> Assistance</a></li> 
        </ul> 
      </div> 
      <div class="col-sm-6 col-md-3 item"> 
        <h3>Related Links</h3>
        <ul>
          <li><i class="fa fa-link" aria-hidden="true"></i><a href="http://web.tourism.gov.ph/" target="blank_"> Department of Tourism</a></li>
          <li><i class="fa fa-link" aria-hidden="true"></i><a href="https://www1.pagasa.dost.gov.ph/" target="blank_"> PAGASA</a></li>
          <li><i class="fa fa-link" aria-hidden="true"></i><a href="https://www.sss.gov.ph/" target="blank_"> Social Security System</a></li>
          <li><i class="fa fa-link" aria-hidden="true"></i><a href=""> Provincial Government of Oriental Mindoro</a></li>
          <li><i class="fa fa-link" aria-hidden="true"></i><a href="http://www.tesda.gov.ph/" target="blank_"> TESDA</a></li>
          <li><i class="fa fa-link" aria-hidden="true"></i><a href="http://www.deped.gov.ph/" target="blank_"> Department of Education</a></li>
          <li><i class="fa fa-link" aria-hidden="true"></i><a href="http://www.dict.gov.ph/" target="blank_"> Department of Information and Communications Technology</a></li>
        </ul>
        <br>   

      </div> 
      <div class="col-md-6 item text"> 
        <p><h3>CSWD Office Address:</h3>
          <i class="fas fa-map-marked-alt"></i> 1/F New City Hall, Brgy. Guinobatan, Calapan
          City
          <br>
          <i class="fas fa-phone-alt"></i> Tel. # (043) 286-7440
          <br><i class="fas fa-envelope">
          </i> Email Address: cswdcalapan@yahoo.com
        </p>
      </div>
      <div class="col item social"> 
        <a href="https://www.facebook.com/Calapan-City-Social-Welfare-and-Development-107102580923157/" target="blank_"><i class="fab fa-facebook"></i></a> 
        <a href="#"><i class="fab fa-twitter"></i></a> 
        <a href="#"><i class="fab fa-snapchat"></i></a> 
        <a href="#"><i class="fab fa-instagram"></i></a> 
      </div> 
    </div>

    <p class="copyright">&copy <?= date('Y'); ?> CALAPAN CITY SOCIAL WELFARE AND DEVELOPMENT<br>MAINTAINED BY F1-TECH Inc. <i class="fa fa-heart" style="color: red"></i></p>
  </div> 
  <div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;">        
  </footer>
  <!-- /Footer -->



  <!-- Optional JavaScript; choose one of the two! -->
  <script type="text/javascript" src="https://content.jwplatform.com/libraries/rN2Y8WSP.js"></script>
  <script type="text/javascript">jwplayer.key = "moo1YXjnreqwrtTJvzDFk0rFwdQcgOQ5t9blXA==";</script>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


<script type="text/javascript" src="<?= site_url(); ?>assets/plugins/slick-1.8.1/slick/slick.min.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/fontawesome.min.js" integrity="sha512-KCwrxBJebca0PPOaHELfqGtqkUlFUCuqCnmtydvBSTnJrBirJ55hRG5xcP4R9Rdx9Fz9IF3Yw6Rx40uhuAHR8Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  -->
  <!-- Custom JScript -->

  <?php echo load_js(array('js/preloader')); ?>
  <?php echo load_js(array('js/slickpost')); ?>
  <!-- /.Custom JScript -->

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
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.0/dist/chart.min.js"></script>
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
<script src="<?= site_url(); ?>assets/dist/js/demo.js"></script>


<?php echo load_js(array('js/opt_address')); ?>
<?php echo load_js(array('js/pie')); ?>

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

<script type="text/javascript" language="javascript">
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome',
          'IE',
          'FireFox',
          'Safari',
          'Opera',
          'Navigator',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>
</body>
</html>