<?php
   $args = array( 'post_type'  => 'resort','numberposts'=> -1, 'post_status' => 'publish'  );
   $resorts = get_posts($args);
?>

<div class="table-responsive">
   <table id="myDataTable" class="table table-striped table-bordered">
      <thead>
         <tr class="table-headers">
            <th>Preferences</th>
            <th>From</th>
            <th>Resort</th>
            <th>Webcam</th>
            <th>Region</th>
            <th>Map</th>
            <th>Status</th>
            <th>Altitude <br><span class="no-satisfy"> top <br> (Village)</span></th>
            <th>Price <br><span class="no-satisfy">Adult <br> (children)</span> </th>
         </tr>
      </thead>

      <tbody>
         <?php $i = 0; ?>
         <?php foreach($resorts as $resort):
            $filters = wp_get_post_terms($resort->ID, 'Filters');
            $regions = wp_get_post_terms($resort->ID, 'Regions');
            $webcam = get_post_meta($resort->ID, 'webcam', true);
            $map = get_post_meta($resort->ID, 'ski_area_map',true);
            $proximity = wp_get_post_terms($resort->ID, 'proximity' );
            $map_image = get_post_meta($resort->ID, 'resort_map');
            $g = get_post_meta($resort->ID, 'resort_tourist_office_group',true);
         ?>
         <?php if (!empty($g)): ?>
            <?php foreach ($g as $key => $value): ?>
               <?php $website = $value[0]; ?>
            <?php endforeach ?>
         <?php endif ?>

         <tr>
            <!-- Filter category -->
            <td>
               <?php
                  foreach($filters as $filter){
                     echo $filter->name . "<br>";
                  }
               ?>
            </td>

            <td>
               <?php
                  foreach($proximity as $p):
                     echo $p->name . "<br>";
                  endforeach;
               ?>
            </td>


            <td>

               <a href="<?php echo $website; ?>" target="_blank">
                  <?php echo get_the_post_thumbnail( $resort->ID,'medium' ); ?><br>
                  <?php echo get_the_title($resort->ID); ?>
               </a>
            </td>

            <td><a href="<?php echo $webcam;  ?>" target="_blank"><img src="<?php echo $webcam  ?>" width="100"></a></td>

            <!-- Regions -->
            <td>
              <?php
              foreach($regions as $region){
                 echo $region->name . "<br>";
              }
              ?>
            </td>

            <!-- map -->
            <td>
               <?php if (!empty($map)): ?>
                  <a href="<?php echo $map; ?>" target="_blank">
                     <?php foreach ($map_image as $image): ?>
                        <?php $myupload = get_post($image); ?>
                        <img src="<?php echo wp_get_attachment_url($image) ?>" alt="map" width="100"/>
                     <?php endforeach ?>
                  </a>
               <?php endif; ?>
            </td>

            <!-- Status -->
            <td>
               <a href="<?php echo get_post_meta($resort->ID,'ski_area_status',true); ?>" target="_blank">
                  <img src="<?php echo get_stylesheet_directory_uri()."/assets/img/traffic-light.png" ?>" alt=""/>
               </a>
            </td>

            <!-- Altitude -->
            <td>
               <?php
                  echo get_post_meta($resort->ID, 'resort_altitude_highest_mountain',true) . " m. <br>";
                  echo "(" . get_post_meta($resort->ID, 'resort_altitude_city',true) ." m.)";
               ?>
            </td>

            <!-- Price -->
            <td>
               <?php
                  echo get_post_meta($resort->ID, 'resort_price_currency', true) . " " .get_post_meta($resort->ID, 'resort_price_adult', true) . ".-<br>";
                  echo "(". get_post_meta($resort->ID, 'resort_price_currency', true) . " " . get_post_meta($resort->ID, 'resort_price_children', true) . ".-)";
               ?>
            </td>
         </tr>
         <?php $i++; ?>
         <?php endforeach; ?>

      </tbody>

      <tfoot>
         <tr>
            <th>Preferences</th>
            <th>From</th>
            <th>Resort</th>
            <th>Webcam</th>
            <th>Region</th>
            <th>Map</th>
            <th>Status</th>
            <th>Altitude <br><span class="no-satisfy"> top <br> (Village)</span></th>
            <th>Price <br><span class="no-satisfy">Adult <br> (children)</span> </th>
         </tr>
      </tfoot>
   </table>
</div>
