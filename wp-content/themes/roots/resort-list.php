<?php
/*
Template Name: Resort List Template
*/
?>
<section class="newsletter-form">
   <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/content', 'page'); ?>
   <?php endwhile; ?>
</section>


<section id="filters">
   <?php if(is_front_page()): ?>
      <?php echo get_template_part('templates/content','filters'); ?>
   <?php endif ?>
</section>


<main class="list" role="list">
  <?php get_template_part('templates/content','table'); ?>
</main>
