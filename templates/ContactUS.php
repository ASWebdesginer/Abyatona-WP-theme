<?php

/**
 * Template Name: ContactUS
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
include(PATHLOCAL.'/navbarv2.php');
if ($selected_locale === 'en' || $selected_locale === '') {

 ?>
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 p-lg-0">
            <div class="form">
              <form action="">
               <?php echo do_shortcode('[contact-form-7 id="adbabaa" title="Untitled"]');?>


                <ul class="mt-4">
                  <li><i class="fa-solid fa-phone"></i></li>
                  <li><a href="tel:<?php echo get_field('phone_number','options');?>"><?php echo get_field('phone_number','options');?></a></li>
                </ul>
                <ul>
                  <li><i class="fa-solid fa-envelope"></i></li>
                  <li><a href="mailto:<?php echo get_field('email_address','options');?>"><?php echo get_field('email_address','options');?></a></li>
                </ul>
                <ul>
                  <li><i class="fa-solid fa-location-dot"></i></li>
                  <li><a href="#"><?php echo get_field('address','options');?></a></li>
                </ul>
              </form>
            </div>
          </div>
          <div class="col-lg-7 p-lg-0">
            <div class="contact-map">
              <img src="<?php echo get_template_directory_uri(); ?>/img/map1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php

// English content

} elseif ($selected_locale === 'ar') {
// Arabic content
?>
<div class="arabic">

    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 p-lg-0">
            <div class="form">
              <form action="">
              <?php echo do_shortcode('[contact-form-7 id="4e95aba" title="Contact form Arabic"]');?>

                <ul class="mt-4">
                  
                  <li><a href="tel:<?php echo get_field('phone_number','options');?>"><?php echo get_field('phone_number','options');?></a></li>
                  <li><i class="fa-solid fa-phone"></i></li>
                </ul>
                <ul>
                  
                  <li><a href="mailto:<?php echo get_field('email_address','options');?>"><?php echo get_field('email_address','options');?></a></li>
                  <li><i class="fa-solid fa-envelope"></i></li>
                </ul>
                <ul>
                  
                  <li><a href="#"><?php echo get_field('address_in_arabic','options');?></a></li>
                  <li><i class="fa-solid fa-location-dot"></i></li>
                </ul>
              </form>
            </div>
          </div>
          <div class="col-lg-7 p-lg-0">
            <div class="contact-map">
              <img src="<?php echo get_template_directory_uri(); ?>/img/map1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

  <?php } get_footer(); ?>