<?php
/*
  Template Name: Home Page
 */
 ?>


<!-- Custom Fields -->

<?php get_header(); ?>

  <!-- HERO SECTION -->
  <?php get_template_part('template-parts/content', 'hero') ?>

  <!-- OPT IN SECTION -->
  <?php get_template_part('template-parts/content', 'optin') ?>


  <!-- BOOST YOUR INCOME SECTION -->
  <?php get_template_part('template-parts/content', 'boost') ?>


  <!-- WHO BENEFITS SECTION -->
  <?php get_template_part('template-parts/content', 'benefits') ?>


  <!-- COURSE FEATURES SECTION -->
  <?php get_template_part('template-parts/content', 'coursefeatures') ?>


  <!-- PROJECT FEATURES SECTION -->
  <?php get_template_part('template-parts/content', 'projectfeatures') ?>


  <!-- VIDEO FEATURETTE SECTION -->
  <?php get_template_part('template-parts/content', 'featurette') ?>


  <!-- INSTRUCTOR SECTION -->
  <?php get_template_part('template-parts/content', 'instructor') ?>


  <!-- TESTIMONIALS SECTION -->
  <?php get_template_part('template-parts/content', 'testimonials') ?>


<?php get_footer(); ?>
