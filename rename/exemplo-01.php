<?php
date_default_timezone_set('America/Sao_Paulo');

$dir1 = "folder_01";
$dir2 = "folder_02";
if (!is_dir($dir1)) {
	mkdir($dir1);
}
if (!is_dir($dir2)) {
	mkdir($dir2);
}

$file = "README.txt";
$filename = $dir1 . DIRECTORY_SEPARATOR . $file;
$mode = 'w+';
if (!file_exists($filename)) {
	$file = fopen($filename, $mode);
	fwrite($file, date("Y/m/d H:i:s"));
	fclose($file);
}

$oldname = $filename;
$newname = $dir2 . DIRECTORY_SEPARATOR . $file;
rename($oldname, $newname);

?>