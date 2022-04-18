<?php
$directory = 'images';
$images = scandir($directory);

$data = array();

foreach ($images as $img) {
	if (!in_array($img, array('.','..'))) {
		$filename = "images" . DIRECTORY_SEPARATOR . $img;
		$info = pathinfo($filename);
		$info['size'] = filesize($filename);
// 		$info['created'] = 
		$created = filectime($filename);
		$modified = filemtime($filename);
		$acessed = fileatime($filename);
		$format = 'd/m/Y H:i:s';
		$info['created'] = date($format, $created);
		$info['modified'] = date($format, $modified);
		$info['acessed'] = date($format, $acessed);
		$search = "\\";
		$replace = "/";
		$info['URL'] = "http://localhost/Curso-PHP-Hcode/DIR/" . str_replace($search, $replace, $filename);
		array_push($data, $info);
	}
}

echo json_encode($data);

?>
