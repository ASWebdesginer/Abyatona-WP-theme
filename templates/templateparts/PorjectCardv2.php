
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
                    if (isset($_SESSION['locale']) && $_SESSION['locale'] == 'ar') {
                        // Enqueue Arabic-specific CSS file
                        $args = array(
                            'post_type' => 'project',  
                            'category_name' => 'arabic', 
                            'posts_per_page' => -1
                        );
                    }
                    else{
                        $args = array(
                            'post_type' => 'project',
                            'category_name' => 'english', 
                            'posts_per_page' => -1
                        );  
                    }
                    $theprojects = new WP_Query($args);

                    if ($theprojects->have_posts()) {
                        while ($theprojects->have_posts()) {
                            $theprojects->the_post();
                    ?>  
                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <a href="<?php echo esc_url(get_permalink()) ;?>">
                    <img src="<?php echo esc_url(get_field('project_logo')); ?>" alt="">
                    <h3><?php the_title(); ?></h3>
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