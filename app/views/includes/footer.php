<!-- Footer --> 
<footer class="footer-dark">
  <div class="container">
    <div  class="row"> 
      <div class="col-sm-6 col-md-3 item"> 
        <h3>Page</h3> 
        <ul>
          <li><i class="fa fa-file" aria-hidden="true"></i><a href="<?= SITE_URL('website/services'); ?>"> Services</a></li> 
          <li><i class="fa fa-file" aria-hidden="true"></i><a href="<?= SITE_URL('website/information'); ?>"> Information</a></li>
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

  <script type="text/javascript" src="<?= SITE_URL()?>/assets/js/sweetalert.min.js"></script>

  <script>
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
  <script>
    $(document).ready(function () {
      <?php if($this->session->flashdata('success')) : ?>
        swal({
          title: "Succesfull",
          text: "<?= $this->session->flashdata('success') ?>",
          icon: "success",
          button: "Done",
        });
      <?php endif; ?>
      <?php if($this->session->flashdata('error')) : ?>
        swal({
          title: "Error Occured",
          text: "<?= $this->session->flashdata('error') ?>",
          icon: "error",
          button: "Done",
        });
      <?php endif; ?>
      <?php if($this->session->flashdata('delete')) : ?>
        swal({
          title: "Deleted",
          text: "<?= $this->session->flashdata('delete') ?>",
          icon: "error",
          button: "Done",
        });
      <?php endif; ?>    
      <?php if(!empty(validation_errors())) : ?>
        swal({
          html: true,
          title: "Error",
          text: "<?= validation_errors(); ?>",
          icon: "warning",
          button: "Done",
        });
      <?php endif; ?>      
    });
  </script>

  <script type="text/javascript">
    $('ul li a').click(function(){ 
      $('li a').removeClass("active");
      $(this).addClass("active");
    });
  </script>

<script type="text/javascript">

</script>

</body>
</html>