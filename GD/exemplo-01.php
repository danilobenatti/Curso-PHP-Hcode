<?php
header("Content-Type: image/png");

$width = 256;
$height = 256;
$image = imagecreate($width, $height);

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso PHP7 Hcode", $red);

imagepng($image);

imagedestroy($image);

?>
