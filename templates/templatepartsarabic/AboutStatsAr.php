<div class="container">
    <div class="row">
        <?php

        // Check if rows exist.
        if (get_field('about_stats_arabic', 'options')) :
            if (have_rows('about_stats_arabic', 'option')) :
                // Loop through rows.
                while (have_rows('about_stats_arabic', 'option')) : the_row();

                    // Load sub field values.
                    $statsnumber = get_sub_field('about_stats_number');
                    $statsdesc = get_sub_field('about_stats_desc');
                    // Do something...
        ?>
                    <div class="col-lg-3 col-6">
                        <div class="populer-box">
                            <h4><?php echo $statsnumber; ?></h4>
                            <p><?php echo $statsdesc; ?></p>
                        </div>
                    </div>
        <?php
                // End loop.
                endwhile;

            // No value.
            else :
            // Do something...
            endif;
        endif;
        ?>
    </div>
</div>