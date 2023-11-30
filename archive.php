<?php 
/**
 * Template: Archieve template
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
      <?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
      </div>

    </div>
  </section>
    <?php include(PATHLOCAL.'/templates/templateparts/ArchieveCard.php'); ?>

  <?php 
  get_footer(); ?>