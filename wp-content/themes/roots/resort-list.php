<?php
/*
Template Name: Resort List Template
*/
?>
<section id="filters">
   <?php if(is_front_page()): ?>
      <?php echo get_template_part('templates/content','filters'); ?>
      <hr class="filter-separator">
      <?php echo get_template_part('templates/content','regions'); ?>
   <?php endif ?>
</section>


<main class="list" role="list">
  <?php get_template_part('templates/content','table'); ?>
</main>
