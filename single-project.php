<?php

/**
 * Template: Project CPT Single 
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
if ($selected_locale === 'en' ) {
?>

<body>

  <section class="banner lily-banner wahat-banner" id="banner">
    <div class="container">
      <?php include(PATHLOCAL . '/navbar.php'); ?>

      <div class="content">
        <img src="<?php echo esc_url(get_field('project_logo')); ?>" alt="">
        <h1>
          <?php echo the_title(); ?>
        </h1>
        <p id="singphed"> <?php echo esc_html(get_field('hero__section_sub_heading')); ?></p>
      </div>


      <div class="row">
          <div class="col-lg-9">
          <section id="slider">
            <div class="container">
              <?php
              if (get_field('hero_slider_items')) {
                // Check rows exists.
                if (have_rows('hero_slider_items')) :
              ?>
                  <div class="slider">
                    <div class="owl-carousel">
                      <?php
                      // Loop through rows.cont

                      while (have_rows('hero_slider_items')) : the_row();
                        if (get_sub_field('slider_item_name') && get_sub_field('slider_item_type') && get_sub_field('slider_item_image')) {

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
                        }
                      endwhile;

                    // No value.
                    else :
                    // Do something...
                    endif;
                  }
                  ?>
                    </div>

                    <button class="button-newly" type="button" data-toggle="modal" data-target="#exampleModal"> <?php echo esc_html(get_field('hero_section_button_text')); ?></button>
                  </div>

            </div>
          </section>
           </div>
      </div>
    </div>
  </section>

  <section class="lily-about">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Vector40.png" class="vector-img-40" alt="">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="content">
            <?php $picon = get_field('about_project_icon');
            if ($picon) {
            ?>
              <img src="<?php echo $picon; ?>" class="yellow-lily" alt="">
            <?php
            }
            ?>
            <h3> <?php echo the_title(); ?></h3>
            <p><?php echo the_field('project__description'); ?></p>
            <ul class="d-flex mt-4 align-items-center">
              <li>
                  <a href="<?php echo  the_field('brochure_link'); ?>" style="color:#212529;" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/book.svg" alt="">
                <span><?php echo the_field('brochure_heading'); ?></span>
                </a>
              </li>
              <li>
                <a href="<?php echo  the_field('map_3d'); ?>" style="color:white;" target="_blank">
                  <button class="button-newly-new"><span>3D</span><br> <?php echo the_field("3d_map_button_text");?> </a></button>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-5" id="aboutimageabs">
          <img src="<?php echo  the_field('about_project_image'); ?>" class="little-img" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="map">
    <div class="container">
      <div class="map-location">
        <h3><?php echo  the_field('map_section_title'); ?></h3>
        <a href="<?php echo  the_field('project_location_url'); ?>" target="_blank">
        <img src="<?php echo  the_field('project_location_map_image'); ?>" class="img-fluid" alt="">
        </a>
      </div>
    </div>
  </section>

  <section class="project">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Vector40.png" class="vector-img-40" alt="">
    <div class="container">
      <div class="heading">
        <h3><?php echo  the_field('project_feature_section_title'); ?></h3>
      </div>

      <ul class="d-flex mt-5 gallery">

        <?php
        if (get_field('project_features')) {
          if (have_rows('project_features')) {

            while (have_rows('project_features')) {
              the_row(); // Make sure to call the_row() to set up the row for get_sub_field()

              // Check if the subfield exists before trying to access its values
              if (get_sub_field('feature_heading') && get_sub_field('feature_description') && get_sub_field('feature_image')) {
                $fheading = get_sub_field('feature_heading');
                $fdescription = get_sub_field('feature_description');
                $fimage = get_sub_field('feature_image');
        ?>
                <li class="image-box">
                  <div class="project-box project-box-new" style="background-image:url(<?php echo $fimage; ?>)">
                    <h3><?php echo $fheading; ?></h3>
                    <h4><?php echo $fheading; ?></h4>
                    <p><?php echo $fdescription; ?></p>
                  </div>
                </li>
        <?php
              }
            }
          }
        }
        ?>

      </ul>
    </div>
  </section>

  <section class="partner partner-new" id="projectpartner">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Vector40.png" class="vector-img-40" alt="">

    <div class="container">
      <div class="heading">
        <h3><?php echo get_field('partner_section_title','options'); ?> </h3>
      </div>

      <div class="row justify-content-center">
        <?php
        if (have_rows('partners', 'options')) :
          while (have_rows('partners', 'options')) : the_row();
            $pname = get_sub_field('name');
            $pdescription = get_sub_field('description');
            $plogo = get_sub_field('logo');
        ?>
            <div class="col-lg-3">
              <div class="partner-box partner-box-new">
                <p><?php echo $pdescription; ?></p>

                <div class="partner-logo">
                  <img src="<?php echo $plogo; ?>" alt="">
                </div>
              </div>
            </div>
        <?php
          endwhile;
        endif; ?>
      </div>
    </div>
  </section>

  <section class="build partner-new">
    <div class="container">
      <img src="<?php echo get_template_directory_uri(); ?>/img/Vector40.png" class="vector-img-40" alt="">
      <div class="heading">
        <h3> Other Projects</h3>
      </div>
      <?php include(__DIR__ . '/templates/templateparts/projectCard.php'); ?>

    </div>
  </section>
  <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header text-center">
         <?php $picon = get_field('about_project_icon_arabic');
            if ($picon) {
            ?>
              <img src="<?php echo $picon; ?>" class="img-fluid mx-auto" alt="">
            <?php
            }
            ?>
      </div>
      <div class="modal-body">
          <div class="w-75 mx-auto">
          <?php echo do_shortcode('[wpforms id="603"]');?>
          </div>
      </div>
    </div>
  </div>
</div>
  <?php

// English content

} elseif ($selected_locale === 'ar' || $selected_locale === '') {
// Arabic content
?>
  <!-- arabice start -->
  <section class="banner lily-banner wahat-banner" id="banner">
    <div class="container">
      <?php include(PATHLOCAL . '/navbar.php'); ?>

      <div class="content">
          <div class="ban-images">
             <img src="<?php echo esc_url(get_field('project_logo')); ?>" alt="">
          </div>
        <h1>
          <?php echo get_field('hero_section_title_arabic'); ?>
        </h1>
        <p id="singphed"> <?php echo esc_html(get_field('hero__section_sub_heading_arabic')); ?></p>
      </div>


      <div class="row">
          <div class="col-lg-3"></div>
           <div class="col-lg-9">
          <section class="desktop-slider" id="slider">
            <div class="container">
              <?php
              if (get_field('hero_slider_items_arabic')) {
                // Check rows exists.
                if (have_rows('hero_slider_items_arabic')) :
              ?>
                  <div class="slider">
                    <div class="owl-carousel">
                      <?php
                      // Loop through rows.

                      while (have_rows('hero_slider_items_arabic')) : the_row();
                        if (get_sub_field('slider_item_name') && get_sub_field('slider_item_type') && get_sub_field('slider_item_image')) {

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
                        }
                      endwhile;

                    // No value.
                    else :
                    // Do something...
                    endif;
                  }
                  ?>


                    </div>

                    <div class="d-flex justify-content-end">
                      <button class="button-newly"  type="button" data-toggle="modal" data-target="#exampleModalar"><?php echo get_field('hero_section_button_text_arabic'); ?></button>
                    </div>
                  </div>

            </div>
          </section>
           </div>
  
      </div>
    </div>
  </section>

  <section class="lily-about">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Vector40.png" class="vector-img-40" alt="">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="content">
            <?php $picon = get_field('about_project_icon_arabic');
            if ($picon) {
            ?>
              <img src="<?php echo $picon; ?>" class="yellow-lily" alt="">
            <?php
            }
            ?>
            <h3><?php echo the_field('hero_section_title_arabic'); ?></h3>
            <p><?php echo the_field('project__description_arabic'); ?></p>
            <ul class="d-flex mt-4 align-items-center">
              <li>
                    <a href="<?php echo  the_field('brochure_link'); ?>" style="color:#212529;" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/book.svg" alt="">
                <span><?php echo the_field('brochure_heading_arabic'); ?></span>
                </a>
              </li>
              <li>
                <a href="<?php echo  the_field('map_3d'); ?>" style="color:white;" target="_blank">
                  <button class="button-newly-new"><span>3D</span><br> <?php echo the_field("3d_map_button_text_arabic");?> </a></button>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-5" id="aboutimageabs">
          <img src="<?php echo  the_field('about_project_image_arabic'); ?>" class="little-img" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="map">
    <div class="container">
      <div class="map-location text-center">
        <h3><?php echo  the_field('map_section_title_arabic'); ?></h3>
          <a href="<?php echo  the_field('project_location_url'); ?>" target="_blank">
        <img src="<?php echo  the_field('project_location_map_image_arabic'); ?>" class="img-fluid" alt="">
        </a>
      </div>
    </div>
  </section>

  <section class="project">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Vector40.png" class="vector-img-40" alt="">
    <div class="container">
      <div class="heading">
        <h3><?php echo  the_field('project_feature_section_title_arabic'); ?></h3>
      </div>

      <ul class="d-flex mt-5 gallery">

        <?php
        if (get_field('project_features_arabic')) {
          if (have_rows('project_features_arabic')) {

            while (have_rows('project_features_arabic')) {
              the_row(); // Make sure to call the_row() to set up the row for get_sub_field()

              // Check if the subfield exists before trying to access its values
              if (get_sub_field('feature_heading') && get_sub_field('feature_description') && get_sub_field('feature_image')) {
                $fheading = get_sub_field('feature_heading');
                $fdescription = get_sub_field('feature_description');
                $fimage = get_sub_field('feature_image');
        ?>
                <li class="image-box">
                  <div class="project-box project-box-new" style="background-image:url(<?php echo $fimage; ?>)">
                    <h3><?php echo $fheading; ?></h3>
                    <h4><?php echo $fheading; ?></h4>
                    <p><?php echo $fdescription; ?></p>
                  </div>
                </li>
        <?php
              }
            }
          }
        }
        ?>

      </ul>
    </div>
  </section>

  <section class="partner partner-new" id="projectpartner">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Vector40.png" class="vector-img-40" alt="">

    <div class="container">
      <div class="heading">
        <h3><?php echo get_field('partner_arabic_section_title','options'); ?> </h3>
      </div>

      <div class="row justify-content-center">
        <?php
        if (have_rows('partners', 'options')) :
          while (have_rows('partners', 'options')) : the_row();
            $pname = get_sub_field('name');
            $pdescription = get_sub_field('description');
            $plogo = get_sub_field('logo');
        ?>
            <div class="col-lg-3">
              <div class="partner-box partner-box-new">
                <p><?php echo $pdescription; ?></p>

                <div class="partner-logo">
                  <img src="<?php echo $plogo; ?>" alt="">
                </div>
              </div>
            </div>
        <?php
          endwhile;
        endif; ?>
      </div>
    </div>
  </section>

  <section class="build partner-new">
    <div class="container">
      <img src="<?php echo get_template_directory_uri(); ?>/img/Vector40.png" class="vector-img-40" alt="">
      <div class="heading">
        <h3> مشاريع أخرى</h3>
      </div>
      <?php include(__DIR__ . '/templates/templateparts/projectCard.php'); ?>

    </div>
  </section>

  <!-- arabice start -->
<!-- Modal -->
<div class="modal fade" id="exampleModalar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header text-center">
         <?php $picon = get_field('about_project_icon_arabic');
            if ($picon) {
            ?>
              <img src="<?php echo $picon; ?>" class="img-fluid mx-auto" alt="">
            <?php
            }
            ?>
      </div>
      <div class="modal-body">
          <div class="w-75 mx-auto text-right">
          <?php echo do_shortcode('[wpforms id="607"]	');?>
          </div>
      </div>
    </div>
  </div>
</div>
  <?php } get_footer(); ?>