<div class="row">
  <div class="col-md-6">
    <div class="resort-logo">
      <?php echo get_the_post_thumbnail( $post_id,'medium' ); ?>
    </div>
    <div class="resort-contact">
      <br>
      <div class="row">
        <div class="col-md-6">
          <i class="typicons-home"></i> <?php echo get_post_meta($post->ID, 'address', true); ?><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo get_post_meta($post->ID, 'npa', true) . ", " . get_post_meta($post->ID, 'location', true);; ?><br>
          <i class="typicons-phone"></i> <?php echo get_post_meta($post->ID, 'phone', true) ?><br>
          <i class="fontawesome-print"></i> <?php echo get_post_meta($post->ID, 'fax', true) ?><br>
          <i class="iconicstroke-mail"></i> <?php echo get_post_meta($post->ID, 'email', true) ?><br>
          <a href="<?php echo get_post_meta($post->ID, 'website', true) ?>"><i class="entypo-globe"></i></a>
          <div class="social-bar">
            <?php
              $social_info = get_post_meta($post->ID, 'social_media_info', true);
              $path=get_stylesheet_directory();
              $path=$path."/templates";
              $path=$path."/addmore-social-template";
              piklist($path, array('data' => $social_info, 'loop' => 'data'));
            ?>
          </div>
        </div>
        <div class="col-md-6">
          <span class="label label-success"><?php echo get_post_meta($post->ID, 'opening_date', true); ?></span>
          <span class="label label-danger"><?php echo get_post_meta($post->ID, 'closing_date', true); ?></span>
          <br>
        </div>
      </div>
      <br>
    </div>
  </div>

  <div class="col-md-6">
    <img src="<?php echo get_post_meta($post->ID, 'webcam', true); ?>" class="img-responsive" alt="" />
  </div>
</div>

<H4>Contact Information</H4>
<?php
  $contact_info = get_post_meta($post->ID, 'contact_info', true);
  $path = get_stylesheet_directory();
  $path = $path."/templates";
  $path = $path."/addmore-contact-template";
  piklist($path, array('data' => $contact_info, 'loop' => 'data'));
?>

<H4>Options</H4>
<?php
$options = get_post_meta($post->ID, 'resort_options', true);

print_r($options);
/*echo $options[0];
echo $options[2];*/
echo"<ul>";
/*foreach($options as $value){*/
echo"<li>";
switch ($options) {
    case 1:
        echo"Parking";
        break;
    case 2:
        echo"Babysitter";
        break;
    case 3:
        echo"Discotheque/Club";
        break;
    case 4:
        echo"Bars/pubs";
        break;
    case 5:
        echo"Après-ski";
        break;
    case 6:
        echo"Festival";
        break;
    case 7:
        echo"Cinema";
        break;
    case 8:
        echo"Spa";
        break;
    case 9:
        echo"Family Discount";
        break;
    case 10:
        echo"Indoor Swimming Pool";
        break;
    case 11:
        echo"Freeride";
        break;
    case 12:
        echo"Snow park";
        break;
    case 13:
        echo"Ski school";
        break;
    case 14:
        echo"Bus service in resort";
        break;
    case 15:
        echo"Bus service to train station";
        break;
}
echo"</li>";/*
}*/
echo"</ul>";
/*$path=get_stylesheet_directory();
$path=$path."/templates";
$path=$path."/addmore-options-template";
piklist($path, array('data' => $options, 'loop' => 'data'));*/
?>

<H4>Gallery</H4>
<?php $image_ids = get_post_meta($post->ID, 'upload_photos'); ?>
<?php foreach ($image_ids as $image): ?>
  <img src="<?php echo wp_get_attachment_url($image); ?>" />
<?php endforeach ?>

<section class="google_maps">
  <br>
  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m10!1m3!1d2756.7351003003255!2d7.394938000000001!3d46.295235!2m1!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa9227860bd0929fe!2zQW56w6hyZQ!5e0!3m2!1sfr!2sfr!4v1412979347644" width="100%" height="300" frameborder="0" style="border:0"></iframe> -->
</section>
