<?php
spl_autoload_register(function($class){
	var_dump($class);
	$dirClass = "class";
	$filename = $dirClass . DIRECTORY_SEPARATOR . $class . ".php";
	if (file_exists($filename)) {
		require_once "$filename";
	}
});
?>