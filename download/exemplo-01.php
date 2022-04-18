<?php
$url = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($url);

$parse = parse_url($url);

// $filename = basename($parse['path'], ".png");
$filename = basename($parse['path']);

$handle = fopen($filename, "w+");
fwrite($handle, $content);
fclose($handle);

?>
<img src="<?php echo $filename ?>" alt="filename">