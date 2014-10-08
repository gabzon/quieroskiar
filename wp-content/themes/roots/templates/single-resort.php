
<?php get_template_part('templates/content', 'single'); ?>
<?php echo get_the_post_thumbnail( $post->ID); ?>
<H4>Tourism Office</H4>
Address:
<?php echo get_post_meta($post->ID, 'address', true);?>
NPA:
<?php echo get_post_meta($post->ID, 'npa', true);?>
Location:
<?php echo get_post_meta($post->ID, 'location', true);?>
Phone:
<?php echo get_post_meta($post->ID, 'phone', true);?>
Fax:
<?php echo get_post_meta($post->ID, 'fax', true);?>
Email:
<?php echo get_post_meta($post->ID, 'email', true);?>
Website:
<?php echo get_post_meta($post->ID, 'website', true);?>
<H4>Contact Information</H4>
<?php
$contact_info = get_post_meta($post->ID, 'contact_info', true);
$path=get_stylesheet_directory();
$path=$path."/templates";
$path=$path."/addmore-contact-template";
piklist($path, array('data' => $contact_info, 'loop' => 'data'));
?>

<H4>Social Media Information</H4>
<?php
$social_info = get_post_meta($post->ID, 'social_media_info', true);
$path=get_stylesheet_directory();
$path=$path."/templates";
$path=$path."/addmore-social-template";
piklist($path, array('data' => $social_info, 'loop' => 'data'));
?>
<H4>Options</H4>
<?php
$options = get_post_meta($post->ID, 'resort_options', true);
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
<?php
$image_ids = get_post_meta($post->ID, 'upload_photos');
//echo "MI IDE ES: $post->ID";
echo count($image_ids);
print_r($image_ids)

//echo $image_ids[0];
/*foreach ($image_ids as $image){
    //echo"$image";
    $myupload = get_post_meta($image);
    echo $myupload->ID;
    echo '<img src="' . wp_get_attachment_url($myupload->ID) . '"/>';
    print_r($myupload);
    echo '<img src="' . wp_get_attachment_url($image) . '"/>';

  }*/
?>
