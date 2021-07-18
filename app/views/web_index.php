<!-- Include Header -->
<?php
$pageTitle = "CSWD | Official Website";
define("ROOT", __DIR__ ."/");
include(ROOT . 'includes/header.php');
include(ROOT . 'includes/topnav.php');
?>

<!-- Slider -->
<div class="slider-style">

  <div id="carouselControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner"> 
      <div class="carousel-item active"> 
        <img class="d-block w-100 c-style-h" src="<?= SITE_URL('assets/img/slider/1.jpg')?>" alt="First slide"> 
      </div>
      <div class="carousel-item"> 
        <img class="d-block w-100 c-style-h" src="<?= SITE_URL('assets/img/slider/2.jpg')?>" alt="Second slide"> 
      </div> 
      <div class="carousel-item"> 
        <img class="d-block w-100 c-style-h" src="<?= SITE_URL('assets/img/slider/3.jpg')?>" alt="Third slide"> 
      </div> 
      <div class="carousel-item"> 
        <img class="d-block w-100 c-style-h" src="<?= SITE_URL('assets/img/slider/4.jpg')?>" alt="Fourth slide"> 
      </div> <div class="carousel-item"> 
        <img class="d-block w-100 c-style-h" src="<?= SITE_URL('assets/img/slider/5.jpg')?>" alt="Fifth slide"> 
      </div>                
    </div> 
    <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev"> 
      <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
      <span class="sr-only">Previous</span> 
    </a> 
    <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next"> 
      <span class="carousel-control-next-icon" aria-hidden="true"></span> 
      <span class="sr-only">Next</span> 
    </a> 
  </div>

</div>

<div class="welcome-banner h-100 d-inline-block w-100 p-2">
  <div class="w-100 p-2">
    <hr/>
    <h1 class="text-center" style="color: white;">City Social Welfare and Development Department</h1>
    <p class="text-center" style="color: white;">The Department of City Social Welfare and Development (CSWD) is the primary government agency mandated to develop, implement, and coordinate social protection and poverty-reduction solutions for and with the poor, vulnerable, and disadvantaged.</p>    
    <hr/>  
    <div class="jumbotron">
      <h3>Featured Videos: </h3>
      <!-- Videos -->
      <div>
        <div class="jumbotron1">
          <div class="container">
            <div class="row">
              <div class="col-sm">
                <!-- 4:3 aspect ratio -->
                <div class="embed-responsive embed-responsive-4by3">

                  <video width="auto" height="auto" controls>
                    <source src="<?= SITE_URL('uploads/video/vid1.mp4'); ?>" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                  </div>
                </div>
                <div class="col-sm">
                  <!-- 4:3 aspect ratio -->
                  <div class="embed-responsive embed-responsive-4by3">
                    <video width="auto" height="auto" controls>
                      <source src="<?= SITE_URL('uploads/video/vid2.mp4'); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                    </div>
                  </div>
                </div>
              </div>   
            </div>

          </div>
          <!--/ Videos -->

        </div>
      </div>
    </div>
  </div>

  <!-- Scrolling Image -->
  <div class="page-wrapper">
    <!-- Post Slide -->
    <div class="post-slider">
      <h1 class="slider-title"><img class="logo-float " src="<?= SITE_URL('assets/img/logo.png'); ?>" alt="cswdlogo" width="100" height="100" style="margin-right: 5px;  border-radius: 50%;">CSWD LATEST POST</h1>

      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">
        <?php foreach($data as $row):?>
        <div class="post">
          <img class="slider-image" src="<?php echo BASE_URL .'uploads/post/'. $row['image']; ?>" alt="cswdlogo" width="100" height="100">
          <div class="post-info">
            <h4><a href="<?=site_url('website/get_viewpost/'.$row['info_id'].'')?>"><?=$row['info_title']?></a></h4>
            <i class="fas fa-user"> CSWD</i>
            &nbsp;
            <i class="fas fa-calendar"> <?= date('F d, Y',strtotime($row['info_date'])); ?></i>
          </div>
        </div>
        <?php endforeach;?>                     
      </div>
    </div>
    <!-- //Post -->
  </div>  

</div>
<br>



</div>

<!-- Include Footer -->
<?php
include(ROOT . 'includes/footer.php');
?>