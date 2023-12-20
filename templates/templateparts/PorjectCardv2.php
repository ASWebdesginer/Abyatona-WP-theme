
<?php 
/**
 * Template parts: Project CPT V2 cards
 *
 * @package Abyatona
 * @subpackage Abyatona
 * @since Abyatona
 */
if (!session_id()) {
  session_start();
}
?>
<div class="build-slider">
        <div class="care-slider-sec">
          <div class="container">
            <div class="ourCliendslider">
              <div id="marketingBannerSlider2" class="marketingBannerSlider1 owl-carousel owl-theme">
                    <?php
                    // Check the session for the selected locale and enqueue appropriate CSS file
                      $translate=false;
                        $selected_locale = '';
                        if (isset($_SESSION['locale'])) {
                            $selected_locale = $_SESSION['locale'];
                        }
                    // Check the session for the selected locale and enqueue appropriate CSS file
                    if ($selected_locale === '' || $selected_locale === 'ar') {
                        // Enqueue Arabic-specific CSS file
                        $translate=true;
                    }
                        $args = array(
                            'post_type' => 'project',  
                            'posts_per_page' => -1
                        );
                    $theprojects = new WP_Query($args);

                    if ($theprojects->have_posts()) {
                        while ($theprojects->have_posts()) {
                            $theprojects->the_post();
                    ?>  
                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <a href="<?php echo esc_url(get_permalink()) ;?>">
                    <img src="<?php echo esc_url(get_field('project_logo')); ?>" alt="">
                    <h3><?php echo ($translate) ? get_field("hero_section_title_arabic") : the_title(); ?></h3>
                    <p><?php the_excerpt();?></p>
                    </a>
                  </div>
                </div>
                <?php
                        }
                        wp_reset_postdata(); // Reset the post data to the main query
                    }
                    ?>
              </div>
            </div>
          </div>
        </div>
      </div>