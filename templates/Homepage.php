<?php

/**
 * Template Name: HomePage
 *
 * @package Abyatona
 * @subpackage Abyatona
 * @since Abyatona
 */
// include('langChange.php')

get_header();
?>


<body>
    <!-- hero start -->
    <section class="banner" id="banner">
        <div class="container">
            
<?php include(PATHLOCAL.'/navbar.php'); ?>
            <div class="content">
                <h1>
                    <?php echo esc_html(get_field('hero_section_heading')); ?>
                </h1>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <section id="slider">
                        <div class="container">

                            <div class="slider">
                                <div class="owl-carousel">
                                    <?php
                                    // Check rows exists.
                                    if (have_rows('hero_slider_items')) :

                                        // Loop through rows.
                                        while (have_rows('hero_slider_items')) : the_row();

                                            // Load sub field value.
                                            $building_name = get_sub_field('slider_item_name');
                                            $building_type = get_sub_field('slider_item_type');
                                            $building_image = get_sub_field('slider_item_image');
                                            // Do something...
                                    ?>
                                            <div class="slider-card">

                                                <h5 class="mb-0 text-white"><?php echo $building_name; ?></h5>
                                                <p class="text-white"><?php echo $building_type; ?></p>
                                                <div class="slide-images">
                                                    <img src="<?php echo $building_image; ?>" alt="">
                                                </div>
                                            </div>
                                    <?php
                                        // End loop.
                                        endwhile;

                                    // No value.
                                    else :
                                    // Do something...
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
    <!-- hero end -->
    <!-- About  start -->
    <section class="about" id="about">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Vector.png" class="vector-img" alt="vector" />
            <div class="heading">
                <h3>ABOUT US</h3>
            </div>
            <div class="populer">
                <?php include(__DIR__ . '/templateparts/AboutStats.php'); ?>
            </div>

            <div class="content">
                <div class="row">
                        <div class="col-lg-6">
                            <h2>
                                <?php echo get_field('about_section_heading'); ?>
                            </h2>
                            <?php echo get_field('about_section_description'); ?>

                            <button>
                                <a href="<?php echo get_field('about_section_button_url'); ?>">
                            <?php echo get_field('about_section_button_text'); ?><img src="<?php echo get_template_directory_uri(); ?>/img/up-arrow.png" alt="arrow" /></a>
                            </button>

                            <div class="position-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/abyatona-logo.png" class="content-logo" alt="logo" />
                                <img src="<?php echo get_template_directory_uri(); ?>/img/25.png" class="content-logo-new" alt="logo" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="img-slider">
                                <?php
                                $images = get_field('about_section_gallery');
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

            </div>
        </div>
    </section>
  <!-- About  end -->
    <!-- CPT Project   start -->
    <section class="build">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Vector.png" class="vector-img vector-img-mobile" alt="vector" />
            <div class="heading">
                <h3>WHAT WE BUILD</h3>
                <p>Explore our projects</p>
            </div>
            <?php include(__DIR__ . '/templateparts/projectCard.php'); ?>
        </div>
    </section>
   <!-- CPT Project   end -->
    <!-- Mission Vision  start -->
    <section class="mission">
        <img src="<?php echo get_template_directory_uri(); ?>/img/abyatona.png" class="mission-logo" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Vector 4.png" class="mi-vactor" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Vector 5.png" class="mi-vactor1" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Vector 6.png" class="mi-vactor2" alt="">
        <div class="container">
            <div class="row">
                        <div class="col-lg-4">
                            <div class="mission-box">
                                <h3><?php echo get_field('section_heading') ?></h3>
                                <p><?php echo get_field('section_description') ?></p>
                            </div>
                        </div>
            </div>


            <div class="row">
                <div class="col-lg-7"></div>
                    <div class="col-lg-5">
                        <div class="mission-box mission-mobile">
                            <h3><?php echo get_field('mission_section_heading') ?></h3>
                            <p><?php echo get_field('mission_section_description') ?></p>
                        </div>
                    </div>
            </div>
        </div>
    </section>
   <!-- Mission   Vision end -->
      <!-- Partner   start -->
    <section class="partner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Vector.png" class="vector-img" alt="vector" />
        <div class="container">
            <div class="heading">
                <h3>Our Partners</h3>
            </div>

            <div class="row">
                <?php 
                 if(have_rows('partners','options')):
                    while(have_rows('partners','options')) : the_row();
                    $pname=get_sub_field('name');
                    $pdescription=get_sub_field('description');
                    $plogo=get_sub_field('logo');
               ?>
                <div class="col-lg-4">
                    <div class="partner-box">
                        <h3><?php echo $pname;?></h3>
                        <p><?php echo $pdescription;?></p>

                        <div class="partner-logo">
                            <img src="<?php echo $plogo;?>" alt="">
                        </div>
                    </div>
                </div>
                <?php 
                endwhile;
            endif;?>
            </div>
        </div>
    </section>
   <!-- Mission   start -->
<div class="arabic">
    <section class="banner" id="banner">
        <div class="container">
      

            <div class="content">
                <h1>
                    نحن نبني المستقبل، <br />
                    ابنِ معنا
                </h1>
            </div>

            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    <section id="slider">
                        <div class="container">
                            <div class="slider">
                                <div class="owl-carousel">
                                    <div class="slider-card">
                                        <h5 class="mb-0 text-white">جدة هايتس</h5>
                                        <p class="text-white">فيلات ومنازل</p>
                                        <div class="slide-images">
                                            <img src="img/banner.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="slider-card">
                                        <h5 class="mb-0 text-white">جدة هايتس</h5>
                                        <p class="text-white">فيلات ومنازل</p>
                                        <div class="slide-images">
                                            <img src="img/new.png" alt="" />
                                        </div>
                                    </div>

                                    <div class="slider-card">
                                        <h5 class="mb-0 text-white">جدة هايتس</h5>
                                        <p class="text-white">فيلات ومنازل</p>
                                        <div class="slide-images">
                                            <img src="img/belding.png" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <img src="img/Vector 4.png" class="vector-img" alt="الرسم البياني" />
            <div class="heading">
                <h3>من نحن</h3>
            </div>
            <div class="populer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-utler-box">
                                <h4>2,673,815</h4>
                                <p>إجمالي المساحة المبنية متر مربع</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="populer-box">
                                <h4>2,351</h4>
                                <p>إجمالي الفيلات</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="populer-box">
                                <h4>9,737</h4>
                                <p>إجمالي الشقق</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="populer-box">
                                <h4>6,250</h4>
                                <p>أعضاء الفريق</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img-slider">
                            <div id="demo" class="carousel slide" data-ride="carousel">
                                <!-- العناصر المؤشرة -->
                                <ul class="carousel-indicators">
                                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                                    <li data-target="#demo" data-slide-to="1"></li>
                                    <li data-target="#demo" data-slide-to="2"></li>
                                    <li data-target="#demo" data-slide-to="3"></li>
                                </ul>

                                <!-- عرض الشرائح -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/slider.png" alt="لوس أنجلوس" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/slider.png" alt="شيكاغو" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/slider.png" alt="نيويورك" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/slider.png" alt="نيويورك" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h2>
                            25 عامًا من الخبرة في <br />
                            صناعة العقارات
                        </h2>
                        <p>
                            تزيد خبرتها عن عقدين من الزمان. إنها شركة تساهم في تغيير نمط
                            الإسكان، حيث تمتد خبرتها لأكثر من 25 عامًا من الإنجازات الكبيرة
                            في تطوير العقارات، في المملكة العربية السعودية. لمواكبة رؤية
                            المملكة 2030 في الوقت الحاضر المتنامي، التي تهدف إلى زيادة نسبة
                            ملكية الإسكان للمواطنين.
                        </p>
                        <p>
                            تسعى شركة أبياتونا بثبات نحو قمة عالم العقارات بخطى حاسمة وخبرة
                            مستدامة، بهدف تعزيز تطوير العقارات في الشرق الأوسط.
                        </p>

                        <div class="d-flex justify-content-end">
                            <button>
                                اعرف المزيد <img src="img/up-arrow.png" alt="السهم" />
                            </button>
                        </div>

                        <div class="position-logo">
                            <img src="img/abyatona-logo.png" class="content-logo" alt="الشعار" />
                            <img src="img/25.png" class="content-logo-new" alt="الشعار" />
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section class="build">
        <div class="container">
            <img src="img/Vector 4.png" class="vector-img" alt="فيكتور" />
            <div class="heading">
                <h3>ماذا نبني</h3>
                <p>استكشف مشاريعنا</p>
            </div>

            <div class="build-slider">
                <div class="care-slider-sec">
                    <div class="container">
                        <div class="ourCliendslider">
                            <div id="marketingBannerSlider1" class="marketingBannerSlider1 owl-carousel owl-theme">
                                <div class="marketingBannerSliderBx item">
                                    <div class="slider-box">
                                        <div class="img">
                                            <img src="img/co.png" alt="صورة الشركة" />
                                        </div>

                                        <div class="content">
                                            <div>
                                                <h3>أبراج جدة</h3>
                                                <p>فيلل ومنازل</p>
                                            </div>
                                        </div>

                                        <div class="bottom-icon">
                                            <img src="img/Vector-arrow.png" alt="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="marketingBannerSliderBx item">
                                    <div class="slider-box slider-box-01">
                                        <div class="img">
                                            <img src="img/co1.png" alt="صورة الشركة" />
                                        </div>

                                        <div class="content">
                                            <div>
                                                <h3>أبياتونا ليلي</h3>
                                                <p>فيلل ومنازل</p>
                                            </div>
                                        </div>

                                        <div class="bottom-icon bottom-icon-new">
                                            <img src="img/Vector-arrow.png" alt="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="marketingBannerSliderBx item">
                                    <div class="slider-box slider-box-02">
                                        <div class="img">
                                            <img src="img/co2.png" alt="صورة الشركة" />
                                        </div>

                                        <div class="content">
                                            <div>
                                                <h3>واحة الدمام</h3>
                                                <p>فيلل ومنازل</p>
                                            </div>
                                        </div>

                                        <div class="bottom-icon">
                                            <img src="img/Vector-arrow.png" alt="" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Repeat the following code for other items -->
                                <div class="marketingBannerSliderBx item">
                                    <div class="slider-box">
                                        <div class="img">
                                            <img src="img/co.png" alt="صورة الشركة" />
                                        </div>

                                        <div class="content">
                                            <div>
                                                <h3>اسم المشروع</h3>
                                                <p>نوع المشروع</p>
                                            </div>
                                        </div>

                                        <div class="bottom-icon">
                                            <img src="img/Vector-arrow.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Repeat this block for each additional item -->
                                <div class="marketingBannerSliderBx item">
                                    <div class="slider-box slider-box-01">
                                        <div class="img">
                                            <img src="img/co1.png" alt="صورة الشركة" />
                                        </div>

                                        <div class="content">
                                            <div>
                                                <h3>اسم المشروع 2</h3>
                                                <p>نوع المشروع 2</p>
                                            </div>
                                        </div>

                                        <div class="bottom-icon bottom-icon-new">
                                            <img src="img/Vector-arrow.png" alt="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="marketingBannerSliderBx item">
                                    <div class="slider-box slider-box-02">
                                        <div class="img">
                                            <img src="img/co2.png" alt="صورة الشركة" />
                                        </div>

                                        <div class="content">
                                            <div>
                                                <h3>اسم المشروع 3</h3>
                                                <p>نوع المشروع 3</p>
                                            </div>
                                        </div>

                                        <div class="bottom-icon">
                                            <img src="img/Vector-arrow.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mission">
        <img src="img/abyatona.png" class="mission-logo" alt="">
        <img src="img/Vector 4.png" class="mi-vactor" alt="">
        <img src="img/Vector 5.png" class="mi-vactor1" alt="">
        <img src="img/Vector 6.png" class="mi-vactor2" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mission-box">
                        <h3>رؤيتنا</h3>
                        <p>
                            تمكين المواطنين للعيش بشكل مستدام وتوفير حلول طاقة صحية في المملكة العربية السعودية.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7"></div>
                <div class="col-lg-5">
                    <div class="mission-box mission-mobile">
                        <h3>رسالتنا</h3>
                        <p>
                            منح الأولوية لاحتياجات وتطلعات مشاريعنا، نحرص على ضمان أن مفهوم منزل آمن يتماشى مع رؤيتك لمستقبل أخضر.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="partner">
        <img src="img/Vector 4.png" class="vector-img" alt="vector" />
        <div class="container">
            <div class="heading">
                <h3>شركاؤنا</h3>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="partner-box">
                        <h3>سكني</h3>
                        <p>نص عشوائي</p>
                        <div class="partner-logo">
                            <img src="img/Group.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="partner-box">
                        <h3>وافي</h3>
                        <p>نص عشوائي</p>
                        <div class="partner-logo">
                            <img src="img/group1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="partner-box">
                        <h3>NHC</h3>
                        <p>نص عشوائي</p>
                        <div class="partner-logo">
                            <img src="img/nhc.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 </div>
 </div>
    <?php get_footer(); ?>