<?php
/**
 * Template Name: press detail
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'press-detail'); ?>
<?php endwhile; ?>
