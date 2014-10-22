<h4>Regions</h4>
<section>
  <ul class="filters">
    <?php
      $taxonomy = array(
        'post_tag',
        'Regions'
      );
      $args = array(
        'orderby'  => 'name',
        'hide_empty' => 0
      );
      $regions = get_terms($taxonomy,$args);
      foreach($regions as $region){
        echo"<li><input type='checkbox' class='region-query' value='$region->name'> $region->name</li>\n";
      }
    ?>
  </ul>
</section>
