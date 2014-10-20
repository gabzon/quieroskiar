<?php
  define('WP_USE_THEMES',false);
  require_once("/../../../../wp-blog-header.php");
  $numero = count($_GET);
  $tags = array_keys($_GET);
  $data = array_values($_GET);
?>
<div id="dtables">
<table id="myDataTable" class="table table-striped table-bordered">
  <thead>
    <tr>
        <th>Resort</th>
        <!-- <th>Webcam</th> -->
        <th>Region</th>
        <th>Opening date</th>
        <th>Altitude Top</th>
        <th>Altitude Bottom</th>
        <th>Price Adult</th>
        <th>Price Children</th>
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
          $term_list = wp_get_post_terms($post->ID, 'Filters');
          $regions = wp_get_post_terms($post->ID, 'Regions');
          //$region = $regions[0]->name;
          $webcam = get_post_meta($post->ID, 'webcam', true);
          //get_the_post_thumbnail( $post->ID,'medium' );
          $sw=1;
          $i=0;
          $cont=0;
          if(count($term_list)==count($data)){
            while($term_list[$i] && $sw){
              if(!in_array($term_list[$i]->name,$data))
                $sw=0;
              else
                $cont++;
              $i++;
            }
          if($sw){
        ?>

      <tr>
        <td><a href="<?php echo get_post_meta($post->ID, 'website', true); ?>" target="_blank"><?php echo the_title(); ?></a></td>
        <!-- <td><a href="#my_modal" data-toggle="modal" data-book-id="<?php //echo $post->ID; ?>"><?php //echo the_title(); ?></a></td> -->
        <!-- <td><a href="<?php //echo $webcam;  ?>" target="_blank"><img src="<?php //echo $webcam  ?>" width="100"></a></td> -->
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
        <!--<td><?php //echo $region;?></td>-->
        <td><?php echo get_post_meta($post->ID, 'opening_date', true); ?></td>
        <td><?php echo get_post_meta($post->ID, 'altitude_top', true); ?></td>
        <th><?php echo get_post_meta($post->ID, 'altitude_bottom', true); ?></th>
        <td><?php echo $currency . " " .get_post_meta($post->ID, 'price_adult', true); ?></td>
        <td><?php echo $currency . " " . get_post_meta($post->ID, 'Price_children', true);  ?></td>
      </tr>

    <?php
    }

    }
  endwhile;
    ?>

  </tbody>

  <tfoot>
    <tr>
        <th>Resort</th>
        <!-- <th>Webcam</th> -->
        <th>Region</th>
        <th>Opening date</th>
        <th>Altitude Top</th>
        <th>Altitude Bottom</th>
        <th>Price Adult</th>
        <th>Price Children</th>
    </tr>
  </tfoot>
</table>
<div id="dtables">
<?php get_template_part('templates/modal-resort') ?>

<script type="text/javascript" language="javascript" class="init">
$(document).ready(function() {
  var bookId = '';

  $('#myDataTable').dataTable({
     "bJQueryUI":true,
      "bSort":false,
      "bPaginate":true,
      "sPaginationType":"full_numbers",
       "iDisplayLength": 10
   });

  $('#my_modal').on('show.bs.modal', function(e) {
    var bookId = $(e.relatedTarget).data('book-id');
    $(e.currentTarget).find('input[name="bookId"]').val(bookId);
    $.ajax({
      //url: 'http://localhost/want2ski/',
      url: 'modal-resort.php',
      type: 'get',
      data: { x: 'dsd' }
    });
  });

});
</script>
