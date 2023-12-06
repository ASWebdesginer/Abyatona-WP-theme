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
if ($selected_locale === 'en' || $selected_locale === '') {
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
<!-- goal start -->
<section class="tab-align">
    <div class="container">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Vector30.png" class="vector-img-30" alt="vector">
        <div class="heading">
            <h3><?php echo get_field('goal_section_sub_heading'); ?></h3>
            <h5><?php echo get_field('goal_section_heading'); ?></h5>
        </div>

        <div class="row">
            <?php
            if (have_rows('goal_innovation_points')) {
                while (have_rows('goal_innovation_points')) {
                    the_row();
                    $goaldesc = get_sub_field('goal_innovation_point_description'); ?>
                    <div class="col-lg-3">
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
        <div class="row justify-content-center">
            <div class="col-lg-5 d-lg-flex align-items-center">
                <div class="content">
                    <h3><?php echo get_field('vision_section_heading'); ?></h3>
                    <p><?php echo get_field('vision_section_description'); ?></p>
                </div>
            </div>

            <div class="col-lg-5">
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

            <div class="col-lg-5">
                <img src="<?php echo get_field('message_section_image'); ?>" class="img-fluid" alt="">

            </div>

            <div class="col-lg-5 d-lg-flex align-items-center">
                <div class="content">
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
            <div class="col-lg-5 d-lg-flex align-items-center">
                <div class="content">
                    <h3><?php echo get_field('values_section_heading'); ?></h3>
                    <p id="visionsmall"><?php echo get_field('values_section_description'); ?></p>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="<?php echo get_field('values_section_image'); ?>" class="new-img" alt="">
            </div>
        </div>
    </div>
    </div>
</section>
<!-- value end -->
<?php }
else{

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

<!-- goal start -->
    <section class="tab-align">
        <div class="container">
            <div class="heading">
                <h3> <?php echo get_field('goal_section_sub_heading_arabic'); ?></h3>
                <h5> <?php echo get_field('goal_section_heading_arabic'); ?></h5>
            </div>
            <div class="row">
                <?php
                if (have_rows('goal_innovation_points_arabic')) {
                    while (have_rows('goal_innovation_points_arabic')) {
                        the_row();
                        $goaldescar = get_sub_field('goal_innovation_point_description'); ?>
                        <div class="col-lg-3">
                            <div class="content">
                                <p><?php echo $goaldescar; ?></p>
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
            <div class="row justify-content-center">
                <div class="col-lg-5 d-lg-flex align-items-center">
                    <div class="content">
                        <h3><?php echo get_field('vision_section_heading_arabic'); ?></h3>
                        <p><?php echo get_field('vision_section_description_arabic'); ?></p>
                    </div>
                </div>
                <div class="col-lg-5">

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
    <section class="who-we-are pt-0 pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <img src="<?php echo get_field('message_section_image_arabic'); ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 d-lg-flex align-items-center">
                    <div class="content">
                        <h3><?php echo get_field('message_section_heading_arabic'); ?></h3>
                        <p><?php echo get_field('message_section_description_arabic'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- message end -->
<!-- value start -->
    <section class="who-we-are">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 d-flex align-items-center">
                    <div class="content">
                       <h3><?php echo get_field('values_section_heading_arabic'); ?></h3>
                        <p><?php echo get_field('values_section_description_arabic'); ?></p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="<?php echo get_field('values_section_image_arabic'); ?>" class="new-img" alt="">
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