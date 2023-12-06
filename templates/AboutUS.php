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
// check language
$selected_locale = '';
if (isset($_SESSION['locale'])) {
    $selected_locale = $_SESSION['locale'];
}
if ($selected_locale === 'en' || $selected_locale === '') {
?>


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

<?php 

                }
                
                else{
                  ?>
<div class="arabic">
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

  <div class="populer populer-new">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Vector.png" class="vector-img vector-images" alt="صورة">
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
            <div class="content">
              <h3>من نحن؟</h3>
              <h5><?php echo $company['heading']; ?></h5>
              <?php echo $company['description']; ?>
            </div>
          </div>


        </div>
    </div>
  <?php endif; ?>
  </section>

</div>


<?php } get_footer(); ?>