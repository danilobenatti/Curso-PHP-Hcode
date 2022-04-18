<?php
date_default_timezone_set("America/Sao_Paulo");

header("Content-Type: image/jpeg");

$filename = "certificado.jpg";
$image = imagecreatefromjpeg($filename);

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 128, 128, 128);

$format1 = "d/m/Y";
$format2 = "_Ymd_His";

$pathFont = dirname(__FILE__) . '/fonts/arial.ttf';
imagettftext($image, 32, 0, 320, 250, $titleColor, $pathFont, "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titleColor, $pathFont,"João Maria");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: " . date($format1)), $titleColor);

imagejpeg($image); // exibe a imagem na tela.
imagejpeg($image, "certificado" . date($format2) . ".jpg", 75); // salva a imagem
imagedestroy($image);

?>
