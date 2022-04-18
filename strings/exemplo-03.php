<?php
$nome = "Hcode";
echo $nome;
$search = ["o","e"];
$replace = ["0","3"];
$nome = str_replace($search, $replace, $nome);
echo '<br>', $nome;
?>
