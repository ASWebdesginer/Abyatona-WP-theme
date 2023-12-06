<?php

/**
 * Template Name: OurService
 *
 * @package Abyatona
 * @subpackage Abyatona
 * @since Abyatona
 */
// include('langChange.php')

get_header();


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
  <?php
  $servexp = get_field('experience_section');
  if ($servexp) {
    $expheading = $servexp['section_heading'];
    $expsubheading = $servexp['section_sub_heading'];
    $expdesc = $servexp['section_description'];
    $expimage = $servexp['section_image'];
  ?>
    <section class="our-services">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="content">
              <h3 id="ourservicemih3"><?php echo $expheading; ?></h3>
              <h5><?php echo $expsubheading; ?></h3>
              </h5>
              <?php echo $expdesc; ?></h3>

              <div class="populer populer-new populer-newly">
                  <?php include(PATHLOCAL.'/templates/templateparts/AboutStatsAbbreviate.php'); ?>
              </div>
            </div>
          </div>
          <div class="col-lg-6">

            <div class="services-img">
              <img src="<?php echo $expimage; ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php
  }
  ?>
  <?php
  $ourserv = get_field('our_services');
  if ($ourserv) {
    $ourservheading = $ourserv['section_heading'];
    $ourservsubheading = $ourserv['section_sub_heading'];
    $ourservice = $ourserv['services'];
  ?>
    <section class="develop">
      <div class="container">
        <div class="develop-box">
          <img src="<?php echo get_template_directory_uri(); ?>/img/white-vector.svg" class="white-vector" alt="">
          <h3><?php echo $ourservheading; ?></h3>
          <p class="p"><?php echo $ourservsubheading; ?></p>

          <div class="row">
            <?php
            foreach ($ourservice as $key => $value) {

              $serheading = $value['service_name'];
              $serimage = $value['service_image'];
            ?>
              <div class="col-lg-2 col-6">
                <div class="developing">
                  <div class="developing-box">
                    <img src="<?php echo $serimage; ?>" alt="">
                  </div>

                  <p><?php echo $serheading; ?></p>
                </div>

              </div>
            <?php
            } ?>
          </div>
        </div>
      </div>
      </div>
    </section>
  <?php
  }
  ?>
  <section class="build">
    <div class="container">
      <img src="<?php echo get_template_directory_uri(); ?>/img/Vector.png" class="vector-img" alt="vector" />
      <div class="heading">
        <h3>WHAT WE BUILD</h3>
        <p>Explore our projects</p>
      </div>
      <?php include(__DIR__ . '/templateparts/PorjectCardv2.php'); ?>

    </div>
  </section>

<?php

  // English content

} elseif ($selected_locale === 'ar') {
  // Arabic content
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
    <?php
    $servexp = get_field('experience_section_arabic');
    if ($servexp) {
      $expheading = $servexp['section_heading'];
      $expsubheading = $servexp['section_sub_heading'];
      $expdesc = $servexp['section_description'];
      $expimage = $servexp['section_image'];
    ?>
      <section class="our-services">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="services-img">
                <img src="<?php echo $expimage; ?>" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="content">
                <h3 id="ourservicemih3"><?php echo $expheading; ?></h3>
                <h5><?php echo $expsubheading; ?></h3>
                </h5>
                <?php echo $expdesc; ?></h3>

                <div class="populer populer-new populer-newly">
                    <?php include(PATHLOCAL.'/templates/templatepartsarabic/AboutStatsAbbreviateAr.php'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php
    }
    ?>
    <?php
    $ourserv = get_field('our_services_arabic');
    if ($ourserv) {
      $ourservheading = $ourserv['section_heading'];
      $ourservsubheading = $ourserv['section_sub_heading'];
      $ourservice = $ourserv['services'];
    ?>
      <section class="develop">
        <div class="container">
          <div class="develop-box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/white-vector.svg" class="white-vector" alt="">
            <h3><?php echo $ourservheading; ?></h3>
            <p class="p"><?php echo $ourservsubheading; ?></p>

            <div class="row">
              <?php
              foreach ($ourservice as $key => $value) {

                $serheading = $value['service_name'];
                $serimage = $value['service_image'];
              ?>
                <div class="col-lg-2 col-6">
                  <div class="developing">
                    <div class="developing-box">
                      <img src="<?php echo $serimage; ?>" alt="">
                    </div>

                    <p><?php echo $serheading; ?></p>
                  </div>

                </div>
              <?php
              } ?>
            </div>
          </div>
        </div>
  </div>
  </section>
<?php
    }
?>
<section class="build">
  <div class="container">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Vector.png" class="vector-img" alt="vector" />
    <div class="heading">
      <h3>ما نبنيه</h3>
      <p>اكتشف مشاريعنا</p>
    </div>
    <?php include(__DIR__ . '/templateparts/PorjectCardv2.php'); ?>

  </div>
</section>
</div>
<?php
}
?>
<?php get_footer(); ?>