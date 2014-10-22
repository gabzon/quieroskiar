<?php
  define('WP_USE_THEMES',false);
  require_once("/../../../../wp-blog-header.php");
  $numero = count($_GET);
  $tags = array_keys($_GET);
  $fdata = array_values($_GET);
?>
<div id="dtables">
<table id="myDataTable" class="table table-striped table-bordered">
  <thead>
    <tr>
        <th>Resort</th>
        <th>Webcam</th>
        <th>Category</th>
        <th>Region</th>
        <th>Status</th>
        <th>Altitude Top (Village)</th>
        <th>Price Adult (children)</th>
    </tr>
  </thead>

  <tbody>

    <?php
    global $wp_query;
    $wp_query = new WP_Query("post_type=resort&post_status=publish&posts_per_page=-1");
    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <?php
          $resort_currency = get_post_meta($post->ID, 'price_currency', true);
          $currency = ($resort_currency == 0 ? 'CHF' : 'EUR');
          $filters = wp_get_post_terms($post->ID, 'Filters');
          $regions = wp_get_post_terms($post->ID, 'Regions');
          $webcam = get_post_meta($post->ID, 'webcam', true);

          $sw=0;
          $i=0;
          $cont=0;
          //if(count($filters)==count($data)){
            while($filters[$i] && !$sw){
              if(in_array($filters[$i]->name,$fdata))
                $sw=1;
              $i++;
            }
          //}
          if($sw){
        ?>

      <tr>
         <td>
            <a href="<?php echo get_post_meta($post->ID, 'website', true); ?>" target="_blank">
               <?php echo get_the_post_thumbnail( $post->ID,'medium' ); ?>
               <?php echo the_title(); ?>
            </a>
         </td>

         <td><a href="<?php echo $webcam;  ?>" target="_blank"><img src="<?php echo $webcam  ?>" width="100"></a></td>
         <!-- Filter category -->
         <td>
            <?php
            $i=0;
            while($filters[$i]){
              if(in_array($filters[$i]->name,$fdata))
                echo"<b>".$filters[$i]->name."</b>";
              else
                echo $filters[$i]->name;
              if($i>=0 && $filters[$i+1])
                echo", ";
              $i++;
            }
            ?>
         </td>
         <!-- Regions -->
         <td>
           <?php
           $i=0;
           while($regions[$i]){
              echo $regions[$i]->name;
              if($i>=0 && $regions[$i+1])
              echo", ";
              $i++;
           }
           ?>
         </td>
         <!-- Status -->
         <td>
            <a href="<?php echo get_post_meta($post->ID,'ski_area_status',true); ?>">
               <img src="<?php echo get_stylesheet_directory_uri()."/assets/img/traffic-light.png" ?>" alt=""/>
            </a>
         </td>
         <!-- Altitude -->
         <td><?php echo get_post_meta($post->ID, 'altitude_top', true); ?></td>
         <!-- Price -->
         <td><?php echo $currency . " " .get_post_meta($post->ID, 'price_adult', true)."(".get_post_meta($post->ID, 'Price_children', true).")" ?></td>
      </tr>
    <?php
    }
    endwhile;
    ?>

  </tbody>

  <tfoot>
    <tr>
        <th>Resort</th>
        <th>Webcam</th>
        <th>Category</th>
        <th>Region</th>
        <th>Status</th>
        <th>Altitude Top (Village)</th>
        <th>Price Adult (children)</th>
    </tr>
  </tfoot>
</table>
<div id="dtables">
<?php get_template_part('templates/modal-resort') ?>

<script type="text/javascript" language="javascript" class="init">
$(document).ready(function() {

  $('#myDataTable').dataTable({
     "bJQueryUI":true,
      "bSort":true,
      "bPaginate":true,
      "sPaginationType":"full_numbers",
       "iDisplayLength": 10
   });

});
</script>
