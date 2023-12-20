<?php
$selected_locale = '';
if (isset($_SESSION['locale'])) {
    $selected_locale = $_SESSION['locale'];
}
if ($selected_locale === 'en') { ?>

    <footer class="footer-section">
        <div class="container">
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-3 col-lg-3  mb-50">
                        <div class="footer-widget footer-widget-new">
                            <div class="footer-logo">
                                <?php
                                $footer_theme_logo = get_theme_mod('footer_theme_logo', '');
                                ?>
                                <a href="index.html"><img src="<?php echo $footer_theme_logo; ?>" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p><?php echo the_field('footer_description', 'options'); ?></p>
                            </div>
                            <div class="footer-social-icon">
                                <a href="<?php echo the_field('facebook_profile_url', 'options'); ?>"><i class="fa-brands fa-facebook"></i></a>
                                <a href="<?php echo the_field('twitter_profile_url', 'options'); ?>"><i class="fab fa-twitter"></i></a>
                                <a href="<?php echo the_field('instagram_profile_url', 'options'); ?>"><i class="fa-brands fa-instagram"></i></a>
                                <a href="<?php echo the_field('linkedin_profile_url', 'options'); ?>"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 col-6 col-md-6 mb-30">
                        <div class="footer-widget ">
                            <div class="footer-widget-heading">
                                <h3><?php echo the_field('footer_about_section_heading', 'options'); ?></h3>
                            </div>
                            <ul>
                                <?php
                                if (get_field('footer_about_link', 'options')) {
                                    if (have_rows('footer_about_link', 'options')) :
                                        while (have_rows('footer_about_link', 'options')) : the_row();
                                            $flink = get_sub_field('footer__link');
                                            $ftext = get_sub_field('footer_text');
                                ?>

                                            <li><a href="<?php echo $flink; ?>"><?php echo $ftext; ?></a></li>

                                <?php

                                        endwhile;
                                    endif;
                                } ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-6 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3><?php echo the_field('footer_projects_section_heading', 'options'); ?></h3>
                            </div>
                            <ul>
                                <?php
                                if (get_field('footer_projects_link', 'options')) {
                                    if (have_rows('footer_projects_link', 'options')) :
                                        while (have_rows('footer_projects_link', 'options')) : the_row();
                                            $flink = get_sub_field('footer__link');
                                            $ftext = get_sub_field('footer_text');
                                ?>

                                            <li><a href="<?php echo $flink; ?>"><?php echo $ftext; ?></a></li>

                                <?php

                                        endwhile;
                                    endif;
                                } ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-1 col-lg-1 col-6 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3><?php echo the_field('footer_services_section_heading', 'options'); ?></h3>
                            </div>
                            <ul>
                                <?php
                                if (get_field('footer_services_link', 'options')) {
                                    if (have_rows('footer_services_link', 'options')) :
                                        while (have_rows('footer_services_link', 'options')) : the_row();
                                            $flink = get_sub_field('footer__link');
                                            $ftext = get_sub_field('footer_text');
                                ?>

                                            <li><a href="<?php echo $flink; ?>"><?php echo $ftext; ?></a></li>

                                <?php

                                        endwhile;
                                    endif;
                                } ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-6 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3><?php echo the_field('footer_services_section_heading', 'options'); ?></h3>
                            </div>
                            <ul>
                                <?php
                                if (get_field('footer_contact_link', 'options')) {
                                    if (have_rows('footer_contact_link', 'options')) :
                                        while (have_rows('footer_contact_link', 'options')) : the_row();
                                            $flink = get_sub_field('footer__link');
                                            $ftext = get_sub_field('footer_text');
                                ?>

                                            <li><a href="<?php echo $flink; ?>"><?php echo $ftext; ?></a></li>

                                <?php

                                        endwhile;
                                    endif;
                                } ?>
                            </ul>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-3  col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Subscribe to get latest property, blog news from us</p>
                            </div>
                            <div class="subscribe-form">
                                <?php echo do_shortcode('[wpforms id="678" title="false"]');?>
                            <!--    <form action="#">-->
                            <!--        <input type="text" placeholder="Email Address">-->
                            <!--        <button><i class="fa-solid fa-arrow-right"></i></button>-->
                            <!--    </form>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php

    // English content

} elseif ($selected_locale === 'ar'  || $selected_locale === '') {
    // Arabic content
?>

    <div class="arabic">

        <footer class="footer-section">
            <div class="container">
                <div class="footer-content pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3  mb-50">
                            <div class="footer-widget footer-widget-new">
                                <div class="footer-logo">
                                    <?php
                                    $footer_theme_logo = get_theme_mod('footer_theme_logo', '');
                                    ?>
                                    <a href="index.html"><img src="<?php echo $footer_theme_logo; ?>" class="img-fluid" alt="logo"></a>
                                </div>
                                <div class="footer-text">
                                    <p><?php echo the_field('arabic_footer_description', 'options'); ?></p>
                                </div>
                                <div class="footer-social-icon">
                                    <a href="<?php echo the_field('facebook_profile_url', 'options'); ?>"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="<?php echo the_field('twitter_profile_url', 'options'); ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="<?php echo the_field('instagram_profile_url', 'options'); ?>"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="<?php echo the_field('linkedin_profile_url', 'options'); ?>"><i class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-1 col-6 col-md-6 mb-30">
                            <div class="footer-widget ">
                                <div class="footer-widget-heading">
                                    <h3><?php echo the_field('arabic_footer_about_section_heading', 'options'); ?></h3>
                                </div>
                                <ul>
                                    <?php
                                    if (get_field('arabic_footer_about_link', 'options')) {
                                        if (have_rows('arabic_footer_about_link', 'options')) :
                                            while (have_rows('arabic_footer_about_link', 'options')) : the_row();
                                                $flink = get_sub_field('footer__link');
                                                $ftext = get_sub_field('footer_text');
                                    ?>

                                                <li><a href="<?php echo $flink; ?>"><?php echo $ftext; ?></a></li>

                                    <?php

                                            endwhile;
                                        endif;
                                    } ?>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-6 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3><?php echo the_field('arabic_footer_projects_section_heading', 'options'); ?></h3>
                                </div>
                                <ul>
                                    <?php
                                    if (get_field('arabic_footer_projects_link', 'options')) {
                                        if (have_rows('arabic_footer_projects_link', 'options')) :
                                            while (have_rows('arabic_footer_projects_link', 'options')) : the_row();
                                                $flink = get_sub_field('footer__link');
                                                $ftext = get_sub_field('footer_text');
                                    ?>

                                                <li><a href="<?php echo $flink; ?>"><?php echo $ftext; ?></a></li>

                                    <?php

                                            endwhile;
                                        endif;
                                    } ?>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-1 col-lg-1 col-6 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3><?php echo the_field('arabic_footer_services_section_heading', 'options'); ?></h3>
                                </div>
                                <ul>
                                    <?php
                                    if (get_field('arabic_footer_services_link', 'options')) {
                                        if (have_rows('arabic_footer_services_link', 'options')) :
                                            while (have_rows('arabic_footer_services_link', 'options')) : the_row();
                                                $flink = get_sub_field('footer__link');
                                                $ftext = get_sub_field('footer_text');
                                    ?>

                                                <li><a href="<?php echo $flink; ?>"><?php echo $ftext; ?></a></li>

                                    <?php

                                            endwhile;
                                        endif;
                                    } ?>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-6 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3><?php echo the_field('arabic_footer_contact_section_heading', 'options'); ?></h3>
                                </div>
                                <ul>
                                    <?php
                                    if (get_field('arabic_footer_contact_link', 'options')) {
                                        if (have_rows('arabic_footer_contact_link', 'options')) :
                                            while (have_rows('arabic_footer_contact_link', 'options')) : the_row();
                                                $flink = get_sub_field('footer__link');
                                                $ftext = get_sub_field('footer_text');
                                    ?>

                                                <li><a href="<?php echo $flink; ?>"><?php echo $ftext; ?></a></li>

                                    <?php

                                            endwhile;
                                        endif;
                                    } ?>
                                </ul>
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-3  col-md-6 mb-50">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>اشترك</h3>
                                </div>
                                <div class="footer-text mb-25">
                                    <p>اشترك للحصول على آخر أخبار العقارات والمدونات منا</p>
                                </div>
                                <div class="subscribe-form">
                                    <?php echo do_shortcode('[wpforms id="686" title="false"]');?>
                                    <!--<form action="#">-->
                                    <!--    <input type="text" placeholder="عنوان البريد الإلكتروني">-->
                                    <!--    <button><i class="fa-solid fa-arrow-right"></i></button>-->
                                    <!--</form>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
            </div>

        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>

        <script>
            $("#marketingBannerSlider1").owlCarousel({
                loop: true,
                margin: 40,
                nav: false,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: false,
                dots: true,
                mouseDrag: true,
                autoHeight: true,

                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 3,
                    },
                },
            });
        </script>

        <script>
            $("#marketingBannerSlider2").owlCarousel({
                loop: true,
                margin: 15,
                nav: false,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: false,
                dots: true,
                mouseDrag: true,
                autoHeight: true,

                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 4,
                    },
                },
            });
        </script>

        <script>
            $(document).ready(function() {
                $(".owl-carousel-new").owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,

                    navText: [
                        "<i class='fa fa-angle-left'></i>",
                        "<i class='fa fa-angle-right'></i>"
                    ],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                });
            });
        </script>



        <script>
            $(document).ready(function() {
                var owl = $(".owl-carousel").owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    center: true,
                    navText: [
                        "<i class='fa fa-angle-left'></i>",
                        "<i class='fa fa-angle-right'></i>"
                    ],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 3
                        }
                    },
                    onChanged: function(event) {
                        // Get the current item index

                        var currentIndex = event.item.index;

                        // Construct the URL of the image based on the currentIndex
                        var imageURL = $('.owl-carousel .owl-item').eq(currentIndex).find('.slide-images img').attr('src');

                        // Update the background image of the element with class "banner"
                        $('.banner').css('background-image', 'url("' + imageURL + '")');
                        console.log(imageURL);
                        console.log(currentIndex)
                    }
                });
                var currenturl= window.location.href;
                var currenttext="";
                  jQuery(".mainmenulist").find("li").each(function(){
                      if($(this).find("a").attr("href")== currenturl){
                         currenttext= $(this).find("a").text(); 
                      }
                  })
                  if(currenttext !== ""){
                                     jQuery("#dropdownMenuButton").text(currenttext);
                  };
                  jQuery(".subscribe_submit").html('<i class="fa-solid fa-arrow-right"></i>');
                  
            });
          
        </script>
        <?php wp_footer(); ?>

        </body>

        </html>