<?php
/**
 * Template Name: General Default Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'general'); ?>
<?php endwhile; ?>
