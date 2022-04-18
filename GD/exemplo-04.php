<?php
date_default_timezone_set("America/Sao_Paulo");

header("Content-Type: image/jpeg");

$filename = "wallpaper.jpg";
$new_width = 256;
$new_height = 256;

// $data = getimagesize($filename);
// $width = $data[0];
// $height = $data[1];

list($old_width, $old_height) = getimagesize($filename);

$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefromjpeg($filename);

$dst_image = $new_image;
$src_image = $old_image;
$dst_x = 0;
$dst_y = 0;
$src_x = 0;
$src_y = 0;
$dst_w = $new_width;
$dst_h = $new_height;
$src_w = $old_width;
$src_h = $old_height;
imagecopyresampled($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

?>
