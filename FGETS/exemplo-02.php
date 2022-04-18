<?php
$filename = "php7.png";

$data = file_get_contents($filename);

$base64 = base64_encode($data);

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode = "data:" . $mimetype . ";base64," . $base64;

?>

<a href="<?= $base64encode ?>" target="_blank">Link Imagem</a>
<img src="<?= $base64encode ?>" alt="image">
