<?php 
/**
 * Template parts: Partners cards
 *
 * @package Abyatona
 * @subpackage Abyatona
 * @since Abyatona
 */
?>
     <!-- Partner   start -->

        <div class="container">
            <div class="heading">
                <h3>Our Partners</h3>
            </div>

            <div class="row">
                <?php 
                 if(have_rows('partners','options')):
                    while(have_rows('partners','options')) : the_row();
                    $pname=get_sub_field('name');
                    $pdescription=get_sub_field('description');
                    $plogo=get_sub_field('logo');
               ?>
                <div class="col-lg-4">
                    <div class="partner-box">
                        <h3><?php echo $pname;?></h3>
                        <p><?php echo $pdescription;?></p>

                        <div class="partner-logo">
                            <img src="<?php echo $plogo;?>" alt="">
                        </div>
                    </div>
                </div>
                <?php 
                endwhile;
            endif;?>
            </div>
        </div>
   <!-- Mission   start -->