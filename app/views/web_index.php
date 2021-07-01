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
      <h1 class="text-center" style="color: white;">Calapan City Social Welfare and Development</h1>
      <p class="text-center" style="color: white;">The Department of Calapan City Social Welfare and Development (CSWD) is the primary government agency mandated to develop, implement, and coordinate social protection and poverty-reduction solutions for and with the poor, vulnerable, and disadvantaged.</p>    
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
                      <source src="<?= SITE_URL('assets/video/vid2.mp4'); ?>" type="video/mp4">
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
 

<div class="wrapper" >
   <hr/>
  <center>
<h1><img class="logo-float" src="<?= SITE_URL('assets/img/logo.png'); ?>" alt="cswdlogo" width="10%" height="auto" style="margin-right: 5px;  border-radius: 50%;">Gallery and Events</h1> 
</center>
  <hr/>  
<div class="container " >
<marquee behavior="scroll" direction="left" style="box-shadow: 3px 3px 5px 3px;">
<img src="<?= SITE_URL('assets/img/slider/1.jpg'); ?>" width="50%" height="auto" >
<img src="<?= SITE_URL('assets/img/slider/2.jpg'); ?>" width="50%" height="auto" >
<img src="<?= SITE_URL('assets/img/slider/3.jpg'); ?>" width="50%" height="auto" >
<img src="<?= SITE_URL('assets/img/slider/4.jpg'); ?>" width="50%" height="auto" >
<img src="<?= SITE_URL('assets/img/slider/5.jpg'); ?>" width="50%" height="auto" >
</marquee>   
  </div>
  </div>
  <br>



</div>

<!-- Include Footer -->
<?php
include(ROOT . 'includes/footer.php');
?>