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
?>

<body>

  <section class="banner lily-banner wahat-banner" id="banner">
    <div class="container">
      <?php include(PATHLOCAL . '/navbar.php'); ?>

      <div class="content">
        <img src="img/wath.png" alt="">
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
              if(get_field('hero_slider_items')) {
              // Check rows exists.
              if (have_rows('hero_slider_items')) :
              ?>
                <div class="slider">
                  <div class="owl-carousel">
                    <?php
                    // Loop through rows.
                    
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

                  <button class="button-newly"><a href=" <?php echo esc_html(get_field('hero_section_button_link')); ?>" style="color:white;z-index:999;"> <?php echo esc_html(get_field('hero_section_button_text')); ?></a></button>
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/book.svg" alt="">
                <span><?php echo the_field('brochure_heading'); ?></span>
              </li>
              <li>
                <a href="<?php echo  the_field('brochure_link'); ?>" style="color:white;">
                  <button class="button-newly-new"><span>3D</span><br> Wahat AlDamam 3D </a></button>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-5">
          <img src="<?php echo  the_field('about_project_image'); ?>" class="little-img" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="map">
    <div class="container">
      <div class="map-location">
        <h3><?php echo  the_field('map_section_title'); ?></h3>
        <img src="<?php echo  the_field('project_location_map_image'); ?>" class="img-fluid" alt="">
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
        <h3>Our Partners</h3>
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
        <h3>Other Projects</h3>
      </div>
      <?php include(__DIR__ . '/templates/templateparts/projectCard.php'); ?>

    </div>
  </section>


  <div class="arabic">

    <section class="banner lily-banner wahat-banner" id="banner">
      <div class="container">


        <div class="content">


          <div class="ban-images">
            <img src="img/wath.png" alt="">
          </div>
          <h1>
            واحة الدمام
          </h1>
          <p>لوريم إيبسوم دولور سيت أميت <br> كونسيكتيتور.</p>
        </div>

        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-9">
            <section class="desktop-slider" id="slider">
              <div class="container">

                <div class="slider">
                  <div class="owl-carousel">
                    <div class="slider-card">

                      <h5 class="mb-0 text-white">أبراج جدة</h5>
                      <p class="text-white">فيلات ومنازل</p>
                      <div class="slide-images">
                        <img src="img/Rectangle2.png" alt="">
                      </div>
                    </div>
                    <div class="slider-card">

                      <h5 class="mb-0 text-white">أبراج جدة</h5>
                      <p class="text-white">فيلات ومنازل</p>
                      <div class="slide-images">
                        <img src="img/home-new.png" alt="">
                      </div>
                    </div>

                    <div class="slider-card">

                      <h5 class="mb-0 text-white">أبراج جدة</h5>
                      <p class="text-white">فيلات ومنازل</p>
                      <div class="slide-images">
                        <img src="img/IMG_5777.JPG" alt="">
                      </div>
                    </div>


                  </div>

                  <div class="d-flex justify-content-end">
                    <button class="button-newly">احجز فيلتك الآن</button>
                  </div>
                </div>

              </div>
            </section>

            <section class="mobile-slider" id="slider">
              <div class="container">

                <div class="slider">
                  <div class="owl-carousel owl-carousel-new">
                    <div class="slider-card">

                      <h5 class="mb-0 text-white">أبراج جدة</h5>
                      <p class="text-white">فيلات ومنازل</p>
                      <div class="slide-images">
                        <img src="img/Rectangle2.png" alt="">
                      </div>
                    </div>
                    <div class="slider-card">

                      <h5 class="mb-0 text-white">أبراج جدة</h5>
                      <p class="text-white">فيلات ومنازل</p>
                      <div class="slide-images">
                        <img src="img/home-new.png" alt="">
                      </div>
                    </div>

                    <div class="slider-card">

                      <h5 class="mb-0 text-white">أبراج جدة</h5>
                      <p class="text-white">فيلات ومنازل</p>
                      <div class="slide-images">
                        <img src="img/IMG_5777.JPG" alt="">
                      </div>
                    </div>


                  </div>

                  <div class="d-flex justify-content-end">
                    <button class="button-newly">احجز فيلتك الآن</button>
                  </div>
                </div>

              </div>
            </section>
          </div>
        </div>
      </div>
    </section>


    <section class="lily-about">
      <div class="container">
        <img src="img/Vector40.png" class="vector-img-40" alt="">
        <div class="row">
          <div class="col-lg-7">
            <div class="content">
              <img src="img/wath-color.png" class="yellow-lily" alt="">
              <h3>واحة الدمام</h3>
              <p>لوريم إيبسوم دولور سيت أميت كونسيكتيتور. فيتاي فيل أوديو سيت بيبيندوم أليكويت أورنا بيلينتيسكويت إتيام. نيسي إيو فيوجيات كويسك فيل فيليس. فيل تينكيدونت تيلوس إيتيام إن بوسوير دوي أوغويه سيد.</p>
              <p>لوريم إيبسوم دولور سيت أميت كونسيكتيتور. فيتاي فيل أوديو سيت بيبيندوم أليكويت أورنا بيلينتيسكويت إتيام. نيسي إيو فيوجيات كويسك فيل فيليس. فيل تينكيدونت تيلوس إيتيام إن بوسوير دوي أوغويه سيد.</p>
              <p>لوريم إيبسوم دولور سيت أميت كونسيكتيتور. فيتاي فيل أوديو سيت بيبيندوم أليكويت أورنا بيلينتيسكويت إتيام. نيسي إيو فيوجيات كويسك فيل فيليس. فيل تينكيدونت تيلوس إيتيام إن بوسوير دوي أوغويه سيد.</p>

              <ul class="d-flex mt-4 align-items-center">
                <li>
                  <img src="img/book.svg" alt="">
                  <span>كتيب واحة الدمام</span>
                </li>

                <li>
                  <button class="button-newly-new"><span>3D</span><br> واحة الدمام ثلاثية الأبعاد</button>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5">
            <img src="img/little.png" class="little-img" alt="">
          </div>
        </div>
      </div>
    </section>


    <section class="map">
      <div class="container">
        <div class="map-location">
          <h3>موقع المشروع</h3>
          <img src="img/map.png" class="img-fluid" alt="">
        </div>
      </div>
    </section>

    <section class="project">
      <img src="img/Vector40.png" class="vector-img-40" alt="">
      <div class="container">
        <div class="heading">
          <h3>مميزات المشروع</h3>
        </div>

        <ul class="d-flex mt-5 gallery">
          <li class="image-box first">
            <div class="project-box  project-box-new">
              <h3>بيئة صحية</h3>
              <h4>بيئة صحية</h4>
              <p>لوريم إيبسوم دولور الجلوس أميت كونسيكتور. Facilisis sit Malesuada dui sed orci.Praesent ac gravida morbi
                Massa ut ac velit eget aliquet. Ut lorem sit felis nec congue at. Ipsum et porttitor etiam a ultrices.</p>
            </div>
          </li>

          <li class="image-box second">
            <div class=" project-box project-box-second project-box-new">
              <h3>التسوق</h3>
              <h4>التسوق</h4>
              <p>لوريم إيبسوم دولور الجلوس أميت كونسيكتور. Facilisis sit Malesuada dui sed orci.Praesent ac gravida morbi
                Massa ut ac velit eget aliquet. Ut lorem sit felis nec congue at. Ipsum et porttitor etiam a ultrices.</p>
            </div>
          </li>

          <li class="image-box third">
            <div class=" project-box project-box-third project-box-new">
              <h3>ترفيه</h3>
              <h4>ترفيه</h4>
              <p>لوريم إيبسوم دولور الجلوس أميت كونسيكتور. Facilisis sit Malesuada dui sed orci.Praesent ac gravida morbi
                Massa ut ac velit eget aliquet. Ut lorem sit felis nec congue at. Ipsum et porttitor etiam a ultrices.</p>
            </div>
          </li>

          <li class="image-box fourth">
            <div class=" project-box project-box-fourth project-box-new">
              <h3>القاعات</h3>
              <h4>القاعات</h4>
              <p>لوريم إيبسوم دولور الجلوس أميت كونسيكتور. Facilisis sit Malesuada dui sed orci.Praesent ac gravida morbi
                Massa ut ac velit eget aliquet. Ut lorem sit felis nec congue at. Ipsum et porttitor etiam a ultrices.</p>
            </div>
          </li>

          <li class="image-box fifth">
            <div class="project-box project-box-fifth project-box-new">
              <h3>الجوامع</h3>
              <h4>الجوامع</h4>
              <p>لوريم إيبسوم دولور الجلوس أميت كونسيكتور. Facilisis sit Malesuada dui sed orci.Praesent ac gravida morbi
                Massa ut ac velit eget aliquet. Ut lorem sit felis nec congue at. Ipsum et porttitor etiam a ultrices.</p>
            </div>
          </li>
          <li class="image-box sixth">
            <div class="project-box project-box-sixth project-box-new">
              <h3>المدارس</h3>
              <h4>المدارس</h4>
              <p>لوريم إيبسوم دولور الجلوس أميت كونسيكتور. Facilisis sit Malesuada dui sed orci.Praesent ac gravida morbi
                Massa ut ac velit eget aliquet. Ut lorem sit felis nec congue at. Ipsum et porttitor etiam a ultrices.</p>
            </div>
          </li>


        </ul>
      </div>
    </section>

    <section class="partner partner-new">
      <img src="img/Vector40.png" class="vector-img-40" alt="">
      <div class="container">
        <div class="heading">
          <h3 class="text-black">الشركاء</h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3">
            <div class="partner-box partner-box-new">

              <p>لوريم إيبسوم هو</p>

              <div class="partner-logo">
                <img src="img/Group.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="partner-box partner-box-new">

              <p>لوريم إيبسوم هو</p>

              <div class="partner-logo">
                <img src="img/group1.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="partner-box partner-box-new">

              <p>لوريم إيبسوم هو</p>

              <div class="partner-logo">
                <img src="img/nhc.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="build partner-new">
      <div class="container">
        <img src="img/Vector40.png" class="vector-img-40" alt="">
        <div class="heading">
          <h3>مشاريع أخرى</h3>
        </div>

        <div class="build-slider">
          <div class="care-slider-sec">
            <div class="container">
              <div class="ourCliendslider">
                <div id="marketingBannerSlider1" class="marketingBannerSlider1 owl-carousel owl-theme">
                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box">
                      <div class="img">
                        <img src="img/co.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>جدة هايتس</h3>
                          <p>فيلا ومنزل</p>

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
                        <img src="img/co1.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>أبياتونا ليلي</h3>
                          <p>فيلا ومنزل</p>

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
                        <img src="img/co2.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>Wahat AlDamam</h3>
                          <p>villa and house</p>
                        </div>
                      </div>

                      <div class="bottom-icon">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box">
                      <div class="img">
                        <img src="img/co.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>جدة هايتس</h3>
                          <p>فيلا ومنزل</p>

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
                        <img src="img/co1.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>أبياتونا ليلي</h3>
                          <p>فيلا ومنزل</p>

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
                        <img src="img/co2.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>واحة الدمام</h3>
                          <p>فيلا ومنزل</p>

                        </div>
                      </div>

                      <div class="bottom-icon">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box">
                      <div class="img">
                        <img src="img/co.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>جدة هايتس</h3>
                          <p>فيلا ومنزل</p>

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
                        <img src="img/co1.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>أبياتونا ليلي</h3>
                          <p>فيلا ومنزل</p>

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
                        <img src="img/co2.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>واحة الدمام</h3>
                          <p>فيلا ومنزل</p>

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


  </div>
  <?php get_footer(); ?>