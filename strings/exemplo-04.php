<?php
$frase = "A repetição é a mãe da retenção.";
echo $frase;
$query = strpos($frase, "mãe");
echo '<br>';
var_dump($query);
echo '<br>';

$texto1 = substr($frase, 0, $query);
echo '<br>', $texto1;
echo '<br>';
var_dump($texto1);
echo '<br>';

$texto2 = substr($frase, $query, strlen($frase));
echo '<br>', $texto2;
echo '<br>';
var_dump($texto2);

echo '<br><br>', $texto1 . $texto2;
?>
