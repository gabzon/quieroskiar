<h4>Filters</h4>
<section>
  <ul class="filters">
    <?php
      $taxonomy = array(
        'post_tag',
        'Filters'
      );
      $args = array(
        'orderby'  => 'name',
        'hide_empty' => 0
      );
      $filters = get_terms($taxonomy,$args);
      foreach($filters as $filter){
        echo"<li><input type='checkbox' class='filter-query' value='$filter->name'> $filter->name</li>\n";
      }
    ?>
  </ul>
</section>
