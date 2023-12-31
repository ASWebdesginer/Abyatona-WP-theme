<?php

/**
 * Template parts: Project CPT cards
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
                <div id="marketingBannerSlider1" class="marketingBannerSlider1 owl-carousel owl-theme">
                    <?php
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
                                <div class="slider-box" style="background-image: url(<?php echo esc_url(get_field('project_thumbnails')); ?>);">
                                    <div class="img">
                                        <img src="<?php echo esc_url(get_field('project_logo')); ?>" alt="co img" />
                                    </div>

                                    <div class="content">
                                        <div>
                                            <h3><?php  echo ($translate) ? get_field("hero_section_title_arabic") : the_title(); ?></h3>
                                            <p><?php echo ($translate) ? esc_html(get_field('project_type_arabic')) :esc_html(get_field('project_type')); ?></p>
                                        </div>
                                    </div>

                                    <div class="bottom-icon">
                                        <a href="<?php echo esc_url(get_permalink()); ?>"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Vector-arrow.png" alt="" /></a>
                                    </div>
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