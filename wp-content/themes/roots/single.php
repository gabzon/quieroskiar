<?php get_template_part('templates/content', 'single'); ?>

<?php
echo get_post_meta($post->ID, 'station_name', true);
echo get_post_meta($post->ID, 'contact_type', true);
echo get_post_meta($post->ID, 'contact', true);
echo get_post_meta($post->ID, 'phone', true);
echo get_post_meta($post->ID, 'email', true);
echo get_post_meta($post->ID, 'altitude_range', true);
echo get_post_meta($post->ID, 'ski_season', true);
echo get_post_meta($post->ID, 'adult_price', true);
echo get_post_meta($post->ID, 'family_discount', true);
echo get_post_meta($post->ID, 'place', true);
echo get_post_meta($post->ID, 'yhostel', true);
echo get_post_meta($post->ID, 'discoteque', true);

echo get_post_meta($post->ID, 'bars', true);
echo get_post_meta($post->ID, 'apres_ski', true);
echo get_post_meta($post->ID, 'festival', true);
echo get_post_meta($post->ID, 'cinema', true);
echo get_post_meta($post->ID, 'babysitter', true);
echo get_post_meta($post->ID, 'spa', true);
echo get_post_meta($post->ID, 'pool', true);
?>