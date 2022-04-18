<?php
$nome = "João";
function teste1() {
	global $nome;
	return $nome;
}
function teste2() {
	$nome = "João";
	return $nome . " agora no teste2";
}
echo '<br>' . teste1();
echo '<br>' . teste2();
?>
