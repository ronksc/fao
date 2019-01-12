<?php
/**
 * Template Name: ccshop
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'ccshop'); ?>
<?php endwhile; ?>
