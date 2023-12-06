<?php 
function formatNumber($num) {
    if ($num >= 1000000) {
        return round($num / 1000000, 0) . 'M+';
    } elseif ($num >= 1000) {
        return round($num / 1000, 0) . 'K+';
    } else {
        return $num;
    }
}

// Usage examples// Output: 450
?>
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
                    $bad_symbols = array(",", ".");
                    $formattedNumbe = str_replace($bad_symbols, "", $statsnumber);
    
                    // Convert to float and format
                    $formattedNumber = formatNumber(intval($formattedNumbe));
                    // Do something...
        ?>
                    <div class="col-lg-3 col-6">
                        <div class="populer-box">
                            <h4><?php echo $formattedNumber; ?></h4>
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