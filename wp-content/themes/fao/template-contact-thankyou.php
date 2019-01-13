<?php
/**
 * Template Name: Contact Thankyou
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'contact-thankyou'); ?>
<?php endwhile; ?>
