<?php
// Tipos Básicos
$nome = "Hcode";
$site = 'www.hcode.com.br';
$ano = 1990;
$salario = 5599.99;
$bloqueado = FALSE;

// Tipos Compostos
$frutas = array("abacaxi", "banana", "caju");
echo $frutas[2];

$nascimento = new DateTime();
echo '<br>';
var_dump($nascimento);

echo '<br>';
$arquivo = fopen("exemplo-03.php", "r");
var_dump($arquivo);

$nulo = NULL;
$vazio = "";
?>
