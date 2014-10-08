<?php
$type=0;
switch ($data['social_type']) {
    case 1:
        $type="Facebook";
        break;
    case 2:
        $type="Twitter";
        break;
    case 3:
        $type="Instagram";
        break;
    case 4:
        $type="YouTube";
        break;
    case 5:
        $type="Pinterest";
        break;
    case 6:
        $type="Vimeo";
        break;
}
echo"<b>$type: </b>";
$url=$data['social_url'];
echo "<a href='$url'>$url</a><br>";
?>
