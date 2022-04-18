<?php
spl_autoload_register(function($class) {
	if (file_exists("{$class}.php") === TRUE) {
		require_once "{$class}.php";
	}
});

spl_autoload_register(function ($class) {
	if (file_exists("abstratas" . DIRECTORY_SEPARATOR . "{$class}.php") === TRUE) {
		require_once "abstratas" . DIRECTORY_SEPARATOR . "{$class}.php";
	}
});

$carro = new DelRey();
echo $carro->acelerar(80);

?>
