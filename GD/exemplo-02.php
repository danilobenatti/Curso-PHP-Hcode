<?php
namespace GD;
date_default_timezone_set("America/Sao_Paulo");

header("Content-Type: image/png");

$filename = "certificado.jpg";
$image = imagecreatefromjpeg($filename);

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 128, 128, 128);

$format1 = "d/m/Y";
$format2 = "YmdHis";

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, utf8_decode("João Maria"), $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: " . date($format1)), $titleColor);

imagejpeg($image); // exibe a imagem na tela.
imagejpeg($image, "certificado_" . date($format2) . ".jpg", 75); // salva a imagem
imagedestroy($image);

?>
