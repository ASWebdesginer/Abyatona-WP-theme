<?php

/**
 * Template Name: HomePage Arabic
 *
 * @package Abyatona
 * @subpackage Abyatona
 * @since Abyatona
 */
// include('langChange.php')

get_header();
?>
<!-- arabic hero start -->
<div class="arabic">
    <section class="banner" id="banner">
        <div class="container">

        <?php include(PATHLOCAL.'/navbar.php'); ?>
            <div class="content">
                <h1>
                    <?php echo esc_html(get_field('hero_heading_arabic')); ?>
                </h1>
            </div>

            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    <section id="slider">
                        <div class="container">
                            <div class="slider">
                                <div class="owl-carousel">
                                    <?php
                                    // Check rows exists.
                                    if (get_field('hero_heading_arabic')) :
                                        if (have_rows('hero_slider_arabic')) :

                                            // Loop through rows.
                                            while (have_rows('hero_slider_arabic')) : the_row();

                                                // Load sub field value.
                                                $building_namear = get_sub_field('hero_item_heading_arabic');
                                                $building_typear = get_sub_field('hero_item_type_arabic');
                                                $building_imagear = get_sub_field('hero_item_image_arabic');
                                                // Do something...
                                    ?>
                                                <div class="slider-card">
                                                    <h5 class="mb-0 text-white"><?php echo $building_namear; ?></h5>
                                                    <p class="text-white"><?php echo $building_typear; ?></p>
                                                    <div class="slide-images">
                                                        <img src="<?php echo $building_imagear; ?>" alt="" />
                                                    </div>
                                                </div>
                                    <?php
                                            // End loop.
                                            endwhile;

                                        // No value.
                                        else :
                                        // Do something...
                                        endif;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
<!-- arabic hero end -->
<!-- arabic about start -->
    <section class="about" id="about">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Vector 4.png" class="vector-img" alt="الرسم البياني" />
            <div class="heading">
                <h3>من نحن</h3>
            </div>
            <div class="populer">
                <?php include(__DIR__ . '/templatepartsarabic/AboutStatsAr.php'); ?>
            </div>

        <div class="content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-slider">
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <?php
                            $images_ar = get_field('about_section_gallery_arabic');
                            if ($images_ar) : ?>
                                <!-- العناصر المؤشرة -->
                                <ul class="carousel-indicators">
                                    <?php foreach ($images_ar as $index => $value) :
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

                                <!-- عرض الشرائح -->

                                <div class="carousel-inner">
                                    <?php foreach ($images_ar as $index => $image) :
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
                    <h2>
                        <?php echo get_field('about_section_heading_arabic'); ?><br />
                        صناعة العقارات
                    </h2>
                    <?php echo get_field('about_section_description_arabic'); ?>

                    <div class="d-flex justify-content-end">
                        <button>
                            <a href="<?php echo get_field('about_section_button_url_arabic'); ?>" style="color:white;"><?php echo get_field('about_section_button_text_arabic'); ?><img src="<?php echo get_template_directory_uri(); ?>/img/up-arrow.png" alt="السهم" /> </a>
                        </button>
                    </div>

                    <div class="position-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/abyatona-logo.png" class="content-logo" alt="الشعار" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/25.png" class="content-logo-new" alt="الشعار" />
                    </div>
                </div>
            </div>
    </section>
    <!-- arabic end start -->
    <!-- arabic project start -->
    <section class="build">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Vector 4.png" class="vector-img" alt="فيكتور" />
            <div class="heading">
                <h3>ماذا نبني</h3>
                <p>استكشف مشاريعنا</p>
            </div>
            <?php include(__DIR__ . '/templateparts/projectCard.php'); ?>
        </div>
    </section>
<!-- arabic project end -->
<!-- arabic vision mission start -->
    <section class="mission">
        <img src="<?php echo get_template_directory_uri(); ?>/img/abyatona.png" class="mission-logo" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Vector 4.png" class="mi-vactor" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Vector 5.png" class="mi-vactor1" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Vector 6.png" class="mi-vactor2" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mission-box">
                        <h3><?php echo get_field('section_heading_arabic') ?></h3>
                        <p>
                            <?php echo get_field('section_description_arabic') ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7"></div>
                <div class="col-lg-5">
                    <div class="mission-box mission-mobile">
                        <h3> <?php echo get_field('mission_section_heading_arabic') ?></h3>
                        <p>
                            <?php echo get_field('mission_section_description_arabic') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- arabic vision mission end -->

<!-- arabic partner start -->
    <section class="partner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Vector 4.png" class="vector-img" alt="vector" />
        <div class="container">
            <div class="heading">
                <h3>شركاؤنا</h3>
            </div>
            <?php include(__DIR__ . '/templatepartsarabic/ArabicPartner.php'); ?>
        </div>
    </section>
    <!-- arabic partner start -->

</div>
</div>

<?php get_footer(); ?>