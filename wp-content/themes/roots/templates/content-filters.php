<?php
  $taxonomy = array( 'post_tag','Filters' );
  $args = array('orderby'  => 'name','hide_empty' => 0);
  $filters = get_terms($taxonomy,$args);
  $taxonomy = array( 'post_tag','proximity' );
  $args = array('orderby'  => 'name','hide_empty' => 0);
  $proximity = get_terms($taxonomy,$args);
?>

<div class="row">
   <div class="col-md-1">
      <strong>Preferences</strong>
   </div>

   <div class="col-md-11">
      <div id="checkboxes">
         <?php  foreach($filters as $filter): ?>
            <span class="filter-label label label-info">
               <input type="checkbox" name="column" value="<?php echo $filter->name;?>">
               <?php echo $filter->name ?>
            </span>
         <?php endforeach; ?>
         <?php  foreach($proximity as $p): ?>
            <span class="filter-label label label-info">
               <input type="checkbox" name="column" value="<?php echo $p->name;?>">
               <?php echo $p->name ?>
            </span>
         <?php endforeach; ?>
      </div>
   </div>
</div>
