<?php
$a = 10;
$b = 20;

function trocaValor1($a) {
	$a += 50;
	return $a;
}

function trocaValor2(&$b) {
	$b += 50;
	return $b;
}

echo '<br>' . $a;
echo '<br>' . trocaValor1($a);
echo '<br>' . $a;
echo '<br>';
echo '<br>' . $b;
echo '<br>' . trocaValor2($b);
echo '<br>' . $b;

?>
