<?php

$qualASuaIdade = $_GET['idade'];

const IDADE_CRIANCA = 12;
const IDADE_MAIOR = 18;
const IDADE_MELHOR = 60;

function testaIdade($idade) {
	if ($idade < IDADE_CRIANCA) {
		$str = "Você é uma criança!";
	} else if ($idade <= IDADE_MAIOR) {
		$str = "Você é um(a) adolescente!";
	} else if ($idade < IDADE_MELHOR ){
		$str = "Você é um(a) adulto(a)!";
	} else {
		$str = "Você está na melhor idade, enjoy!";
	}
	return $str;
}

echo testaIdade($qualASuaIdade);
echo '<hr>';
echo ($qualASuaIdade < IDADE_MAIOR) ? "Menor de idade!" : "Maior de idade!";
?>