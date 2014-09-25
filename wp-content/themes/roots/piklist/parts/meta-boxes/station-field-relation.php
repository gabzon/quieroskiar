<?php
/*
Title: My Domaine
Post Type: station
Order: 10
Priority: default
Context: side
Collapse: false
*/

  // Let's show the Meta Box 
  piklist('field', array(
    'type' => 'post-relate'
    ,'scope' => 'domaine'
    ,'template' => 'field'
  ));
?>

<?php 

  // Displaying your related posts is as simple as using WP_Query with one extra parameter, post_belongs
  $related = get_posts(array(
    'post_type' => 'domaine'
    ,'posts_per_page' => -1
    ,'post_belongs' => $post->ID
    ,'post_status' => 'publish'
    ,'suppress_filters' => false
  ));

  if ($related): 
?>

    <h4><?php _e('Related Posts', 'piklist-demo');?></h4>

    <ol>

      <?php foreach ($related as $related_post): ?>

        <li><?php _e($related_post->post_title); ?></li>

      <?php endforeach; ?>

    </ol>

    <hr />

<?php 
  endif;
?>