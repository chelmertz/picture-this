<?php

header("Content-Type: image/png");

$image = imagecreate(300, 200);
$background_color = imagecolorallocate($image, 0, 0, 0);
$text_color = imagecolorallocate($image, 233, 14, 91);

imagestring($image, 9, 10, 5, "Some text", $text_color);
imagepng($image);
imagedestroy($image);

