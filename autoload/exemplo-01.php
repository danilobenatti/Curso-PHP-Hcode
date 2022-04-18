<?php
function __autoload($nomeClasse){
	echo var_dump($nomeClasse) . '<br>';
	require_once "../autoload/{$nomeClasse}.php";
}

$carro = new DelRey();
echo $carro->acelerar(80);

?>
