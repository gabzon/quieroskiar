<?php

$type=0;
switch ($data['social_type']) {
    case 1:
        $type = "entypo-facebook";
        break;
    case 2:
        $type = "entypo-twitter";
        break;
    case 3:
        $type = "entypo-instagrem";
        break;
    case 4:
        $type = "zocial-youtube";
        break;
    case 5:
        $type = "entypo-pinterest";
        break;
    case 6:
        $type = "entypo-vimeo";
        break;
    case 7:
        $type = "entypo-gplus";
        break;
}

$url = $data['social_url'];

?>

<a href="<?php echo $url; ?>" target="_blank"><i class="icon <?php echo $type; ?>"></i></a>
