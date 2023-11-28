
<?php 
/**
 * Template parts: archieve cards
 *
 * @package Abyatona
 * @subpackage Abyatona
 * @since Abyatona
 */
?>
<div class="container my-5">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); 
        $featureimg=get_the_post_thumbnail( get_the_ID(), 'large' );
        ?>
                <div class="col-sm-4 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo ($featureimg) ? $featureimg : 'https://placehold.co/600x400';?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title();?></h5>
                            <p class="card-text"><?php the_excerpt();?></p>
                            <a href="<?php echo esc_url(get_permalink()) ;?>" class="btn btn-primary my-3" style="background-color:#B8833B; border-color:#B8833B;">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endwhile;
        else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</div>