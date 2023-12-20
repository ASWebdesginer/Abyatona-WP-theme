<?php

/**
 * Template Name: VisionMisson
 *
 * @package Abyatona
 * @subpackage Abyatona
 * @since Abyatona
 */
get_header();
?>


<style>
@media (min-width: 1300px){
.container {
    max-width: 1290px;
    padding:0px;
    
}
.populer-new .container{
    max-width:720px;
}
}
#spacerdivsmi{
    display:none;
}
.arabicimagevector{
    left:auto;
}
@media(min-width:768px){
    .arabicontentmi p{
        margin-left:auto;
        direction: rtl;
    }
  .who-we-are .content h5{
 color: #182D46;
font-family: Poppins;
font-size: 30px;
font-style: normal;
font-weight: 400;
line-height: normal;
  }
    .who-we-are .content p{
    max-width: 553px;
    text-align: justify;
    font-size: 16px;
    font-weight: 500;
}
    .new-banner{
        height:541px;
    }
    .new-banner .content{
        padding: 215px 0px 0px 0px !important;
    }
   .arabic .new-banner .content{
       padding: 150px 0px 0px 0px !important;
   }
    .populer h4{
        color: #B8833B;
        text-shadow: 0px 4px 9px rgba(0, 0, 0, 0.13);
        font-family: Poppins;
        font-size: 36px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    .populer p{
        color: #FFF;
        text-shadow: 0px 4px 9px rgba(0, 0, 0, 0.13);
        font-family: Poppins;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;

    }
   .populer-new .container .col-lg-3{
       padding:0px;
   }
   .tab-align .heading h3{
        color: #B8833B;
        font-family: Poppins;
        font-size: 35px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
   }
   .tab-align .heading h5{
        color: #182D46;
        font-family: Poppins;
        font-size: 52px;
        font-style: normal;
        font-weight: 400;
        line-height: 77px; /* 148.077% */
   }
   .tab-align .heading{
       width:73%;
   }
   .tab-align .content p{
        color: #182D46;
        text-align: justify;
        font-family: Poppins;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        text-transform: capitalize;
   }
   .goalpointsmi{
       width:299px;
   }
   .goalpointsmi:first-child{
       width:190px;
   }
   #pointsrowmi {
       gap:48px;
       justify-content: center;
   }
   .visionsectmi h3{
        color: #B8833B;
        font-family: Poppins;
        font-size: 35px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
   }
    .visionsectmi p{
        color: #182D46;
        font-family: Poppins;
        font-size: 26px !important;
        font-style: normal;
        font-weight: 400 !important;
        line-height: 51px; /* 196.154% */
        max-width:530px !important;
   }
}
    * {
        box-sizing: border-box
    }

    body {
        font-family: Verdana, sans-serif;
        margin: 0
    }

    .mySlides {
        display: none
    }

    img {
        vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        /* cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  transition: background-color 0.6s ease; */
        display: inline-block;
        cursor: pointer;
    }

    /* .active, .dot:hover {
  background-color: #717171;
} */

    /* Fading animation */
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {

        .prev,
        .next,
        .text {
            font-size: 11px
        }
    }
</style>

<?php 
// check language
$selected_locale = '';
if (isset($_SESSION['locale'])) {
    $selected_locale = $_SESSION['locale'];
}
if ($selected_locale === 'en') {
?>
<!-- hero start -->
<section class="new-banner" id="new-banner" style="background-image:url(<?php echo get_field('hero_background'); ?>)">
    <div class="container">
        <?php include(PATHLOCAL . '/navbar.php'); ?>
        <div class="content">
            <h1>
                <?php echo get_field('hero_heading'); ?>
            </h1>
        </div>
    </div>
</section>
<!-- hero end -->
<div class="populer populer-new">
  <img src="<?php echo get_template_directory_uri(); ?>/img/Vector.png" class="vector-img vector-images" alt="vector">
  <?php include(__DIR__ . '/templateparts/AboutStats.php'); ?>
</div>
<section class="who-we-are">
  <div class="container">
    <?php
    $company = get_field('about_company');
    if ($company) :
    ?>
      <div class="row">
        <div class="col-lg-6">
          <div class="content">
            <h3>WHO WE ARE?</h3>
            <h5><?php echo $company['heading']; ?></h5>
            <?php echo $company['description']; ?>
          </div>
        </div>
        <div class="col-lg-6">

          <div class="img-slider-new">
            <?php
            $images = $company['section_gallery'];
            if ($images) : ?>
              <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <?php foreach ($images as $index => $value) :
                    if ($index == 0) {
                  ?>

                      <li data-target="#demo" data-slide-to="<?php echo $index; ?>" class="active"></li>
                    <?php
                    } else {
                    ?>
                      <li data-target="#demo" data-slide-to="<?php echo $index; ?>"></li>
                  <?php
                    }
                  endforeach; ?>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                  <?php foreach ($images as $index => $image) :
                    if ($index == 0) {
                  ?>
                      <div class="carousel-item active">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      </div>
                    <?php
                    } else {
                    ?>
                      <div class="carousel-item">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      </div>
                  <?php }
                  endforeach; ?>
                <?php endif; ?>
                </div>
              </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- goal start -->
<section class="tab-align">
    <div class="container">
        <!--<img src="<?php echo get_template_directory_uri(); ?>/img/Vector30.png" class="vector-img-30" alt="vector">-->
        <h1 class="headingvision"><?php echo get_field('vision_page_heading'); ?></h1>
        <div class="heading">
            <h3><?php echo get_field('goal_section_sub_heading'); ?></h3>
            <h5><?php echo get_field('goal_section_heading'); ?></h5>
        </div>

        <div class="row" id="pointsrowmi">
            <?php
            if (have_rows('goal_innovation_points')) {
                $goalnumber=0;
                while (have_rows('goal_innovation_points')) {
                    the_row();
                    $goalnumber=$goalnumber+1;
                    $goaldesc = get_sub_field('goal_innovation_point_description'); ?>
                    <div class="goalpoints<?php echo $goalnumber; ?> goalpointsmi">
                        <div class="content">
                            <p><?php echo $goaldesc; ?></p>
                        </div>
                    </div>
            <?php
                }
            } ?>
        </div>
    </div>
</section>

<!-- goal end -->
<!-- vision start -->
<section class="who-we-are">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-lg-flex align-items-center">
                <div class="content visionsectmi">
                    <h3><?php echo get_field('vision_section_heading'); ?></h3>
                    <p><?php echo get_field('vision_section_description'); ?></p>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- <img src="img/Group 1000007167.png"  class="img-fluid" alt=""> -->
                <div class="slideshow-container">
                    <?php
                    if (have_rows('vision_section_gallery')) {
                        while (have_rows('vision_section_gallery')) {
                            the_row();
                            $galleries = get_sub_field('vision_section_gallery_item');
                    ?>
                            <div class="mySlides">

                                <div class="row">
                                    <?php
                                    foreach ($galleries as $index => $gallery) {
                                    ?>
                                        <div class="col-lg-4 col-4 pr-0">
                                            <img src="<?php echo $gallery['url']; ?>" class="first-slides <?php echo ($index == 1) ? 'third-img' : " "; ?> " alt="">
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>

                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <br>

                <div style="text-align:center;transform: translateY(-30px);">
                    <div class="dot" onclick="currentSlide(1)">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Group 1000007167.png" style="border-radius: 50%; width: 40px; height: 40px; border: 2px solid #B8833B">
                    </div>
                    <div class="dot" onclick="currentSlide(2)">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/new.png" style="border-radius: 50%; width: 40px; height: 40px; border: 2px solid #B8833B; margin-left:-15px;">
                    </div>
                    <div class="dot" onclick="currentSlide(3)"><img src="<?php echo get_template_directory_uri(); ?>/img/Screenshot 2023-11-06 152237.png" style="border-radius: 50%; width: 40px; height: 40px; border: 2px solid #B8833B; margin-left:-15px;"></div>
                    <!-- <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span>  -->
                </div>

            </div>
        </div>
    </div>
</section>
<!-- vision end -->
<!-- message start -->
<section class="who-we-are pt-0 pb-0">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-6">
                <img src="<?php echo get_field('message_section_image'); ?>" class="img-fluid" alt="">

            </div>

            <div class="col-lg-6 d-lg-flex align-items-center justify-content-end">
                <div class="content visionsectmi">
                    <h3><?php echo get_field('message_section_heading'); ?></h3>
                    <p><?php echo get_field('message_section_description'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- message end  -->
<!-- value start -->
<section class="who-we-are">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 d-lg-flex align-items-center">
                <div class="content visionsectmi">
                    <h3><?php echo get_field('values_section_heading'); ?></h3>
                    <p id="visionsmall"><?php echo get_field('values_section_description'); ?></p>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo get_field('values_section_image'); ?>" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    </div>
</section>
<!-- value end -->
<?php }
else if( $selected_locale === 'ar' || $selected_locale === ''){

?>
<!-- Arabic  start -->
<div class="arabic">
<!-- hero start -->
    <section class="new-banner" id="new-banner" style="background-image:url(<?php echo get_field('hero_background_arabic'); ?>)">
        <div class="container">
        <?php include(PATHLOCAL . '/navbar.php'); ?>
            <div class="content">
                <h1>
                    <?php echo get_field('hero_heading_arabic'); ?>
                </h1>
            </div>
        </div>
    </section>
<!-- hero end -->
  <div class="populer populer-new">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Vector.png" class="vector-img vector-images arabicimagevector" alt="صورة">
    <?php include(__DIR__ . '/templatepartsarabic/AboutStatsAr.php'); ?>
  </div>

  <section class="who-we-are">
    <div class="container">
      <?php
      $company = get_field('about_company_arabic');
      if ($company) :
      ?>
        <div class="row">

          <div class="col-lg-6">
            <div class="img-slider-new">
              <?php
              $images = $company['section_gallery'];
              if ($images) : ?>
                <div id="demo" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <?php foreach ($images as $index => $value) :
                      if ($index == 0) {
                    ?>
                        <li data-target="#demo" data-slide-to="<?php echo $index; ?>" class="active"></li>
                      <?php
                      } else {
                      ?>
                        <li data-target="#demo" data-slide-to="<?php echo $index; ?>"></li>
                    <?php
                      }
                    endforeach; ?>
                  </ul>
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <?php foreach ($images as $index => $image) :
                      if ($index == 0) {
                    ?>
                        <div class="carousel-item active">
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                      <?php
                      } else {
                      ?>
                        <div class="carousel-item">
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                    <?php }
                    endforeach; ?>
                  <?php endif; ?>
                  </div>
                </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="content arabicontentmi">
              <h3>من نحن؟</h3>
              <h5><?php echo $company['heading']; ?></h5>
              <?php echo $company['description']; ?>
            </div>
          </div>


        </div>
    </div>
  <?php endif; ?>
  </section>
<!-- goal start -->
    <section class="tab-align">
        <div class="container grtlsect">
            <h1 class="headingvision"><?php echo get_field('vision_page__heading_arabic');?></h1>
            <div class="heading">
                <h3> <?php echo get_field('goal_section_sub_heading_arabic'); ?></h3>
                <h5> <?php echo get_field('goal_section_heading_arabic'); ?></h5>
            </div>
            <div class="row" id="pointsrowmi">
                <?php
                if (have_rows('goal_innovation_points_arabic')) {
                    while (have_rows('goal_innovation_points_arabic')) {
                        the_row();
                         $goalnumber=$goalnumber+1;
                        $goaldesc = get_sub_field('goal_innovation_point_description'); ?>
                        <div class="goalpoints<?php echo $goalnumber; ?> goalpointsmi">
                            <div class="content">
                                <p><?php echo $goaldesc; ?></p>
                            </div>
                        </div>
                <?php
                    }
                } ?>
            </div>
        </div>
    </section>
<!-- goal end -->

<!-- vision start -->
    <section class="who-we-are rtlsectionmi">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 d-lg-flex align-items-center">
                    <div class="content visionsectmi">
                        <h3><?php echo get_field('vision_section_heading_arabic'); ?></h3>
                        <p><?php echo get_field('vision_section_description_arabic'); ?></p>
                    </div>
                </div>
                <div class="col-lg-6">

                    <!-- <img src="img/Group 1000007167.png"  class="img-fluid" alt=""> -->


                    <div class="slideshow-container">
                        <?php
                        if (get_field('vision_section_gallery_arabic')) {
                            if (have_rows('vision_section_gallery_arabic')) {
                                while (have_rows('vision_section_gallery_arabic')) {
                                    the_row();
                                    $galleriesar = get_sub_field('vision_section_gallery_item');
                        ?>
                                    <div class="mySlides">

                                        <div class="row">
                                            <?php
                                            foreach ($galleriesar as $index => $gallery) {
                                            ?>
                                                <div class="col-lg-4 col-4 pr-0">
                                                    <img src="<?php echo $gallery['url']; ?>" class="first-slides <?php echo ($index == 1) ? 'third-img' : " "; ?> " alt="">
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                    </div>
                        <?php
                                }
                            }
                        }
                        ?>


                    </div>
                    <br>

                    <div style="text-align:center;transform: translateY(-30px);">
                        <div class="dot" onclick="currentSlide(1)">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Group 1000007167.png" style="border-radius: 50%; width: 40px; height: 40px; border: 2px solid #B8833B">
                        </div>
                        <div class="dot" onclick="currentSlide(2)">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/new.png" style="border-radius: 50%; width: 40px; height: 40px; border: 2px solid #B8833B; margin-left:-15px;">
                        </div>
                        <div class="dot" onclick="currentSlide(3)"><img src="<?php echo get_template_directory_uri(); ?>/img/Screenshot 2023-11-06 152237.png" style="border-radius: 50%; width: 40px; height: 40px; border: 2px solid #B8833B; margin-left:-15px;"></div>
                        <!-- <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span>  -->
                    </div>

                </div>
            </div>
        </div>
    </section>
<!-- vision end -->
<!-- message start -->
    <section class="who-we-are pt-0 pb-0 rtlsectionmi">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <img src="<?php echo get_field('message_section_image_arabic'); ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-lg-flex align-items-center">
                    <div class="content visionsectmi" id="messgaeara">
                        <h3><?php echo get_field('message_section_heading_arabic'); ?></h3>
                        <p><?php echo get_field('message_section_description_arabic'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- message end -->
<!-- value start -->
    <section class="who-we-are rtlsectionmi">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="content visionsectmi">
                       <h3><?php echo get_field('values_section_heading_arabic'); ?></h3>
                        <p><?php echo get_field('values_section_description_arabic'); ?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo get_field('values_section_image_arabic'); ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- value end -->
</div>

</div>
<?php }?>
<!-- arabic end -->

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dott");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>
<?php get_footer(); ?>