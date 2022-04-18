<?php

$dirname = "images";
echo getcwd() . '<br>';

if (!is_dir($dirname)) {
	mkdir($dirname);
	echo "Diretório '{$dirname}' criado com sucesso!";
} else {
	rmdir($dirname);
	echo "Já existia o diretório: '{$dirname}' e foi removido";
}

?>
