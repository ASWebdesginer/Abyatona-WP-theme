<div class="row">
    <?php
    if(get_field('partners_arabic','options')) :
    if (have_rows('partners_arabic', 'options')) :
        while (have_rows('partners_arabic', 'options')) : the_row();
            $pname = get_sub_field('name_arabic');
            $pdescription = get_sub_field('description_arabic');
            $plogo = get_sub_field('logo_arabic');
    ?>
            <div class="col-lg-4">
                <div class="partner-box">
                    <h3><?php echo $pname; ?></h3>
                    <p><?php echo $pdescription; ?></p>

                    <div class="partner-logo">
                        <img src="<?php echo $plogo; ?>" alt="">
                    </div>
                </div>
            </div>
    <?php
        endwhile;
    endif; 
endif; ?>
</div>