<?php 
/**
 * Template: Single Post Template
 *
 * @package Abyatona
 * @subpackage Abyatona
 * @since Abyatona
 */
get_header();
?>
  <section class="new-banner" id="new-banner">
    <div class="container">
    <?php include(PATHLOCAL.'/navbar.php'); ?>

      <div class="content">
        <h1>
          <?php  the_title();?>
        </h1>
      </div>
    </div>
  </section>
  <section>
  <?php  the_content();?>
  </section>

  <?php 
  get_footer(); ?>