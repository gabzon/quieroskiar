

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
  <tr>
      <th colspan="2">Resort</th>
      <th>Region</th>
      <th>Opening date</th>
      <th>Altitude (Top - Bottom)</th>
      <th>Price (Adult / Children)</th>
  </tr>
</thead>

<tfoot>
  <tr>
      <th colspan="2">Resort</th>
      <th>Region</th>
      <th>Opening date</th>
      <th>Altitude (Top - Bottom)</th>
      <th>Price (Adult / Children)</th>
  </tr>
</tfoot>

<tbody>
  <tr>
  <?php global $wp_query;
  $wp_query = new WP_Query("post_type=resort&post_status=publish");
  while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

      <?php
        $logo=get_the_post_thumbnail( $post->ID);
        $top=get_post_meta($post->ID, 'altitude_top', true);
        $bottom=get_post_meta($post->ID, 'altitude_bottom', true);
        $adult=get_post_meta($post->ID, 'price_adult', true);
        $children=get_post_meta($post->ID, 'Price_children', true);
        $currency=get_post_meta($post->ID, 'price_currency', true);
        $term_list = wp_get_post_terms($post->ID, 'Regions');
        $region=$term_list[0]->name;
      ?>
      <td><?php echo get_the_post_thumbnail( $post->ID); ?></td>
      <td><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></td>
      <td><?php echo $region;?></td>
      <td><?php echo get_post_meta($post->ID, 'opening_date', true);?></td>
      <td><?php echo"$top - $bottom";?></td>
      <td><?php echo"$$adult $currency/ $children $currency";?></td>
  <?php endwhile; ?>
  </tr>
</tbody>
</table>

<script type="text/javascript" language="javascript" class="init">
  $(document).ready(function() {
  $('#example').dataTable();
  } );
</script>
