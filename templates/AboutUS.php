<?php

/**
 * Template Name: AboutUS
 *
 * @package Abyatona
 * @subpackage Abyatona
 * @since Abyatona
 */
// include('langChange.php')

get_header();
?>


  <section class="new-banner" id="new-banner">
    <div class="container">
    <?php include(PATHLOCAL.'/navbar.php'); ?>

      <div class="content">
        <h1>
          <?php echo get_field('hero_heading');?>
        </h1>
      </div>



    </div>
  </section>

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
            <h5><?php echo $company['heading'];?></h5>
            <?php echo $company['description'];?>
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
<div class="arabic">
  <section class="new-banner" id="new-banner">
    <div class="container">
      <div class="content">
        <h1>
          من نحن
        </h1>
      </div>
    </div>
  </section>

  <div class="populer populer-new">
    <img src="img/Vector.png" class="vector-img vector-images" alt="صورة">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="populer-box">
            <h4>2,673,815</h4>
            <p>إجمالي مساحة البناء متر مربع</p>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="populer-box">
            <h4>2,351</h4>
            <p>إجمالي الفلل</p>
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

  <section class="who-we-are">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-6">
          <div class="img-slider-new">
            <div id="demo" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
              </ul>
              <!-- The slideshow -->
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
          <div class="content">
            <h3>من نحن؟</h3>
            <h5>تجربة ممتدة مع تفاصيل محددة</h5>
            <p class="mb-3">شركة أبياتونا مبنية على تاريخ مثبت في عالم العقارات يزيد عن عقدين من الزمن. إنها شركة تساهم في تغيير نمط الإسكان، وتمتد خبرتها لأكثر من 25 عامًا من الإنجازات الكبيرة في تطوير العقارات في المملكة العربية السعودية.</p>
            <p class="mb-3">لمواكبة رؤية المملكة 2030 في واقعها المتنامي، التي تهدف إلى زيادة نسبة ملكية الإسكان للمواطنين.</p>
            <p class="mb-3">تتقدم شركة أبياتونا بثقة نحو قمة عالم العقارات بخطوات حازمة وخبرة مستدامة، بهدف تعزيز تطوير العقارات في الشرق الأوسط.</p>
          </div>
        </div>

        
      </div>
    </div>
  </section>

</div>


<?php get_footer(); ?>